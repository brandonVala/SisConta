<?php

namespace App\Repository;

use App\Entity\ClasifPrincipal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClasifPrincipal>
 *
 * @method ClasifPrincipal|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClasifPrincipal|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClasifPrincipal[]    findAll()
 * @method ClasifPrincipal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasifPrincipalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClasifPrincipal::class);
    }

//    /**
//     * @return ClasifPrincipal[] Returns an array of ClasifPrincipal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClasifPrincipal
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
