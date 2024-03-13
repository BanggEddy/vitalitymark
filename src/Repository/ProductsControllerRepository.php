<?php

namespace App\Repository;

use App\Entity\ProductsController;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductsController>
 *
 * @method ProductsController|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductsController|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductsController[]    findAll()
 * @method ProductsController[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductsController::class);
    }

//    /**
//     * @return ProductsController[] Returns an array of ProductsController objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductsController
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
