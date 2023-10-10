<?php

namespace App\Repository;

use App\Entity\ProcedimientoReg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProcedimientoReg>
 *
 * @method ProcedimientoReg|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProcedimientoReg|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProcedimientoReg[]    findAll()
 * @method ProcedimientoReg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProcedimientoRegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProcedimientoReg::class);
    }

//    /**
//     * @return ProcedimientoReg[] Returns an array of ProcedimientoReg objects
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

//    public function findOneBySomeField($value): ?ProcedimientoReg
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
