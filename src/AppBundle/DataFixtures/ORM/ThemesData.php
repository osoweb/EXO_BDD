<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 16/08/2018
 * Time: 23:44
 */
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Themes;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class ThemesData extends AbstractFixture implements OrderedFixtureInterface
{


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $themes1 = new Themes();
        $themes1->setPaysRegion("Le Japon");
        $themes1->setFetes("Chandleur");
        $themes1->setTendances("macaron");

        $themes2 = new Themes();
        $themes2->setPaysRegion("Bretagne");
        $themes2->setFetes("Epiphanie");
        $themes2->setTendances("papillotes");

        $themes3 = new Themes();
        $themes3->setPaysRegion("Corse");
        $themes3->setFetes("Fêtes des mères");
        $themes3->setTendances("smoothies");


        $themes4 = new Themes();
        $themes4->setPaysRegion("La cuisine des ch'tis");
        $themes4->setFetes("Halloween");
        $themes4->setTendances("pique-nique");

        $themes5 = new Themes();
        $themes5->setPaysRegion("Cuisine Indienne");
        $themes5->setFetes("NOËL");
        $themes5->setTendances("quiches et tartes");

        $themes6 = new Themes();
        $themes6->setPaysRegion("La grêce");
        $themes6->setFetes("Mardis Gras");
        $themes6->setTendances("cakes");

        $themes7 = new Themes();
        $themes7->setPaysRegion("Mexico");
        $themes7->setFetes("RAMADAN");
        $themes7->setTendances("brochettes");

        $themes8 = new Themes();
        $themes8->setPaysRegion("Le Maroc");
        $themes8->setFetes("PÂQUES");
        $themes8->setTendances("POULET ROTI");

        $themes9 = new Themes();
        $themes9->setPaysRegion("Provence");
        $themes9->setFetes("Saint-Patrick");
        $themes9->setTendances("Pour Deux");




        $manager->persist($themes1);

        $manager->persist($themes2);
        $manager->persist($themes3);
        $manager->persist($themes4);
        $manager->persist($themes5);
        $manager->persist($themes6);
        $manager->persist($themes7);
        $manager->persist($themes8);
        $manager->persist($themes9);



        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }






    }