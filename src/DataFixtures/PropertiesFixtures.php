<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\DBAL\Driver\IBMDB2\Exception\Factory;
use Faker;




class PropertiesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    
        $faker = Faker\Factory::create('fr_FR');
        
        for ($i = 0; $i < 5; $i++) {

            $property = new Property();
            $property ->setTitle ($faker ->title());
            $property ->setDescription ($faker ->descrition());
            $property ->setSurface ($faker -> numberBetween(40-250));
            $property -> setBedrooms ($faker -> numberBetween (1-5));
            $property -> setCity ($faker -> city());
            $property -> setCountry ($faker -> country());
            $property -> setPrice ($faker -> numberBetween(500 - 1500));
            $property -> setType ('A Louer');
            $manager->persist($property);
        }

        $manager->flush();
        // $product = new Product();
        // $manager->persist($product);
    
    }
    
}
