<?php

namespace App\Repository;

use App\Entity\Naturaleza;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Naturaleza>
 *
 * @method Naturaleza|null find($id, $lockMode = null, $lockVersion = null)
 * @method Naturaleza|null findOneBy(array $criteria, array $orderBy = null)
 * @method Naturaleza[]    findAll()
 * @method Naturaleza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaturalezaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Naturaleza::class);
    }

//    /**
//     * @return Naturaleza[] Returns an array of Naturaleza objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Naturaleza
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
