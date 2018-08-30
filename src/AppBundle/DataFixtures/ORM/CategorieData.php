<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 16/08/2018
 * Time: 23:04
 */
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Categorie;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategorieData extends AbstractFixture implements OrderedFixtureInterface
{


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $categorie1 = new Categorie();
        $categorie1->setNom('Légumes');
        $categorie1->setImage($this->getReference('media1'));
        $manager->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2->setNom('fruits');
        $categorie2->setImage($this->getReference('media2'));
        $manager->persist($categorie2);

        $categorie3 = new Categorie();
        $categorie3->setNom('viandes');
        $categorie3->setImage($this->getReference('media9'));
        $manager->persist($categorie3);

        $categorie4 = new Categorie();
        $categorie4->setNom('poissons');
        $categorie4->setImage($this->getReference('media10'));
        $manager->persist($categorie4);

        $categorie5 = new Categorie();
        $categorie5->setNom('féculents');
        $categorie5->setImage($this->getReference('media11'));
        $manager->persist($categorie5);

        $categorie6 = new Categorie();
        $categorie6->setNom('fromages');
        $categorie6->setImage($this->getReference('media12'));
        $manager->persist($categorie6);

        $categorie7 = new Categorie();
        $categorie7->setNom('autres');
        $categorie7->setImage($this->getReference('media13'));
        $manager->persist($categorie7);

        $manager->flush();

        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);
        $this->addReference('categorie3', $categorie3);
        $this->addReference('categorie4', $categorie4);
        $this->addReference('categorie5', $categorie5);
        $this->addReference('categorie6', $categorie6);
        $this->addReference('categorie7', $categorie7);

    }

    public function getOrder()
    {
        return 2;
    }

}