<?php

namespace App\Repository;

use App\Entity\TChambre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TChambre>
 *
 * @method TChambre|null find($id, $lockMode = null, $lockVersion = null)
 * @method TChambre|null findOneBy(array $criteria, array $orderBy = null)
 * @method TChambre[]    findAll()
 * @method TChambre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TChambreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TChambre::class);
    }

//    /**
//     * @return TChambre[] Returns an array of TChambre objects
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

//    public function findOneBySomeField($value): ?TChambre
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
