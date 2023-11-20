<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        
    }
    public function load(ObjectManager $manager): void 
    {
        $user = new User();
        $user->setFirstName('foo');
        $user->setLastName('foooooo');
        $user->setEmail('foo@foo.com');
        $user->setPassword($this->userPasswordHasherInterface->hashPassword($user, "1234"));

        $manager->persist($user);
        
        $manager->flush();
    }
    
}
