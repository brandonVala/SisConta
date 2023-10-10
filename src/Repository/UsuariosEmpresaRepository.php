<?php

namespace App\Repository;

use App\Entity\UsuariosEmpresa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsuariosEmpresa>
 *
 * @method UsuariosEmpresa|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuariosEmpresa|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuariosEmpresa[]    findAll()
 * @method UsuariosEmpresa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuariosEmpresaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsuariosEmpresa::class);
    }

//    /**
//     * @return UsuariosEmpresa[] Returns an array of UsuariosEmpresa objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UsuariosEmpresa
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
