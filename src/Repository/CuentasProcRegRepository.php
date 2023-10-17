<?php

namespace App\Repository;

use App\Entity\CuentasProcReg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CuentasProcReg>
 *
 * @method CuentasProcReg|null find($id, $lockMode = null, $lockVersion = null)
 * @method CuentasProcReg|null findOneBy(array $criteria, array $orderBy = null)
 * @method CuentasProcReg[]    findAll()
 * @method CuentasProcReg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CuentasProcRegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CuentasProcReg::class);
    }

//    /**
//     * @return CuentasProcReg[] Returns an array of CuentasProcReg objects
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

//    public function findOneBySomeField($value): ?CuentasProcReg
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
