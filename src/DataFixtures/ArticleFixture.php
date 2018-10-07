<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;
use Faker;
class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for($i=0;$i <10; $i++){
            $art = new Article();
            $art->setTitre($faker->name());
            $art->setDescription($faker->text());
            $art->setDatecreation($faker->dateTime());
            $art->setImage($faker->image());
            $manager->persist($art);
        }

        $manager->flush();
    }
}
