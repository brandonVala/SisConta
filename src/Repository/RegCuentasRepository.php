<?php

namespace App\Repository;

use App\Entity\RegCuentas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RegCuentas>
 *
 * @method RegCuentas|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegCuentas|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegCuentas[]    findAll()
 * @method RegCuentas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegCuentasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegCuentas::class);
    }

//    /**
//     * @return RegCuentas[] Returns an array of RegCuentas objects
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

//    public function findOneBySomeField($value): ?RegCuentas
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
