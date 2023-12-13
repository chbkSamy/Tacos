<?php

namespace App\Repository;

use App\Entity\Tacos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tacos>
 *
 * @method Tacos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tacos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tacos[]    findAll()
 * @method Tacos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TacosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tacos::class);
    }

//    /**
//     * @return Tacos[] Returns an array of Tacos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tacos
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
