<?php

namespace App\Repository;

use App\Entity\Clasificacionc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Clasificacionc>
 *
 * @method Clasificacionc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clasificacionc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clasificacionc[]    findAll()
 * @method Clasificacionc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasificacioncRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clasificacionc::class);
    }

//    /**
//     * @return Clasificacionc[] Returns an array of Clasificacionc objects
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

//    public function findOneBySomeField($value): ?Clasificacionc
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
