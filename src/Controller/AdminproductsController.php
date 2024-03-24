<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductsRepository;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\User;
use App\Entity\Promo;
use App\Form\ProductSearchType;
use App\Repository\PromoRepository;
use App\Repository\PanierRepository;

use Symfony\Component\HttpFoundation\JsonResponse;

class AdminproductsController extends AbstractController
{
    private $entityManager;
    private $filesystem;

    public function __construct(EntityManagerInterface $entityManager, Filesystem $filesystem)
    {
        $this->entityManager = $entityManager;
        $this->filesystem = $filesystem;
    }

    #[Route('/adminproducts', name: 'app_adminproducts')]
    public function index(ProductsRepository $productsRepository, Request $request, PromoRepository $promoRepository,): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        $promotions = $promoRepository->findAll();
        $products = $productsRepository->findAll();

        return $this->render('admin/adminproducts/index.html.twig', [
            'controller_name' => 'AdminproductsController',
            'products' => $products,
            'form' => $form->createView(),
            'promotions' => $promotions,
        ]);
    }


    //Ajouter un produit
    #[Route('/adminajouterproducts', name: 'app_admin_add_products')]
    public function addProducts(Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/adminproducts/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/product/create', name: 'app_create_product')]
    public function create(Request $request): Response
    {
        $name = $request->request->get('name');
        $price = $request->request->get('price');
        $category = $request->request->get('category');
        $quantity = $request->request->get('quantity');
        $description = $request->request->get('description');

        $imageFile = $request->files->get('image');

        // Gérer le téléchargement du fichier
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            // Nouveau nom de fichier pour éviter les conflits
            $newFilename = $originalFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
            }

            $product = new Products();
            $product->setName($name);
            $product->setPrice($price);
            $product->setCategory($category);
            $product->setQuantity($quantity);
            $product->setImages($newFilename);
            $product->setDescription($description);

            $this->entityManager->persist($product);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_adminproducts');
        }
    }
    //Supprimer un produit
    #[Route('/admindeleteproducts', name: 'app_admin_delete_products')]
    public function deleteProducts(ProductsRepository $productsRepository, Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        $products = $productsRepository->findAll();

        return $this->render('admin/adminproducts/delete.html.twig', [
            'products' => $products,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/deleteproduct/{id}', name: 'app_delete_product')]
    public function deleteProduct(Products $product): RedirectResponse
    {
        $imagePath = $this->getParameter('kernel.project_dir') . '/public/images/' . $product->getImages();

        // Vérifier si le fichier image existe
        if ($this->filesystem->exists($imagePath)) {
            // Supprimer le fichier image du système de fichiers
            $this->filesystem->remove($imagePath);
        }

        $this->entityManager->remove($product);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_admin_delete_products');
    }

    //Update un produit
    #[Route('/adminupdateproducts', name: 'app_admin_update_products')]
    public function updateProducts(ProductsRepository $productsRepository, Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        $products = $productsRepository->findAll();

        return $this->render('admin/adminproducts/edit.html.twig', [
            'products' => $products,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/adminformedit/{id}', name: 'app_admin_form_edit')]
    public function editProductForm(Products $product): Response
    {
        return $this->render('admin/adminproducts/formedit.html.twig', [
            'product' => $product,
        ]);
    }

    public function editProduct(Request $request, Products $product, EntityManagerInterface $entityManager, Filesystem $filesystem): Response
    {
        $name = $request->request->get('name');
        $price = $request->request->get('price');
        $category = $request->request->get('category');
        $quantity = $request->request->get('quantity');
        $description = $request->request->get('description');

        // Gérer le téléchargement de la nouvelle image
        $imageFile = $request->files->get('image');
        if ($imageFile instanceof UploadedFile) {
            $imageName = uniqid() . '.' . $imageFile->guessExtension();
            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $imageName
                );
            } catch (FileException $e) {
                // Gérer l'erreur, par exemple afficher un message à l'utilisateur
            }
            // Supprimer l'ancienne image s'il en existe une
            $oldImage = $product->getImages();
            if ($oldImage) {
                $filesystem->remove($this->getParameter('images_directory') . '/' . $oldImage);
            }
            // Mettre à jour le nom de la nouvelle image dans l'entité Products
            $product->setImages($imageName);
        }

        $product->setName($name);
        $product->setPrice($price);
        $product->setCategory($category);
        $product->setQuantity($quantity);
        $product->setDescription($description);

        $entityManager->flush();

        return $this->redirectToRoute('app_adminproducts');
    }
    #[Route('/compte/admin', name: 'app_admin_compte')]
    public function adminCompte(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }
        // Vérifier si un utilisateur est connecté
        if ($user instanceof User) {
            $userId = $user->getId();
        } else {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('admin/adminproducts/compteadmin.html.twig', [
            'userId' => $userId,
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/edit_admin_profile", name="edit_admin_profile", methods={"POST"})
     */
    #[Route('edit/admin/profile', name: 'edit_admin_profile')]
    public function editUserProfile(Request $request, EntityManagerInterface $entityManager, PanierRepository $panierRepository): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        $email = $request->request->get('email');
        $name = $request->request->get('name');
        $adresse = $request->request->get('adresse');
        $civilite = $request->request->get('civilite');

        $user->setEmail($email);
        $user->setName($name);
        $user->setAdresse($adresse);
        $user->setCivilite($civilite);

        $entityManager->flush();

        return new RedirectResponse($this->generateUrl('compte_admin'));
    }

    #[Route('/admin/add_quantity_promo/{productId}', name: 'admin_add_quantity_promo')]
    public function addQuantityPromo(Request $request, $promoId): Response
    {
        $promoRepository = $this->entityManager->getRepository(Promo::class);
        $promo = $promoRepository->find($promoId);

        if (!$promo) {
            throw $this->createNotFoundException('Le produit avec l\'ID ' . $promoId . ' n\'existe pas.');
        }

        // Récupérer la quantité à ajouter depuis le formulaire
        $quantityToAdd = $request->request->get('quantity');

        // Ajouter la quantité au produit
        $newQuantity = $promo->getQuantity() + $quantityToAdd;
        $promo->setQuantity($newQuantity);

        $this->entityManager->flush();

        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/admin/remove_quantity_promo/{productId}', name: 'admin_remove_quantity_promo')]
    public function removeQuantityPromo(Request $request, $promoId): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $promoRepository = $this->entityManager->getRepository(Promo::class);
        $promo = $promoRepository->find($promoId);

        if (!$promo) {
            throw $this->createNotFoundException('Le produit avec l\'ID ' . $promoId . ' n\'existe pas.');
        }

        $quantityToRemove = $request->request->get('quantity');

        // Vérifier si la quantité à retirer est inférieure ou égale à la quantité disponible
        if ($quantityToRemove <= $promo->getQuantity()) {
            // Retirer la quantité du produit
            $newQuantity = $promo->getQuantity() - $quantityToRemove;
            $promo->setQuantity($newQuantity);

            // Sauvegarder les changements dans la base de données
            $this->entityManager->flush();
        } else {
            // Gérer le cas où la quantité à retirer est supérieure à la quantité disponible
            throw new \Exception('La quantité à retirer est supérieure à la quantité disponible.');
        }

        // Rediriger vers la liste des produits
        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/admin/add_quantity/{productId}', name: 'admin_add_quantity')]
    public function addQuantity(Request $request, $productId): Response
    {
        $productRepository = $this->entityManager->getRepository(Products::class);
        $product = $productRepository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException('Le produit avec l\'ID ' . $productId . ' n\'existe pas.');
        }

        // Récupérer la quantité à ajouter depuis le formulaire
        $quantityToAdd = $request->request->get('quantity');

        // Ajouter la quantité au produit
        $newQuantity = $product->getQuantity() + $quantityToAdd;
        $product->setQuantity($newQuantity);

        $this->entityManager->flush();

        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/admin/remove_quantity/{productId}', name: 'admin_remove_quantity')]
    public function removeQuantity(Request $request, $productId): Response
    {
        $productRepository = $this->entityManager->getRepository(Products::class);
        $product = $productRepository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException('Le produit avec l\'ID ' . $productId . ' n\'existe pas.');
        }

        $quantityToRemove = $request->request->get('quantity');

        // Vérifier si la quantité à retirer est inférieure ou égale à la quantité disponible
        if ($quantityToRemove <= $product->getQuantity()) {
            // Retirer la quantité du produit
            $newQuantity = $product->getQuantity() - $quantityToRemove;
            $product->setQuantity($newQuantity);

            // Sauvegarder les changements dans la base de données
            $this->entityManager->flush();
        } else {
            // Gérer le cas où la quantité à retirer est supérieure à la quantité disponible
            throw new \Exception('La quantité à retirer est supérieure à la quantité disponible.');
        }

        // Rediriger vers la liste des produits
        return $this->redirectToRoute('admin_products_list');
    }

    //Afficher le profil admin
    #[Route('/compte/admin', name: 'compte_admin')]
    public function profiladmin(Request $request)
    {

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/adminproducts/compteadmin.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    //Rechercher un produit
    #[Route('/search/admin', name: 'search_admin')]
    public function search(Request $request, EntityManagerInterface $entityManager)
    {
        // Récupérer le terme de recherche depuis la requête
        $keyword = $request->request->get('keyword');

        // Récupérer les produits correspondant au nom du produit (correspondance partielle)
        $productsRepository = $entityManager->getRepository(Products::class);
        $products = $productsRepository->createQueryBuilder('p')
            ->where('p.name LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->getQuery()
            ->getResult();

        // Récupérer les promotions correspondant au nom du produit (correspondance partielle)
        $promosRepository = $entityManager->getRepository(Promo::class);
        $promos = $promosRepository->createQueryBuilder('p')
            ->join('p.idproduct', 'pr')
            ->where('pr.name LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/adminproducts/search.html.twig', [
            'products' => $products,
            'promos' => $promos,
            'keyword' => $keyword,
        ]);
    }

    #Rechercher des produits selon la catégorie
    #[Route('/admin/adminproducts/categorie/{category}', name: 'admin_category_products')]
    public function showCategoryProductsAdmin($category, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $products = $entityManager->getRepository(Products::class)->findBy(['category' => $category]);
        $promotions = $entityManager->getRepository(Promo::class)->findBy(['category' => $category]);

        return $this->render('admin/adminproducts/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'promotions' => $promotions,
            'form' => $form->createView(),
            'user_id' => $userId,
        ]);
    }
}
