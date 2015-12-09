<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository {

    public function loadUserByEmail($email) {
        $user = $this->createQueryBuilder('u')
                ->where('u.email = :email')
                ->setParameter('email', $email)
                ->getQuery()
                ->getOneOrNullResult();

        if (null === $user) {
            $message = sprintf(
                    'Unable to find an active admin AppBundle:User object identified by "%s".', $email
            );
            throw new \Doctrine\ORM\NoResultException($message);
        }

        return $user;
    }
}
