<?php

namespace App\Repository;

use App\Entity\AltaMateriales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AltaMateriales>
 *
 * @method AltaMateriales|null find($id, $lockMode = null, $lockVersion = null)
 * @method AltaMateriales|null findOneBy(array $criteria, array $orderBy = null)
 * @method AltaMateriales[]    findAll()
 * @method AltaMateriales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AltaMaterialesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AltaMateriales::class);
    }

//    /**
//     * @return AltaMateriales[] Returns an array of AltaMateriales objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AltaMateriales
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
