<?php

namespace App\Repository;

use App\Entity\ClasificacionCuentas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClasificacionCuentas>
 *
 * @method ClasificacionCuentas|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClasificacionCuentas|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClasificacionCuentas[]    findAll()
 * @method ClasificacionCuentas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasificacionCuentasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClasificacionCuentas::class);
    }

//    /**
//     * @return ClasificacionCuentas[] Returns an array of ClasificacionCuentas objects
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

//    public function findOneBySomeField($value): ?ClasificacionCuentas
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
