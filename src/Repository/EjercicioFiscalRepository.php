<?php

namespace App\Repository;

use App\Entity\EjercicioFiscal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EjercicioFiscal>
 *
 * @method EjercicioFiscal|null find($id, $lockMode = null, $lockVersion = null)
 * @method EjercicioFiscal|null findOneBy(array $criteria, array $orderBy = null)
 * @method EjercicioFiscal[]    findAll()
 * @method EjercicioFiscal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EjercicioFiscalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EjercicioFiscal::class);
    }

//    /**
//     * @return EjercicioFiscal[] Returns an array of EjercicioFiscal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EjercicioFiscal
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
