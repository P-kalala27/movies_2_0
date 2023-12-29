<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor2 = new Actor();
        $actor2->setName('Christian Bale');
        $manager->persist($actor2);

        $actor = new Actor();
        $actor->setName('Robert Downey Jr');
        $manager->persist($actor);

        $actor3 = new Actor();
        $actor3->setName('Van Vigor');
        $manager->persist($actor3);


        $actor4 = new Actor();
        $actor4->setName('Jean-Claud Vandam');
        $manager->persist($actor4);
        $manager->flush();

        $this->addReference('actor', $actor);
        $this->addReference('actor2', $actor2);
        $this->addReference('actor3', $actor3);
        $this->addReference('actor4', $actor4);
    }
}
