<?php

namespace App\Repository;

use App\Entity\LitInscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LitInscription>
 *
 * @method LitInscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method LitInscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method LitInscription[]    findAll()
 * @method LitInscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LitInscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LitInscription::class);
    }

//    /**
//     * @return LitInscription[] Returns an array of LitInscription objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LitInscription
//    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    
    public function FindAffectationByPeriode($inscription,$dateDebut,$dateFin): array
    {
        return $this->createQueryBuilder('affectation')
            ->innerjoin('affectation.inscription','inscription')
            ->andWhere('inscription = :inscription')
            ->andWhere(':dateDebut BETWEEN affectation.start AND affectation.end OR :dateFin BETWEEN affectation.start AND affectation.end')
            ->andWhere('affectation.active = 1')
            ->setParameter('inscription', $inscription)
            ->setParameter('dateDebut', $dateDebut)
            ->setParameter('dateFin', $dateFin)
            // ->orderBy('l.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            // ->getOneOrNullResult()
            ->getResult()
        ;
    }
}
