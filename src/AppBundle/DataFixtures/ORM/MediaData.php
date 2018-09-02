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
        $media3->setPath('https://www.odelices.com/images/produits/poivron.jpg');
        $media3->setAlt('Poivron rouge');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('https://www.odelices.com/images/produits/baies-de-goji.jpg');
        $media4->setAlt('Piment');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('https://www.odelices.com/images/produits/fiche_tomates.jpg');
        $media5->setAlt('Tomate');
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setPath('https://www.odelices.com/images/produits/poivron.jpg');
        $media6->setAlt('Poivron vert');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('https://www.odelices.com/images/produits/raisin.jpg');
        $media7->setAlt('Raisin');
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setPath('https://www.odelices.com/images/produits/orange.jpg');
        $media8->setAlt('Orange');
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setPath('https://www.odelices.com/images/produits/agneau.jpg');
        $media9->setAlt('Agneau');
        $manager->persist($media9);

        $media10 = new Media();
        $media10->setPath('https://www.odelices.com/images/produits/bar.jpg');
        $media10->setAlt('Bar');
        $manager->persist($media10);

        $media11 = new Media();
        $media11->setPath('https://www.odelices.com/images/produits/lentilles_vertes.jpg');
        $media11->setAlt('Lentilles vertes');
        $manager->persist($media11);

        $media12 = new Media();
        $media12->setPath('http://www.laboitedufromager.com/wp-content/uploads/2017/03/Pourquoi-les-fromages-nont-pas-tous-la-m%C3%AAme-texture.jpg');
        $media12->setAlt('Fromages');
        $manager->persist($media12);

        $media13 = new Media();
        $media13->setPath('https://www.adeline-cuisine.fr/wdpadt/wp-content/uploads/2015/12/chocolats-maison-temp%C3%A9rage-700x525.jpg');
        $media13->setAlt('Chocolat');
        $manager->persist($media13);


        $media14 = new Media();
        $media14->setPath('https://www.odelices.com/images/recettes/wraps-poulet-epinards-radis-291x380.jpg');
        $media14->setAlt('Rouleau a la viande');
        $manager->persist($media14);

        $media15 = new Media();
        $media15->setPath('https://www.odelices.com/images/recettes/harengs-marines-284x380.jpg');
        $media15->setAlt('Harengs marinés au citron');
        $manager->persist($media15);

        $media16 = new Media();
        $media16->setPath('https://www.odelices.com/images/recettes/moelleux-carottes-chocolat-blanc-301x380.jpg');
        $media16->setAlt('Moelleux à la carotte, cœur chocolat blanc');
        $manager->persist($media16);

        $media17 = new Media();
        $media17->setPath('https://www.odelices.com/images/recettes/quiche-moelleuse-saumon-296x380.jpg');
        $media17->setAlt('Quiche épaisse au saumon, brocoli et carotte');
        $manager->persist($media17);

        $media18 = new Media();
        $media18->setPath('https://www.odelices.com/images/produits/abricots_produits.jpg');
        $media18->setAlt('Abricot');
        $manager->persist($media18);


        $media19 = new Media();
        $media19->setPath('https://www.odelices.com/images/produits/airelles.jpg');
        $media19->setAlt('Airelles');
        $manager->persist($media19);

        $media20 = new Media();
        $media20->setPath('https://www.odelices.com/images/produits/ananas.jpg');
        $media20->setAlt('Ananas');
        $manager->persist($media20);

        $media21 = new Media();
        $media21->setPath('https://www.odelices.com/images/produits/baies-de-goji.jpg');
        $media21->setAlt('Baies de Goji');
        $manager->persist($media21);

        $media22 = new Media();
        $media22->setPath('https://www.odelices.com/images/produits/banane.jpg');
        $media22->setAlt('Bananes');
        $manager->persist($media22);

        $media23 = new Media();
        $media23->setPath('https://www.odelices.com/images/produits/cassis.jpg');
        $media23->setAlt('Cassis');
        $manager->persist($media23);

        $media24 = new Media();
        $media24->setPath('https://www.odelices.com/images/produits/fiche_cerises.jpg');
        $media24->setAlt('Cerises');
        $manager->persist($media24);

        $media25 = new Media();
        $media25->setPath('https://www.odelices.com/images/produits/fraises.jpg');
        $media25->setAlt('Fraises');
        $manager->persist($media25);

        $media26 = new Media();
        $media26->setPath('https://www.odelices.com/images/produits/kiwis.jpg');
        $media26->setAlt('Kiwis');
        $manager->persist($media26);

        $media27 = new Media();
        $media27->setPath('https://www.odelices.com/images/produits/litchis.jpg');
        $media27->setAlt('Litchis');
        $manager->persist($media27);

        $media28 = new Media();
        $media28->setPath('https://www.odelices.com/images/produits/mangue.jpg');
        $media28->setAlt('Mangue');
        $manager->persist($media28);

        $media29 = new Media();
        $media29->setPath('https://www.odelices.com/images/produits/fiche_melon.jpg');
        $media29->setAlt('Melon');
        $manager->persist($media29);

        $media30 = new Media();
        $media30->setPath('https://www.odelices.com/images/produits/peches.jpg');
        $media30->setAlt('Pêches');
        $manager->persist($media30);


        $media31 = new Media();
        $media31->setPath('https://www.odelices.com/images/recettes/clafoutis-pomme-cassis-300x380.jpg');
        $media31->setAlt('Clafoutis cassis myrtilles');
        $manager->persist($media31);


        $media32 = new Media();
        $media32->setPath('https://www.odelices.com/images/recettes/wraps-saumon-tomates-kiwi-320x364.jpg');
        $media32->setAlt('Wraps saumon, tomates et kiwi');
        $manager->persist($media32);


        $media33 = new Media();
        $media33->setPath('https://www.odelices.com/images/recettes/tomates-farcies-thon-savora-309x380.jpg');
        $media33->setAlt('Tomates farcies au thon et savora');
        $manager->persist($media33);


        $media34 = new Media();
        $media34->setPath('https://www.odelices.com/images/recettes/souffles-carottes-crevettes-320x377.jpg');
        $media34->setAlt('Soufflés aux carottes et crevettes');
        $manager->persist($media34);

        $media35 = new Media();
        $media35->setPath('https://www.odelices.com/images/recettes/granite-melon-310x380.jpg');
        $media35->setAlt('Granité de melon au jambon de pays');
        $manager->persist($media35);

        $media36 = new Media();
        $media36->setPath('https://www.odelices.com/images/recettes/sardines-grillees-chutney-poivrons-320x378.jpg');
        $media36->setAlt('Sardines grillées au chutney de poivrons rouges');
        $manager->persist($media36);

        $media37 = new Media();
        $media37->setPath('https://www.odelices.com/images/recettes/cake-sardines-tomates-thym-293x380.jpg');
        $media37->setAlt('Cake aux sardines, tomates et thym');
        $manager->persist($media37);


        $media38 = new Media();
        $media38->setPath('https://www.odelices.com/images/recettes/pissaladiere-1-306x380.jpg');
        $media38->setAlt('Pissaladière aux oignons et anchois');
        $manager->persist($media38);

        $media39 = new Media();
        $media39->setPath('https://www.odelices.com/images/produits/Fotolia_80487377_S.jpg');
        $media39->setAlt('Carottes');
        $manager->persist($media39);

        $media40 = new Media();
        $media40->setPath('https://www.odelices.com/images/produits/produit_avocat.jpg');
        $media40->setAlt('Avocats');
        $manager->persist($media40);

        $media41 = new Media();
        $media41->setPath('https://www.odelices.com/images/produits/artichaut.jpg');
        $media41->setAlt('Artichaut');
        $manager->persist($media41);

        $media42 = new Media();
        $media42->setPath('https://www.odelices.com/images/produits/asperges.jpg');
        $media42->setAlt('Asperges');
        $manager->persist($media42);

        $media43 = new Media();
        $media43->setPath('https://www.odelices.com/images/produits/concombres.jpg');
        $media43->setAlt('Concombre');
        $manager->persist($media43);

        $media44 = new Media();
        $media44->setPath('https://www.odelices.com/images/produits/aubergines.jpg');
        $media44->setAlt('Aubergines');
        $manager->persist($media44);

        $media45 = new Media();
        $media45->setPath('https://www.odelices.com/images/produits/petit-pois.jpg');
        $media45->setAlt('Petit pois');
        $manager->persist($media45);

        $media46 = new Media();
        $media46->setPath('https://www.odelices.com/images/produits/mais.jpg');
        $media46->setAlt('Maïs');
        $manager->persist($media46);

        $media47 = new Media();
        $media47->setPath('https://www.odelices.com/images/produits/boeuf.jpg');
        $media47->setAlt('Boeuf');
        $manager->persist($media47);

        $media48 = new Media();
        $media48->setPath('https://www.odelices.com/images/produits/caille.jpg');
        $media48->setAlt('Caille');
        $manager->persist($media48);

        $media49 = new Media();
        $media49->setPath('https://www.odelices.com/images/categories/categorie-canard.jpg');
        $media49->setAlt('Canard');
        $manager->persist($media49);

        $media50 = new Media();
        $media50->setPath('https://www.odelices.com/images/categories/categorie-porc.jpg');
        $media50->setAlt('Porc');
        $manager->persist($media50);

        $media51 = new Media();
        $media51->setPath('https://www.odelices.com/images/produits/volaille.jpg');
        $media51->setAlt('Volailles');
        $manager->persist($media51);

        $media52 = new Media();
        $media52->setPath('https://www.odelices.com/images/categories/categorie-cabillaud.jpg');
        $media52->setAlt('Cabillaud');
        $manager->persist($media52);

        $media53 = new Media();
        $media53->setPath('https://www.odelices.com/images/produits/coquille-saint-jacques.jpg');
        $media53->setAlt('Coquille-saint-jacques');
        $manager->persist($media53);

        $media54 = new Media();
        $media54->setPath('https://www.odelices.com/images/produits/saumon.jpg');
        $media54->setAlt('Saumon');
        $manager->persist($media54);

        $media55 = new Media();
        $media55->setPath('https://www.odelices.com/images/produits/thon.jpg');
        $media55->setAlt('Thon');
        $manager->persist($media55);

        $media56 = new Media();
        $media56->setPath('https://www.odelices.com/images/produits/medaillons-de-lotte-aux-agrumes.jpg');
        $media56->setAlt('Lotte');
        $manager->persist($media56);

        $media57 = new Media();
        $media57->setPath('https://www.odelices.com/images/produits/crustaces.jpg');
        $media57->setAlt('Crevettes');
        $manager->persist($media57);

        $media58 = new Media();
        $media58->setPath('https://www.odelices.com/images/produits/millet.jpg');
        $media58->setAlt('Millet');
        $manager->persist($media58);

        $media59 = new Media();
        $media59->setPath('https://www.odelices.com/images/produits/polenta_semoule_de_mais.jpg');
        $media59->setAlt('Polenta');
        $manager->persist($media59);

        $media60 = new Media();
        $media60->setPath('https://www.odelices.com/images/produits/pommes-de-terre.jpg');
        $media60->setAlt('Pommes de terre');
        $manager->persist($media60);

        $media61 = new Media();
        $media61->setPath('https://www.odelices.com/images/produits/quinoa_blanc_rouge.jpg');
        $media61->setAlt('Quinoa');
        $manager->persist($media61);

        $media62 = new Media();
        $media62->setPath('https://www.odelices.com/images/produits/sarrasin.jpg');
        $media62->setAlt('Sarrasin');
        $manager->persist($media62);

        $media63 = new Media();
        $media63->setPath('https://www.odelices.com/images/categories/categorie-riz.jpg');
        $media63->setAlt('Riz');
        $manager->persist($media63);

        $media64 = new Media();
        $media64->setPath('https://www.odelices.com/images/categories/categorie-pates.jpg');
        $media64->setAlt('Pâtes');
        $manager->persist($media64);

        $media65 = new Media();
        $media65->setPath('https://www.odelices.com/images/produits/camembert.jpg');
        $media65->setAlt('Camenbert');
        $manager->persist($media65);

        $media66 = new Media();
        $media66->setPath('https://www.odelices.com/images/produits/cantal.jpg');
        $media66->setAlt('Cantal');
        $manager->persist($media66);

        $media67 = new Media();
        $media67->setPath('https://www.odelices.com/images/produits/comte.jpg');
        $media67->setAlt('Comté');
        $manager->persist($media67);

        $media68 = new Media();
        $media68->setPath('https://www.odelices.com/images/produits/emmental.jpg');
        $media68->setAlt('Emmental');
        $manager->persist($media68);

        $media69 = new Media();
        $media69->setPath('https://www.odelices.com/images/produits/gorgonzola.jpg');
        $media69->setAlt('Gorgonzola');
        $manager->persist($media69);

        $media70 = new Media();
        $media70->setPath('https://www.odelices.com/images/produits/mozzarella.jpg');
        $media70->setAlt('Mozzarella');
        $manager->persist($media70);

        $media71 = new Media();
        $media71->setPath('https://www.odelices.com/images/produits/roquefort.jpg');
        $media71->setAlt('Roquefort');
        $manager->persist($media71);

        $media72 = new Media();
        $media72->setPath('https://www.odelices.com/images/produits/agar-agar.jpg');
        $media72->setAlt('Agar agar');
        $manager->persist($media72);

        $media73 = new Media();
        $media73->setPath('https://www.odelices.com/images/produits/estragon.jpg');
        $media73->setAlt('Estragon');
        $manager->persist($media73);

        $media74 = new Media();
        $media74->setPath('https://www.odelices.com/images/produits/foie-gras.jpg');
        $media74->setAlt('Foie Gras');
        $manager->persist($media74);

        $media75 = new Media();
        $media75->setPath('https://www.odelices.com/images/produits/margarine.jpg');
        $media75->setAlt('Margarine');
        $manager->persist($media75);

        $media76 = new Media();
        $media76->setPath('https://www.odelices.com/images/produits/theme_the_vert.jpg');
        $media76->setAlt('Thé vert');
        $manager->persist($media76);


        $media77 = new Media();
        $media77->setPath('https://www.odelices.com/images/produits/theme_the_noir.jpg');
        $media77->setAlt('Thé noir');
        $manager->persist($media77);



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
        $this->addReference('media14', $media14);
        $this->addReference('media15', $media15);
        $this->addReference('media16', $media16);
        $this->addReference('media17', $media17);
        $this->addReference('media18', $media18);
        $this->addReference("media19", $media19);
        $this->addReference('media20', $media20);
        $this->addReference('media21', $media21);
        $this->addReference('media22', $media22);
        $this->addReference('media23', $media23);
        $this->addReference('media24', $media24);
        $this->addReference('media25', $media25);
        $this->addReference('media26', $media26);
        $this->addReference('media27', $media27);
        $this->addReference('media28', $media28);
        $this->addReference('media29', $media29);
        $this->addReference('media30', $media30);
        $this->addReference('media31', $media31);
        $this->addReference('media32', $media32);
        $this->addReference('media33', $media33);
        $this->addReference('media34', $media34);
        $this->addReference('media35', $media35);
        $this->addReference('media36', $media36);
        $this->addReference('media37', $media37);
        $this->addReference('media38', $media38);
        $this->addReference('media39', $media39);
        $this->addReference('media40', $media40);
        $this->addReference('media41', $media41);
        $this->addReference('media42', $media42);
        $this->addReference('media43', $media43);
        $this->addReference('media44', $media44);
        $this->addReference('media45', $media45);
        $this->addReference('media46', $media46);
        $this->addReference('media47', $media47);
        $this->addReference('media48', $media48);
        $this->addReference('media49', $media49);
        $this->addReference('media50', $media50);
        $this->addReference('media51', $media51);
        $this->addReference('media52', $media52);
        $this->addReference('media53', $media53);
        $this->addReference('media54', $media54);
        $this->addReference('media55', $media55);
        $this->addReference('media56', $media56);
        $this->addReference('media57', $media57);
        $this->addReference('media58', $media58);
        $this->addReference('media59', $media59);
        $this->addReference('media60', $media60);
        $this->addReference('media61', $media61);
        $this->addReference('media62', $media62);
        $this->addReference('media63', $media63);
        $this->addReference('media64', $media64);
        $this->addReference('media65', $media65);
        $this->addReference('media66', $media66);
        $this->addReference('media67', $media67);
        $this->addReference('media68', $media68);
        $this->addReference('media69', $media69);
        $this->addReference('media70', $media70);
        $this->addReference('media71', $media71);
        $this->addReference('media72', $media72);
        $this->addReference('media73', $media73);
        $this->addReference('media74', $media74);
        $this->addReference('media75', $media75);
        $this->addReference('media76', $media76);
        $this->addReference('media77', $media77);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }


}