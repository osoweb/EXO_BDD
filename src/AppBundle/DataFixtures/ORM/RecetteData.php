<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 31/08/2018
 * Time: 02:21
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Recette;
use AppBundle\Entity\produits;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class RecetteData  extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $recette1 = new Recette();
        $recette1->setImage($this->getReference('media14'));
        $recette1->setPreparation($this->getReference('page3'));
        //$recette1->setProduits('produit7');
        $recette1->setTitre($this->getReference('page3'));
        $recette1->setTemps("10 MIN");
        $manager->persist($recette1);

        $recette2 = new Recette();
        $recette2->setImage($this->getReference('media15'));
        $recette2->setPreparation($this->getReference('page4'));
        //$recette2->setProduits($this->getReference('produit7'));
        $recette2->setTitre($this->getReference('page4'));
        $recette2->setTemps("30 MIN");
        $manager->persist($recette2);

        $recette3 = new Recette();
        $recette3->setImage($this->getReference('media16'));
        $recette3->setPreparation($this->getReference('page5'));
        //$recette3->setProduits($this->getReference('produit7'));
        $recette3->setTitre($this->getReference('page5'));
        $recette3->setTemps("20 MIN");
        $manager->persist($recette3);

        $recette4 = new Recette();
        $recette4->setImage($this->getReference('media17'));
        $recette4->setPreparation($this->getReference('page6'));
        //$recette4->setProduits($this->getReference('produit7'));
        $recette4->setTitre($this->getReference('page6'));
        $recette4->setTemps("10 MIN");
        $manager->persist($recette4);



        $recette6 = new Recette();
        $recette6->setImage($this->getReference('media32'));
        $recette6->setPreparation($this->getReference('page8'));
        //$recette6->setProduits($this->getReference('produit7'));
        $recette6->setTitre($this->getReference('page8'));
        $recette6->setTemps("30 MIN");
        $manager->persist($recette6);

        $recette7 = new Recette();
        $recette7->setImage($this->getReference('media33'));
        $recette7->setPreparation($this->getReference('page9'));
        //$recette7->setProduits($this->getReference('produit7'));
        $recette7->setTitre($this->getReference('page9'));
        $recette7->setTemps("20 MIN");
        $manager->persist($recette7);

        $recette8 = new Recette();
        $recette8->setImage($this->getReference('media34'));
        $recette8->setPreparation($this->getReference('page10'));
        //$recette8->setProduits($this->getReference('produit7'));
        $recette8->setTitre($this->getReference('page10'));
        $recette8->setTemps("10 MIN");
        $manager->persist($recette8);

        $recette9 = new Recette();
        $recette9->setImage($this->getReference('media36'));
        $recette9->setPreparation($this->getReference('page12'));
        //$recette9->setProduits($this->getReference('produit7'));
        $recette9->setTitre($this->getReference('page12'));
        $recette9->setTemps("30 MIN");
        $manager->persist($recette9);

        $recette10 = new Recette();
        $recette10->setImage($this->getReference('media37'));
        $recette10->setPreparation($this->getReference('page13'));
        //$recette10->setProduits($this->getReference('produit7'));
        $recette10->setTitre($this->getReference('page13'));
        $recette10->setTemps("20 MIN");
        $manager->persist($recette10);

        $recette11 = new Recette();
        $recette11->setImage($this->getReference('media38'));
        $recette11->setPreparation($this->getReference('page14'));
        //$recette11->setProduits($this->getReference('produit7'));
        $recette11->setTitre($this->getReference('page14'));
        $recette11->setTemps("10 MIN");
        $manager->persist($recette11);

        $recette12 = new Recette();
        $recette12->setImage($this->getReference('media35'));
        $recette12->setPreparation($this->getReference('page11'));
        //$recette12->setProduits('produit7');
        $recette12->setTitre($this->getReference('page11'));
        $recette12->setTemps("10 MIN");
        $manager->persist($recette12);
        $manager->flush();

        $recette5 = new Recette();
        $recette5->setImage($this->getReference('media31'));
        $recette5->setPreparation($this->getReference('page7'));
        //$recette5->setProduits('produit7');
        $recette5->setTitre($this->getReference('page7'));
        $recette5->setTemps("10 MIN");
        $manager->persist($recette5);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 5;
    }
}