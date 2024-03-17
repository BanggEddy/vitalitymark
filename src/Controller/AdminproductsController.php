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
    public function index(ProductsRepository $productsRepository): Response
    {
        // Récupérer tous les produits disponibles depuis le repository
        $products = $productsRepository->findAll();

        // Rendre la vue en transmettant la liste des produits
        return $this->render('admin/adminproducts/index.html.twig', [
            'controller_name' => 'AdminproductsController',
            'products' => $products,
        ]);
    }
    //Ajouter un produit
    #[Route('/adminajouterproducts', name: 'app_admin_add_products')]
    public function addProducts(): Response
    {
        return $this->render('admin/adminproducts/new.html.twig');
    }

    #[Route('/product/create', name: 'app_create_product')]
    public function create(Request $request): Response
    {
        // Récupérer les données du formulaire
        $name = $request->request->get('name');
        $price = $request->request->get('price');
        $category = $request->request->get('category');
        $quantity = $request->request->get('quantity');
        $description = $request->request->get('description');

        // Récupérer le fichier d'image
        $imageFile = $request->files->get('image');

        // Gérer le téléchargement du fichier
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            // Nouveau nom de fichier pour éviter les conflits
            $newFilename = $originalFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            // Déplacer le fichier dans le dossier public/images
            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // Gérer une éventuelle erreur lors du téléchargement
            }

            // Enregistrer le nom de l'image dans la base de données
            $product = new Products();
            $product->setName($name);
            $product->setPrice($price);
            $product->setCategory($category);
            $product->setQuantity($quantity);
            $product->setImages($newFilename); // Enregistrer le nom du fichier
            $product->setDescription($description);

            // Enregistrer le produit dans la base de données
            $this->entityManager->persist($product);
            $this->entityManager->flush();

            // Rediriger vers une page de succès ou autre
            return $this->redirectToRoute('app_adminproducts');
        }

        // Si aucune image n'est téléchargée, gérer l'erreur ou renvoyer à la page précédente
    }
    //Supprimer un produit
    #[Route('/admindeleteproducts', name: 'app_admin_delete_products')]
    public function deleteProducts(ProductsRepository $productsRepository): Response
    {
        // Récupérer tous les produits depuis le repository
        $products = $productsRepository->findAll();

        // Passer les produits à la vue
        return $this->render('admin/adminproducts/delete.html.twig', [
            'products' => $products,
        ]);
    }
    #[Route('/deleteproduct/{id}', name: 'app_delete_product')]
    public function deleteProduct(Products $product): RedirectResponse
    {
        // Récupérer le chemin de l'image associée au produit
        $imagePath = $this->getParameter('kernel.project_dir') . '/public/images/' . $product->getImages();

        // Vérifier si le fichier image existe
        if ($this->filesystem->exists($imagePath)) {
            // Supprimer le fichier image du système de fichiers
            $this->filesystem->remove($imagePath);
        }

        // Supprimer le produit de la base de données
        $this->entityManager->remove($product);
        $this->entityManager->flush();

        // Rediriger vers la page admindeleteproducts après la suppression
        return $this->redirectToRoute('app_admin_delete_products');
    }

    //Update un produit
    #[Route('/adminupdateproducts', name: 'app_admin_update_products')]
    public function updateProducts(ProductsRepository $productsRepository): Response
    {
        // Récupérer tous les produits depuis le repository
        $products = $productsRepository->findAll();

        // Passer les produits à la vue
        return $this->render('admin/adminproducts/edit.html.twig', [
            'products' => $products,
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
        // Récupérer les données du formulaire
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

        // Mettre à jour les attributs du produit avec les nouvelles valeurs
        $product->setName($name);
        $product->setPrice($price);
        $product->setCategory($category);
        $product->setQuantity($quantity);
        $product->setDescription($description);

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        // Rediriger vers une page de confirmation ou une autre page après la modification
        return $this->redirectToRoute('app_adminproducts');
    }
    #[Route('/compteadmin', name: 'app_admin_compte')]
    public function adminCompte(): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Vérifier si un utilisateur est connecté
        if ($user instanceof User) {
            $userId = $user->getId();
        } else {
            return $this->redirectToRoute('app_login');
        }

        // Passez les données de l'utilisateur à la vue Twig
        return $this->render('admin/adminproducts/compteadmin.html.twig', [
            'userId' => $userId,
        ]);
    }

    #[Route('/admin/add_quantity/{productId}', name: 'admin_add_quantity')]
    public function addQuantity(Request $request, $productId): Response
    {
        // Récupérer le repository de Product
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

        // Sauvegarder les changements dans la base de données
        $this->entityManager->flush();

        // Rediriger vers la liste des produits
        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/admin/remove_quantity/{productId}', name: 'admin_remove_quantity')]
    public function removeQuantity(Request $request, $productId): Response
    {
        // Récupérer le repository de Product
        $productRepository = $this->entityManager->getRepository(Products::class);
        $product = $productRepository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException('Le produit avec l\'ID ' . $productId . ' n\'existe pas.');
        }

        // Récupérer la quantité à retirer depuis le formulaire
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
}
