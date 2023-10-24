<?php

namespace App\Repository;

use App\Entity\RegEntradasSalidas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RegEntradasSalidas>
 *
 * @method RegEntradasSalidas|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegEntradasSalidas|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegEntradasSalidas[]    findAll()
 * @method RegEntradasSalidas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegEntradasSalidasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegEntradasSalidas::class);
    }

//    /**
//     * @return RegEntradasSalidas[] Returns an array of RegEntradasSalidas objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RegEntradasSalidas
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
