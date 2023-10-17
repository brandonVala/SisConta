<?php

namespace App\Repository;

use App\Entity\ValuacionInventarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ValuacionInventarios>
 *
 * @method ValuacionInventarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValuacionInventarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValuacionInventarios[]    findAll()
 * @method ValuacionInventarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValuacionInventariosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValuacionInventarios::class);
    }

//    /**
//     * @return ValuacionInventarios[] Returns an array of ValuacionInventarios objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ValuacionInventarios
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
