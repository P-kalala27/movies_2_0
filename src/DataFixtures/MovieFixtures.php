<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark knight');
        $movie->setRelaseYear(2006);
        $movie->setDescription('A short description for the dark Knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2017/10/31/11/42/gatekeeper-2904993_1280.jpg');
        $movie->addActor($this->getReference('actor'));
        $movie->addActor($this->getReference('actor2'));

        $manager->persist($movie);


        $movie2 = new Movie();
        $movie2->setTitle('Avangers: End Game');
        $movie2->setRelaseYear(2020);
        $movie2->setDescription('A short description for Avangers');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2020/07/02/19/36/marvel-5364165_640.jpg');
        $manager->persist($movie2);

        $manager->flush();
    }
}
