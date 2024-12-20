<?php

namespace App\Repository;

use App\Entity\StatutChambre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StatutChambre>
 *
 * @method StatutChambre|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatutChambre|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatutChambre[]    findAll()
 * @method StatutChambre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatutChambreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatutChambre::class);
    }

//    /**
//     * @return StatutChambre[] Returns an array of StatutChambre objects
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

//    public function findOneBySomeField($value): ?StatutChambre
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
