<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 16/08/2018
 * Time: 21:22
 */
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://cp.lakanal.free.fr/exercices/jeux/memory/legumes/legumes.png');
        $media1->setAlt('Légumes');
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://img0.mxstatic.com/wallpapers/238cdfc903a19ad39ea901619dd55d47_large.jpeg');
        $media2->setAlt('Fruits');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://cuisine.larousse.fr/lcfilestorage/8A/DA/POIVRON_D_636x380.jpg');
        $media3->setAlt('Poivron rouge');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('http://www.princedebretagne-pro.com/medias/5114fcd91ae7e.JPGg');
        $media4->setAlt('Piment');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('http://www.niffylux.com/image-gratuite/Tomate__7_4b71e7e13f85b.jpg');
        $media5->setAlt('Tomate');
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setPath('http://le-mag-de-lea.com/wp-content/uploads/Poivron-vert-11.jpg');
        $media6->setAlt('Poivron vert');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('http://www.boitearecettes.com/fruits_legumes/raisins-6.gif');
        $media7->setAlt('Raisin');
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setPath('http://www.orangeclaire.com/images/oce_orange_01.jpg');
        $media8->setAlt('Orange');
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setPath('http://www.la-viande.fr/sites/default/files/images/cuisine-achat/illust/cuire-viande-boeuf2-hd.jpg');
        $media9->setAlt('Agneau');
        $manager->persist($media9);

        $media10 = new Media();
        $media10->setPath('http://2.bp.blogspot.com/-_tQCmdyymtk/UgkDkdl2T4I/AAAAAAAAAUM/nNTa_zKrhfw/s1600/f23101488fb4803d2202cac8ecef82fa.jpg');
        $media10->setAlt('Poisson braisé');
        $manager->persist($media10);

        $media11 = new Media();
        $media11->setPath('https://static.cuisineaz.com/680x357/i58007-salades-de-feculents.jpg');
        $media11->setAlt('Salade de féculents');
        $manager->persist($media11);

        $media12 = new Media();
        $media12->setPath('http://www.laboitedufromager.com/wp-content/uploads/2017/03/Pourquoi-les-fromages-nont-pas-tous-la-m%C3%AAme-texture.jpg');
        $media12->setAlt('Fromages');
        $manager->persist($media12);

        $media13 = new Media();
        $media13->setPath('https://www.adeline-cuisine.fr/wdpadt/wp-content/uploads/2015/12/chocolats-maison-temp%C3%A9rage-700x525.jpg');
        $media13->setAlt('Chocolat');
        $manager->persist($media13);





        // create 20 products! Bam!
        /*for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setPrice(mt_rand(10, 100));
            $manager->persist($product);
        }*/




        $this->addReference("media1", $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
        $this->addReference('media9', $media9);
        $this->addReference('media10', $media10);
        $this->addReference('media11', $media11);
        $this->addReference('media12', $media12);
        $this->addReference('media13', $media13);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }


}