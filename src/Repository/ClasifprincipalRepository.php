<?php

namespace App\Repository;

use App\Entity\Clasifprincipal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Clasifprincipal>
 *
 * @method Clasifprincipal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clasifprincipal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clasifprincipal[]    findAll()
 * @method Clasifprincipal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasifprincipalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clasifprincipal::class);
    }

//    /**
//     * @return Clasifprincipal[] Returns an array of Clasifprincipal objects
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

//    public function findOneBySomeField($value): ?Clasifprincipal
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
