<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 16/08/2018
 * Time: 23:44
 */
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class produitsData extends AbstractFixture implements OrderedFixtureInterface
{


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $produit1 = new produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription("Le poivron rouge est un groupe de cultivars de l'espèce Capsicum annuum.");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media3'));
        $produit1->setNom('Poivron rouge');
        $produit1->setPrix('1.99');
        $produit1->setTva($this->getReference('tva2'));
        $manager->persist($produit1);

        $produit2 = new produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription("Piment est généralement associé à la saveur du piquant (pimenté).");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media4'));
        $produit2->setNom('Piment');
        $produit2->setPrix('3.99');
        $produit2->setTva($this->getReference('tva2'));
        $manager->persist($produit2);

        $produit3 = new produits();
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setDescription("La tomate est une espèce de plantes herbacées de la famille des Solanacées, originaire du nord-ouest de l'Amérique du Sud.");
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media5'));
        $produit3->setNom('Tomate');
        $produit3->setPrix('0.99');
        $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);

        $produit4 = new produits();
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setDescription("Le poivron vert est un groupe de cultivars de l'espèce Capsicum annuum.");
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media6'));
        $produit4->setNom('Poivron vert');
        $produit4->setPrix('2.99');
        $produit4->setTva($this->getReference('tva2'));
        $manager->persist($produit4);

        $produit5 = new produits();
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setDescription("Le raisin est le fruit de la Vigne. Le raisin de la vigne cultivée Vitis vinifera est un des fruits les plus cultivés au monde, avec 68 millions de tonnes produites en 2010.");
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media7'));
        $produit5->setNom('Raisin');
        $produit5->setPrix('0.97');
        $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);

        $produit6 = new produits();
        $produit6->setCategorie($this->getReference('categorie2'));
        $produit6->setDescription("L’orange est un agrume, fruit des orangers, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media8'));
        $produit6->setNom('Orange');
        $produit6->setPrix('1.20');
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);

        $produit7 = new produits();
        $produit7->setCategorie($this->getReference('categorie3'));
        $produit7->setDescription("La viande  de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit7->setDisponible('1');
        $produit7->setImage($this->getReference('media9'));
        $produit7->setNom('Steack');
        $produit7->setPrix('1.20');
        $produit7->setTva($this->getReference('tva2'));
        $manager->persist($produit7);

        $produit8 = new produits();
        $produit8->setCategorie($this->getReference('categorie4'));
        $produit8->setDescription("Le poisson, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit8->setDisponible('1');
        $produit8->setImage($this->getReference('media10'));
        $produit8->setNom('Poisson braisé');
        $produit8->setPrix('1.20');
        $produit8->setTva($this->getReference('tva2'));
        $manager->persist($produit8);

        $produit9 = new produits();
        $produit9->setCategorie($this->getReference('categorie5'));
        $produit9->setDescription("Le Féculent n' est pas un agrume, fruit des orangers, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit9->setDisponible('1');
        $produit9->setImage($this->getReference('media11'));
        $produit9->setNom('Riz aux féculents');
        $produit9->setPrix('1.20');
        $produit9->setTva($this->getReference('tva2'));
        $manager->persist($produit9);

        $produit10 = new produits();
        $produit10->setCategorie($this->getReference('categorie6'));
        $produit10->setDescription("Le fromage est un agrume, fruit des orangers, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit10->setDisponible('1');
        $produit10->setImage($this->getReference('media12'));
        $produit10->setNom('Fromages de France');
        $produit10->setPrix('1.20');
        $produit10->setTva($this->getReference('tva2'));
        $manager->persist($produit10);

        $produit11 = new produits();
        $produit11->setCategorie($this->getReference('categorie7'));
        $produit11->setDescription("Le chocolat est un agrume, fruit des orangers, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit11->setDisponible('1');
        $produit11->setImage($this->getReference('media13'));
        $produit11->setNom('Chocolat');
        $produit11->setPrix('1.20');
        $produit11->setTva($this->getReference('tva2'));
        $manager->persist($produit11);


        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }






    }