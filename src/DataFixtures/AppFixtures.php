<?php

namespace App\DataFixtures;

use App\Entity\Vehicle;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $vehicle1 = new Vehicle();
        $vehicle1->setPrice(12000);
        $vehicle1->setModel('208');
        $vehicle1->setMileage(10890);
        $vehicle1->setYearOfRegistration(new DateTime('2020-12-12'));
        $vehicle1->setEquipment('Système de sécurité : Assistance au freinage d\'urgence, ABS, ESP, et airbags.
        Confort intérieur : Climatisation manuelle, système audio de base, sièges réglables en hauteur.
        Connectivité : Écran tactile, connectivité Bluetooth, éventuellement compatibilité avec les applications smartphone.
        Éclairage : Phares halogènes (possiblement feux LED sur certaines versions).
        Roues : Roues en acier avec enjoliveurs.');
        // $vehicle1->setFrontPic('../../img/voitures/208-1.jpg');
        // $vehicle1->setPics('../../img/voitures/');
        $manager->persist($vehicle1);
        
        $vehicle2 = new Vehicle();
        $vehicle2->setPrice(6000);
        $vehicle2->setModel('Golf 4');
        $vehicle2->setMileage(50600);
        $vehicle2->setYearOfRegistration(new DateTime('2010-12-12'));
        $vehicle2->setEquipment('Système de sécurité : Assistance au freinage d\'urgence, ABS, ESP, et airbags.
        Confort intérieur : Climatisation manuelle, système audio de base, sièges réglables en hauteur.
        Connectivité : Écran tactile, connectivité Bluetooth, éventuellement compatibilité avec les applications smartphone.
        Éclairage : Phares halogènes.
        Roues : Roues en acier avec enjoliveurs.');
        // $vehicle2->setFrontPic('../../img/voitures/golf4.jpg');
        // $vehicle2->setPics('../../img/voitures/');
        $manager->persist($vehicle2);
        
        $vehicle3 = new Vehicle();
        $vehicle3->setPrice(22000);
        $vehicle3->setModel('4.30');
        $vehicle3->setMileage('1090');
        $vehicle3->setYearOfRegistration(new DateTime('2018-12-12'));
        $vehicle3->setEquipment('Système de sécurité : Assistance au freinage d\'urgence, ABS, ESP, et airbags.
        Confort intérieur : Climatisation manuelle, système audio de base, sièges réglables en hauteur.
        Connectivité : Écran tactile, connectivité Bluetooth, éventuellement compatibilité avec les applications smartphone.
        Éclairage : Phares halogènes (possiblement feux LED sur certaines versions).
        Roues : Roues en acier avec enjoliveurs.');
        // $vehicle3->pathFrontPic('../../img/voitures/bmw.jpg');
        // $vehicle3->setPics('../../img/voitures/');
        $manager->persist($vehicle3);
        
        $manager->flush();
    }
}
