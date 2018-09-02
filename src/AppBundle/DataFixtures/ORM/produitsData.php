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
        $produit7->setNom('Agneau');
        $produit7->setPrix('1.20');
        $produit7->setTva($this->getReference('tva2'));
        $manager->persist($produit7);

        $produit8 = new produits();
        $produit8->setCategorie($this->getReference('categorie4'));
        $produit8->setDescription("Le poisson, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit8->setDisponible('1');
        $produit8->setImage($this->getReference('media10'));
        $produit8->setNom('bar');
        $produit8->setPrix('1.20');
        $produit8->setTva($this->getReference('tva2'));
        $manager->persist($produit8);

        $produit9 = new produits();
        $produit9->setCategorie($this->getReference('categorie5'));
        $produit9->setDescription("Les lentilles vertes sont riches en protéines, antioxydants et nutriments (notamment l’acide folique indispensable pour les femmes enceintes). Un ingrédient santé indispensable à ajouter dans vos menus : chose facile grâce à nos conseils.");
        $produit9->setDisponible('1');
        $produit9->setImage($this->getReference('media11'));
        $produit9->setNom('Lentilles vertes');
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

        $produit12 = new produits();
        $produit12->setCategorie($this->getReference('categorie2'));
        $produit12->setDescription("Délicieux petit fruit orange et sucré, l’abricot se consomme rapidement ! Une fois cueilli, l’abricot ne mûrit plus : choisissez-le souple, avec une teinte de fond orangée et sans reflets verts. La peau lisse est un signe de maturité puisque l’abricot perd son duvet en mûrissant. Attention, selon la variété certains fruits sont rouges avant d’être mûrs.");
        $produit12->setDisponible('1');
        $produit12->setImage($this->getReference('media18'));
        $produit12->setNom('Abricot');
        $produit12->setPrix('1.20');
        $produit12->setTva($this->getReference('tva2'));
        $manager->persist($produit12);

        $produit13 = new produits();
        $produit13->setCategorie($this->getReference('categorie2'));
        $produit13->setDescription("Les airelles sont des petits fruits rouges qui murissent à la fin de l’été, en août-septembre. Ces baies sont acidulées et poussent en altitude ou dans les régions froides. Ils existent une variété spéciale, appelée Canneberges ou Cranberries, avec un fruit plus gros, qui est cultivée en quantité dans les marais au Canada.");
        $produit13->setDisponible('1');
        $produit13->setImage($this->getReference('media19'));
        $produit13->setNom('Airelles');
        $produit13->setPrix('1.99');
        $produit13->setTva($this->getReference('tva2'));
        $manager->persist($produit13);

        $produit14 = new produits();
        $produit14->setCategorie($this->getReference('categorie2'));
        $produit14->setDescription("L’ananas est une plante cultivée dans des régions tropicales. Son fruit pèse de 1 à 2,5kg et ressemble à une grosse pomme de pin. Son nom signifie « parfum des parfums »… Il fait partie de la famille des Broméliacées et compte pas moins de 6 variétés : Cayenne lisse, Ananas bouteille, Spanish, Mordilanus-Perolera-Malpure, Pernambuco, Queen. La variété la plus consommée est le Cayenne Lisse qui domine largement le marché.");
        $produit14->setDisponible('1');
        $produit14->setImage($this->getReference('media20'));
        $produit14->setNom('Ananas');
        $produit14->setPrix('3.99');
        $produit14->setTva($this->getReference('tva2'));
        $manager->persist($produit14);

        $produit15 = new produits();
        $produit15->setCategorie($this->getReference('categorie2'));
        $produit15->setDescription("La baie de goji appelée aussi le « fruit du sourire » fait partie de la famille des Solanacées. La plante dont elle provient se nomme le Lyciet de Barbarie, arbuste pouvant atteindre 2 m de haut environ, à feuilles caduques et aux fleurs violettes qui produisent ces petites baies rouges et longilignes ressemblant à de petites cerises allongées. La plante produisant les baies de golji pousse partout dans le monde, y compris en Europe. On en trouve deux espèces différentes dont les meilleures souches se situent en Chine, au Tibet, au nord du Pakistan et dans les hautes vallées de l’Himalaya.");
        $produit15->setDisponible('1');
        $produit15->setImage($this->getReference('media21'));
        $produit15->setNom('Baies de Goji');
        $produit15->setPrix('0.99');
        $produit15->setTva($this->getReference('tva2'));
        $manager->persist($produit15);

        $produit16 = new produits();
        $produit16->setCategorie($this->getReference('categorie2'));
        $produit16->setDescription("Énergétique et pleine de vitamines, la banane est l’alliée parfaite pour les petits creux et les coups de fatigue !Apport énergétique : 90 Kcal / 100 gApport nutritionnel : bêta-carotène, alpha-carotène, vitamines B9 et C, potassium, phosphore, magnésium, calcium Saison idéale : octobre à janvier");
        $produit16->setDisponible('1');
        $produit16->setImage($this->getReference('media22'));
        $produit16->setNom('Bananes');
        $produit16->setPrix('2.99');
        $produit16->setTva($this->getReference('tva2'));
        $manager->persist($produit16);

        $produit17 = new produits();
        $produit17->setCategorie($this->getReference('categorie2'));
        $produit17->setDescription("Très riche en vitamine C, en fer et en calcium. Il se consomme à la fin de l’été. Le cassis, ou groseille noire est une baie issue d’un arbrisseau, le cassissier. Ses feuilles sont aussi parfumée que les fruits, de couleur noire à reflets violets à pleine maturité.");
        $produit17->setDisponible('1');
        $produit17->setImage($this->getReference('media23'));
        $produit17->setNom('Cassis');
        $produit17->setPrix('0.97');
        $produit17->setTva($this->getReference('tva2'));
        $manager->persist($produit17);

        $produit18 = new produits();
        $produit18->setCategorie($this->getReference('categorie2'));
        $produit18->setDescription("Elle est cultivée et commercialisée depuis le Moyen Age tant pour le bois de l’arbre que pour ses fruits, mais c’est sous le règne de Louis XV qu’elle sera réellement sélectionnée et cultivée de façon intensive, afin de satisfaire la demande royale.");
        $produit18->setDisponible('1');
        $produit18->setImage($this->getReference('media24'));
        $produit18->setNom('Cerises');
        $produit18->setPrix('1.20');
        $produit18->setTva($this->getReference('tva2'));
        $manager->persist($produit18);

        $produit19 = new produits();
        $produit19->setCategorie($this->getReference('categorie2'));
        $produit19->setDescription("La fraise des bois était déjà appréciée à la Renaissance, consommée avec de la crème ou du vin. La Quintinie, jardinier de Louis XIV, lui fit les honneurs de son extraordinaire potager. La fraise actuelle nous vient d’Amérique et d’Asie. Amédée-François Frézier la ramena du Chili au 18e siècle. Quelques années plus tard, bénéficiant d’un climat océanique d’une douceur exceptionnelle, similaire à celui du berceau d’origine de la fraise chilienne, Plougastel sera la première commune à la cultiver, et sera, jusqu’à la seconde guerre mondiale, la capitale française de la fraise. Elles sont aujourd’hui produites dans de nombreuses régions de France : Aquitaine, Provence, vallée du Rhône, val de Loire, Bretagne et l’est de la France.");
        $produit19->setDisponible('1');
        $produit19->setImage($this->getReference('media25'));
        $produit19->setNom('Fraises');
        $produit19->setPrix('1.20');
        $produit19->setTva($this->getReference('tva2'));
        $manager->persist($produit19);

        $produit20 = new produits();
        $produit20->setCategorie($this->getReference('categorie2'));
        $produit20->setDescription("Le kiwi est originaire de Chine, où il poussait à l’état sauvage et était apprécié comme un fruit de cueillette. Il est importé en Europe à la fin du 19eme siècle, puis vers les États-Unis et enfin la Nouvelle Zélande, où sa culture se développe. Les fruits qui pesaient alors environ 20 g sont hybridés de façon à peser jusqu’à 100 g chacun. La Nouvelle Zélande devient un des plus gros producteur de Kiwi. C’est d’ailleurs à cette époque que le kiwi, jusqu’alors appelé « groseille de chine » prend le nom de l’oiseau emblématique de la Nouvelle Zélande, ce afin de faciliter l’exportation aux État-Unis.");
        $produit20->setDisponible('1');
        $produit20->setImage($this->getReference('media26'));
        $produit20->setNom('Kiwis');
        $produit20->setPrix('1.20');
        $produit20->setTva($this->getReference('tva2'));
        $manager->persist($produit20);

        $produit21 = new produits();
        $produit21->setCategorie($this->getReference('categorie2'));
        $produit21->setDescription("e litchi (ou letchi) est un petit fruit au délicat goût de rose. Cultivés dans des régions sub-tropicales (Afrique du Sud, Australie, Brésil, Chine, Inde, Madagascar, Thaïlande, sud des Etats-Unis…). Privilégiez ceux qui arrivent en Europe par avion (plutôt que par bateau), pour avoir des fruits bien sucrés). A manger avec modération, pour limiter l’empreinte écologique.");
        $produit21->setDisponible('1');
        $produit21->setImage($this->getReference('media27'));
        $produit21->setNom('Litchis');
        $produit21->setPrix('1.20');
        $produit21->setTva($this->getReference('tva2'));
        $manager->persist($produit21);

        $produit22 = new produits();
        $produit22->setCategorie($this->getReference('categorie2'));
        $produit22->setDescription("Lorsqu’elle est cueillie à maturité, la mangue est un fruit à la saveur enivrante, douce et sucrée. Elle s’invite dans la cuisine contemporaine pour se marier tant au sucré qu’au salé sous toutes ses formes.");
        $produit22->setDisponible('1');
        $produit22->setImage($this->getReference('media28'));
        $produit22->setNom('Mangue');
        $produit22->setPrix('1.20');
        $produit22->setTva($this->getReference('tva2'));
        $manager->persist($produit22);

        $produit23 = new produits();
        $produit23->setCategorie($this->getReference('categorie2'));
        $produit23->setDescription("Fruit d’été par excellence, le melon nous permet de faire le plein de vitamines. Il se prête à de nombreux recettes, aussi bien sucrée que salée, et sera tout aussi bon si vous le mangez simplement cru.");
        $produit23->setDisponible('1');
        $produit23->setImage($this->getReference('media29'));
        $produit23->setNom('Melon');
        $produit23->setPrix('1.20');
        $produit23->setTva($this->getReference('tva2'));
        $manager->persist($produit23);

        $produit24 = new produits();
        $produit24->setCategorie($this->getReference('categorie2'));
        $produit24->setDescription("Fruit du pêcher, à la peau veloutée, dont la chair, blanche ou jaune, renferme un noyau. Originaire de Chine, la pêche doit son nom à Alexandre le Grand, qui la baptisa « pecta » et la rapporta en Europe. En France, le pêcher est cultivé depuis le Moyen Âge. La pêche a de tout temps été très appréciée comme fruit de table et utilisée dans des entremets délicats.
         Il existe de nombreuses variétés, qu’on trouve sur les marchés de mai à fin septembre. On distingue les pêches blanches, les pêches jaunes, les pêches plates, les pêches sanguines et les pêches de vigne, ainsi nommées car elles provenaient autrefois de pêchers plantés dans les vignes.");
        $produit24->setDisponible('1');
        $produit24->setImage($this->getReference('media30'));
        $produit24->setNom('Pêches');
        $produit24->setPrix('1.20');
        $produit24->setTva($this->getReference('tva2'));
        $manager->persist($produit24);

        $produit25 = new produits();
        $produit25->setCategorie($this->getReference('categorie1'));
        $produit25->setDescription("Crudité parmi les plus consommées, la carotte a plus d’une légende derrière elle : elle ne rend pas aimable, mais elle aide effectivement à garder le teint frais !");
        $produit25->setDisponible('1');
        $produit25->setImage($this->getReference('media39'));
        $produit25->setNom('Carottes');
        $produit25->setPrix('1.20');
        $produit25->setTva($this->getReference('tva2'));
        $manager->persist($produit25);

        $produit26 = new produits();
        $produit26->setCategorie($this->getReference('categorie1'));
        $produit26->setDescription("L’avocat est une grosse baie à un seul pépin, fruit de l’avocatier, arbre de la famille des Lauraceae. On compte pas moins d’une dizaine de variétés commercialisées, dont les plus consommées sont la Fuerte (à la forme d’une poire, à la peau fine et brillante) et la Hass (à la peau noire et rugueuse). Les avocats les plus consommés ont la taille d’un gros citron, mais il en existe des variétés plus grosses ou beaucoup plus petites comme les « avocats-cornichons ».");
        $produit26->setDisponible('1');
        $produit26->setImage($this->getReference('media40'));
        $produit26->setNom('Avocats');
        $produit26->setPrix('1.20');
        $produit26->setTva($this->getReference('tva2'));
        $manager->persist($produit26);

        $produit27 = new produits();
        $produit27->setCategorie($this->getReference('categorie1'));
        $produit27->setDescription("Plante potagère dont la tête, ou « pomme », que l’on mange et qui est en fait le bouton d’une fleur, est constituée d’un « fond » entouré de bractées, improprement appelées feuilles. Le fond, charnu et tendre, se consomme une fois débarrassé de son « foin » et la base des feuilles est également comestible. Originaire de Sicile, l’artichaut est encore très utilisé dans la cuisine italienne (ce serait Catherine de Médicis, qui, friande d’artichauts, aurait encouragé sa culture en France).");
        $produit27->setDisponible('1');
        $produit27->setImage($this->getReference('media41'));
        $produit27->setNom('Artichaut');
        $produit27->setPrix('1.20');
        $produit27->setTva($this->getReference('tva2'));
        $manager->persist($produit27);

        $produit28 = new produits();
        $produit28->setCategorie($this->getReference('categorie1'));
        $produit28->setDescription("
Asperges
						L’asperge, jeune pousse issue d’une tige souterraine, appartient à la famille des liliacées. Alors qu’une centaine d’espèces différentes sont dénombrées, seule une dizaine de variétés sont comestibles. Les 3 familles les plus consommées sont les asperges blanches, les violettes, plus douces et sucrées et les vertes, les plus savoureuses.");
        $produit28->setDisponible('1');
        $produit28->setImage($this->getReference('media42'));
        $produit28->setNom('Asperges');
        $produit28->setPrix('1.20');
        $produit28->setTva($this->getReference('tva2'));
        $manager->persist($produit28);

        $produit29 = new produits();
        $produit29->setCategorie($this->getReference('categorie1'));
        $produit29->setDescription("e concombre est un légume de la famille des cucurbitacées, tout comme le melon, le potiron et la courgette. C’est le légume fraîcheur de l’été par excellence ! On trouve de nombreuses variétés de concombre, les plus répandues étant l’épineux, très amer, il comporte d’ailleurs quelques épines sur sa peau, et le hollandais, apprécié pour sa légère amertume.");
        $produit29->setDisponible('1');
        $produit29->setImage($this->getReference('media43'));
        $produit29->setNom('Concombre');
        $produit29->setPrix('1.20');
        $produit29->setTva($this->getReference('tva2'));
        $manager->persist($produit29);

        $produit30 = new produits();
        $produit30->setCategorie($this->getReference('categorie1'));
        $produit30->setDescription("L’aubergine est de la famille des solanacées, comme la tomate et les pommes de terre. Elle craint le gel et se cultive en zone tempérée.
Elle présente un fort apport en potassium, en zinc et magnésium.
Composée à 92% d’eau, elle présente un très faible apport calorique et une fois cuite, un excellent apport en fibres anti-cholesterol.
Se récolte idéalement du mois de juin au mois d’août.");
        $produit30->setDisponible('1');
        $produit30->setImage($this->getReference('media44'));
        $produit30->setNom('Aubergines');
        $produit30->setPrix('1.20');
        $produit30->setTva($this->getReference('tva2'));
        $manager->persist($produit30);


        $produit31 = new produits();
        $produit31->setCategorie($this->getReference('categorie1'));
        $produit31->setDescription("Les petits pois sont originaires d’Asie centrale dans les régions montagneuses et de la vallée du Nil. Alors qu’ils existent depuis plus de 4000 ans, ils n’arriveront en France qu’au 17ème siècle, à la cour de Louis XIV. Ils eurent beaucoup de succès et donneront les recettes classiques du Potage Saint Germain et de la purée Clamart. Nous en consommons environ 9 kilos par personne et par an ! Il appartient à la famille des Fabacées qui comprend, outre le petit pois, le pois chiche, le pois cassé, le pois gourmand.");
        $produit31->setDisponible('1');
        $produit31->setImage($this->getReference('media45'));
        $produit31->setNom('Petits pois');
        $produit31->setPrix('1.20');
        $produit31->setTva($this->getReference('tva2'));
        $manager->persist($produit31);


        $produit32 = new produits();
        $produit32->setCategorie($this->getReference('categorie1'));
        $produit32->setDescription(" Le maïs est une plante herbacée tropicale annuelle de la famille des Poacées (graminées), largement cultivée comme céréale pour ses grains riches en amidon, mais aussi comme plante fourragère. Selon l’utilisation voulue, on le récolte à différents degrés de maturité et d’humidité :
−	Le maïs grain : pour l’alimentation animale (volailles et porcs).
−	Le maïs fourrage ou céréale : pour l’alimentation bovine.
−	Le maïs doux : pour l’alimentation humaine.");
        $produit32->setDisponible('1');
        $produit32->setImage($this->getReference('media46'));
        $produit32->setNom('Maïs');
        $produit32->setPrix('1.20');
        $produit32->setTva($this->getReference('tva2'));
        $manager->persist($produit32);

        $produit33 = new produits();
        $produit33->setCategorie($this->getReference('categorie3'));
        $produit33->setDescription("Les délices du boeuf grillé
Le boeuf… Voilà bien une viande qu’on associe machinalement au barbecue. Le t-bone, les filets mignons, les biftecks de contre-filet. Quel délice !");
        $produit33->setDisponible('1');
        $produit33->setImage($this->getReference('media47'));
        $produit33->setNom('Boeuf');
        $produit33->setPrix('1.20');
        $produit33->setTva($this->getReference('tva2'));
        $manager->persist($produit33);

        $produit34 = new produits();
        $produit34->setCategorie($this->getReference('categorie3'));
        $produit34->setDescription(" Petite, oui, mais ô combien savoureuse !
Le tout est de savoir la préparer. Un four trop chaud, pas assez de matière grasse, une cuisson trop longue et vous voilà devant un oiseau à la chair desséchée, la peau sur les os !
Mieux vaut la barder (c’est-à-dire la recouvrir de lanières de lard) ou la farcir, avec du foie gras par exemple.
Comptez 2 à 3 cailles par personne et veillez à les consommer dans les 2 à 3 jours après l’achat.");
        $produit34->setDisponible('1');
        $produit34->setImage($this->getReference('media48'));
        $produit34->setNom('Caille');
        $produit34->setPrix('1.20');
        $produit34->setTva($this->getReference('tva2'));
        $manager->persist($produit34);

        $produit35 = new produits();
        $produit35->setCategorie($this->getReference('categorie3'));
        $produit35->setDescription("Le Canard… Voilà bien une viande qu’on associe machinalement au barbecue. Le t-bone, les filets mignons, les biftecks de contre-filet. Quel délice !");
        $produit35->setDisponible('1');
        $produit35->setImage($this->getReference('media49'));
        $produit35->setNom('Canard');
        $produit35->setPrix('1.20');
        $produit35->setTva($this->getReference('tva2'));
        $manager->persist($produit35);

        $produit36 = new produits();
        $produit36->setCategorie($this->getReference('categorie3'));
        $produit36->setDescription("Ceux et celles qui évitent de manger du porc l’été en pensant que c’est une viande trop grasse passent totalement à côté du plaisir…
Si autrefois cela était vrai, aujourd’hui cela ne l’est plus. En effet, le cochon contemporain est plus maigre que son aïeul tout en ayant gardé toutes les qualités organoleptiques.
Le goût du porc est très compatible avec la fumée, ce qui explique sa présence dominante dans la charcuterie. Il va alors de soi que la viande de porc est tout indiquée pour la cuisson au barbecue.");
        $produit36->setDisponible('1');
        $produit36->setImage($this->getReference('media50'));
        $produit36->setNom('Porc');
        $produit36->setPrix('1.20');
        $produit36->setTva($this->getReference('tva2'));
        $manager->persist($produit36);

        $produit37 = new produits();
        $produit37->setCategorie($this->getReference('categorie3'));
        $produit37->setDescription("Le poulet, la caille, le canard, la dinde et toutes les autres bêtes à plumes, incluant l’autruche, ont une place privilégiée sur le barbecue. Mais attention aux salmonelles et aux staphylocoques ! La manipulation des volailles oblige une prudence extrême. L’hygiène est de rigueur, l’entreposage et la macération des viandes se font absolument au réfrigérateur et la cuisson des viandes, à l’exception des bêtes à viande rouge, n’offre pas de choix: la volaille doit être bien cuite.");
        $produit37->setDisponible('1');
        $produit37->setImage($this->getReference('media51'));
        $produit37->setNom('Volailles');
        $produit37->setPrix('1.20');
        $produit37->setTva($this->getReference('tva2'));
        $manager->persist($produit37);

        $produit38 = new produits();
        $produit38->setCategorie($this->getReference('categorie4'));
        $produit38->setDescription("La morue de l'Atlantique, aussi appelée morue franche, morue commune et cabillaud, est une espèce de poissons de la famille des gadidés vivant dans l'Atlantique Nord.");
        $produit38->setDisponible('1');
        $produit38->setImage($this->getReference('media52'));
        $produit38->setNom('Cabillaud');
        $produit38->setPrix('1.20');
        $produit38->setTva($this->getReference('tva2'));
        $manager->persist($produit38);

        $produit39 = new produits();
        $produit39->setCategorie($this->getReference('categorie4'));
        $produit39->setDescription("La coquille saint jacques fut au Moyen-Age un signe de reconnaissance des pélerins ayant été à Saint Jacques de Compostelle. Le nom lui est resté. La Saint Jacques est un mollusque de la famille des pectinidés. Ses cousines de la famille des Chlamys (pétoncles et vanneaux) bénéficient également du nom de « Saint Jacques » bien qu’elles soient plus petites. Sa pêche n’est autorisée que du 1er Octobre au 15 Mai. Elles doivent au minimum faire 10 cm de diametre pour être commercialisées. La coquille saint jacques de Normandie bénéficie d’un label rouge depuis 2002.");
        $produit39->setDisponible('1');
        $produit39->setImage($this->getReference('media53'));
        $produit39->setNom('Coquille-saint-jacques');
        $produit39->setPrix('1.20');
        $produit39->setTva($this->getReference('tva2'));
        $manager->persist($produit39);

        $produit40 = new produits();
        $produit40->setCategorie($this->getReference('categorie4'));
        $produit40->setDescription("Ce nom désigne en réalité un grand nombre de poissons de la famille des salmonidés, celle ci incluant également la truite. On estime à plus de 90% le saumon issu de l’élevage contre 10% de saumon sauvage sur le marché. Ce dernier affichant une baisse de population de 75% au cours des 20 dernières années, on ne peut qu’encourager une consommation raisonnée de poisson sauvage.");
        $produit40->setDisponible('1');
        $produit40->setImage($this->getReference('media54'));
        $produit40->setNom('Saumon');
        $produit40->setPrix('1.20');
        $produit40->setTva($this->getReference('tva2'));
        $manager->persist($produit40);

        $produit41 = new produits();
        $produit41->setCategorie($this->getReference('categorie4'));
        $produit41->setDescription("Les principales variétés de thon les plus présentes sur les marchés sont : le thon rouge, le thon albacore et le thon blanc (germon). Il en existe d’autres, mais bien moins consommées.");
        $produit41->setDisponible('1');
        $produit41->setImage($this->getReference('media55'));
        $produit41->setNom('Thon');
        $produit41->setPrix('1.20');
        $produit41->setTva($this->getReference('tva2'));
        $manager->persist($produit41);

        $produit42 = new produits();
        $produit42->setCategorie($this->getReference('categorie4'));
        $produit42->setDescription("Riche en vitamines et en minéraux, la lotte est un poisson très maigre. Rapidement cuit, sans arêtes, c’est un poisson facile à préparer, et sa chair est très prisée. Que de bonnes raisons pour tester de nouvelles recettes de lotte.");
        $produit42->setDisponible('1');
        $produit42->setImage($this->getReference('media56'));
        $produit42->setNom('Lottes');
        $produit42->setPrix('1.20');
        $produit42->setTva($this->getReference('tva2'));
        $manager->persist($produit42);


        $produit43 = new produits();
        $produit43->setCategorie($this->getReference('categorie4'));
        $produit43->setDescription("Homards, crabes et crevettes au menu

Si vos crustacés sont caoutchouteux, fibreux, secs et fermes, c’est qu’ils ont subi une trop longue cuisson. Les crustacés ne feront pas mentir l’adage qui dit que plus c’est simple, meilleur c’est. Pourquoi compliquer les choses et masquer la saveur naturelle déjà si raffinée de ces aliments ? À mon sens, les deux meilleures manières de les apprêter sont :

1. Les cuire, juste le temps qu’il faut, compter six minutes par livre, dans l’eau de mer, dans la mesure du possible, ou tout simplement dans de l’eau additionnée d’algues et arroser de citron et de beurre fondu ou d’huile d’olive.
2. Les griller, tout simplement.");
        $produit43->setDisponible('1');
        $produit43->setImage($this->getReference('media57'));
        $produit43->setNom('Crevettes');
        $produit43->setPrix('1.20');
        $produit43->setTva($this->getReference('tva2'));
        $manager->persist($produit43);

        $produit44 = new produits();
        $produit44->setCategorie($this->getReference('categorie5'));
        $produit44->setDescription("Céréale de la famille des graminées. Riche en magnésium et phosphore, naturellement sans gluten. Renforce la peau, les cheveux et les ongles. Apport calorique : 110 kcal/100 g");
        $produit44->setDisponible('1');
        $produit44->setImage($this->getReference('media58'));
        $produit44->setNom('Millet');
        $produit44->setPrix('1.20');
        $produit44->setTva($this->getReference('tva2'));
        $manager->persist($produit44);

        $produit45 = new produits();
        $produit45->setCategorie($this->getReference('categorie5'));
        $produit45->setDescription("La polenta, semoule de maïs plutôt grossière, est originaire du nord de l’Italie. Le plus souvent cuisinée en bouillie ou en galettes, elle peut aussi se laisser aller à d’autres fantaisies. Selon les régions, vous trouverez plusieurs tailles de grains de semoule, de la plus fine à la plus grossière. On trouve aujourd’hui de la polenta instantanée, une semoule de mais précuite, qui ne demande qu’une minute de cuisson ! Pour la recette de base, il vous faudra cuire la polenta dans 4 fois son volume de bouillon environ 5 minutes (soit 1 litre d’eau pour 250 g de polenta). Cette purée onctueuse est parfaite pour accompagner vos plats de viandes en sauce.");
        $produit45->setDisponible('1');
        $produit45->setImage($this->getReference('media59'));
        $produit45->setNom('Polenta');
        $produit45->setPrix('1.20');
        $produit45->setTva($this->getReference('tva2'));
        $manager->persist($produit45);

        $produit46 = new produits();
        $produit46->setCategorie($this->getReference('categorie5'));
        $produit46->setDescription("Tubercule de la famille des solonacées, la pomme de terre, la patate ou truffe selon les régions, fait partie des ingrédients préférés des français. Bien que poussant comme un légume, elle se révèle un féculent à l’index glycémique assez élevé. Sa consommation doit donc être surveillée pour les diabétiques. Elle se consomme exclusivement cuite et peut même se révéler toxique lorsqu’elle est crue ou qu’elle commence à germer excessivement.");
        $produit46->setDisponible('1');
        $produit46->setImage($this->getReference('media60'));
        $produit46->setNom('Pommes de terre');
        $produit46->setPrix('1.20');
        $produit46->setTva($this->getReference('tva2'));
        $manager->persist($produit46);

        $produit47 = new produits();
        $produit47->setCategorie($this->getReference('categorie5'));
        $produit47->setDescription("Cultivé depuis plus de 5 000 ans sur les hauts plateaux d’Amérique du Sud, le quinoa également appelé « riz des Incas » était à la base de l’alimentation des civilisations précolombiennes. Suite à l’invasion du territoire par les espagnols, la culture du quinoa faillit disparaître. Ce n’est qu’au XXème siècle, que la culture du quinoa a progressivement redémarrée sur l’Altiplano. Aujourd’hui, le quinoa est aussi cultivé en Europe et aux Etats-Unis et sa production mondiale s’élève à 60 000 tonnes.Le quinoa est une céréale connue pour être très digeste, sans gluten, pauvre en lipides mais riche en fer et en protéines végétales. En effet, le quinoa contient entre 16 et 18% de protéines mais aussi tous les acides aminés essentiels à la vie humaine.");
        $produit47->setDisponible('1');
        $produit47->setImage($this->getReference('media61'));
        $produit47->setNom('Quinoa');
        $produit47->setPrix('1.20');
        $produit47->setTva($this->getReference('tva2'));
        $manager->persist($produit47);

        $produit48 = new produits();
        $produit48->setCategorie($this->getReference('categorie5'));
        $produit48->setDescription("e sarrasin trouve ses origines dans le Sud-Ouest de la Chine, en Sibérie et en Mandchourie.
Il s’est développé ensuite en Europe où il est devenu un aliment de base pour de nombreux
peuples d’Europe centrale. De nos jours, c’est en Auvergne et en Bretagne que le sarrasin
est cultivé.
Le sarrasin est aussi appelé blé noir, mais ce n’est pas une céréale. On lui a donné ce nom
pour ses qualités alimentaires car il permet de fabriquer une farine de couleur grise.");
        $produit48->setDisponible('1');
        $produit48->setImage($this->getReference('media62'));
        $produit48->setNom('Sarrasin');
        $produit48->setPrix('1.20');
        $produit48->setTva($this->getReference('tva2'));
        $manager->persist($produit48);

        $produit49 = new produits();
        $produit49->setCategorie($this->getReference('categorie5'));
        $produit49->setDescription("Le riz est une céréale de la famille des poacées, cultivée dans les régions tropicales, subtropicales et tempérées chaudes pour son fruit, ou caryopse, riche en amidon.");
        $produit49->setDisponible('1');
        $produit49->setImage($this->getReference('media63'));
        $produit49->setNom('Riz');
        $produit49->setPrix('1.20');
        $produit49->setTva($this->getReference('tva2'));
        $manager->persist($produit49);

        $produit50 = new produits();
        $produit50->setCategorie($this->getReference('categorie5'));
        $produit50->setDescription("Les pâtes alimentaires sont des aliments fabriqués à partir d'un mélange pétri de farine, de semoule de blé dur, d'épeautre, de blé noir, de riz ou d'autres types de céréales, d'eau et parfois d'œuf et de sel.");
        $produit50->setDisponible('1');
        $produit50->setImage($this->getReference('media64'));
        $produit50->setNom('Pâtes');
        $produit50->setPrix('1.20');
        $produit50->setTva($this->getReference('tva2'));
        $manager->persist($produit50);

        $produit51 = new produits();
        $produit51->setCategorie($this->getReference('categorie6'));
        $produit51->setDescription("Fromage au lait cru, à pâte molle et à la croute fleurie. La légende voudrait qu'en 1791, un prêtre réfractaire se réfugiant chez Marie Harel, dans le village de Camembert en Normandie, lui transmis le secret de techniques d'affinage qui donnent au Camembert sa notoriété. Les descendants de Marie commercialiseront le camembert, qui ne connaitra sa boite en bois aujourd'hui obligatoire qu'un siècle plus tard, et qui en facilitera grandement le transport. Depuis 1983, le Camembert de Normandie bénéficie d'une AOP.");
        $produit51->setDisponible('1');
        $produit51->setImage($this->getReference('media65'));
        $produit51->setNom('Camenbert');
        $produit51->setPrix('1.20');
        $produit51->setTva($this->getReference('tva2'));
        $manager->persist($produit51);

        $produit52 = new produits();
        $produit52->setCategorie($this->getReference('categorie6'));
        $produit52->setDescription("Ce fromage auvergnat AOC au lait de vache se présente sous la forme d'une grosse meule à la pâte compacte.
Affiné dans des caves fraîches et humides : un mois pour le cantal jeune (alors moelleux et fondant), plus de 6 mois pour un cantal vieux.
C'est l'élément indispensable du fameux aligot, même s'il se prête volontiers aux gratins ou aux salades composées.");
        $produit52->setDisponible('1');
        $produit52->setImage($this->getReference('media66'));
        $produit52->setNom('Cantal');
        $produit52->setPrix('1.20');
        $produit52->setTva($this->getReference('tva2'));
        $manager->persist($produit52);

        $produit53 = new produits();
        $produit53->setCategorie($this->getReference('categorie6'));
        $produit53->setDescription("Fromage au lait cru à pâte pressée cuite, le Comté est le 1er fromage AOC en tonnage (51 000 T en 2005). Son terroir est le Massif du Jura, où il prend tout son temps pour s’affiner. Sa maturation est au minimum de 4 mois, mais elle est souvent supérieure, de 8 mois en moyenne à beaucoup plus. Chaque meule révèlera une composition aromatique différente selon sa région d’origine, sa saison, sa cave d’affinage. Riche en phosphore, calcium, sels minéraux et protéines, le Comté est un aliment précieux et goûteux.");
        $produit53->setDisponible('1');
        $produit53->setImage($this->getReference('media67'));
        $produit53->setNom('Comté');
        $produit53->setPrix('1.20');
        $produit53->setTva($this->getReference('tva2'));
        $manager->persist($produit53);

        $produit54 = new produits();
        $produit54->setCategorie($this->getReference('categorie6'));
        $produit54->setDescription("Fromage au lait de vache à pâte pressée cuite affiné de 4 à 12 mois. Originaire de la vallée de l'Emme, en Suisse, on en trouve trace dès le 13ème siècle. Il était initialement un fromage d'alpages mais la production fut autorisée en plaines à partir du 19ème siècle afin de l'intensifier. On dit que l'emmental fut à l'origine de la renommée des fromagers Suisses. Il est actuellement protégé par plusieurs appellations, en fonction de son origine (France, Allemagne ou Suisse).");
        $produit54->setDisponible('1');
        $produit54->setImage($this->getReference('media68'));
        $produit54->setNom('Emmental');
        $produit54->setPrix('1.20');
        $produit54->setTva($this->getReference('tva2'));
        $manager->persist($produit54);

        $produit55 = new produits();
        $produit55->setCategorie($this->getReference('categorie6'));
        $produit55->setDescription("Fromage italien traditionnel à pâte persillé, fabriqué à partir de lait de vache entier pasteurisé. Aujourd'hui, il est produit en grande partie dans la province de Novare. Le lait est mélangé à des ferments lactiques, de la présure de veau et des spores de pénicillium. Une fois caillé, il est égoutté, salé et affiné 5 à 7 semaines. Il pèse 6 à 12 kg.");
        $produit55->setDisponible('1');
        $produit55->setImage($this->getReference('media69'));
        $produit55->setNom('Gorgonzola');
        $produit55->setPrix('1.20');
        $produit55->setTva($this->getReference('tva2'));
        $manager->persist($produit55);

        $produit56 = new produits();
        $produit56->setCategorie($this->getReference('categorie6'));
        $produit56->setDescription("Fromage frais italien à pâte filée, disponible en AOP sous le nom « Mozzarella di bufala campana ». La mozzarella des puristes est à base de lait de bufflonne, mais elle existe aussi à base de lait de vache. Elle est principalement produite dans la région de Naples. C'est actuellement l'un des fromages les plus consommés en Europe, principalement sous sa forme au lait de vache, moins onéreuse. Malgré le scandale sanitaire de 2008, sa consommation a encore augmenté de 10% l'année passée.");
        $produit56->setDisponible('1');
        $produit56->setImage($this->getReference('media70'));
        $produit56->setNom('Mozzarella');
        $produit56->setPrix('1.20');
        $produit56->setTva($this->getReference('tva2'));
        $manager->persist($produit56);

        $produit57 = new produits();
        $produit57->setCategorie($this->getReference('categorie6'));
        $produit57->setDescription("Fromage de lait de brebis à pâte persillée. Le fromage pèse environ 2,5 kg pour 10 cm de haut. Il est affiné dans des caves aménagées dans les éboulements de roches du Combalou, à Roquefort. Celles-ci offrent en permanence un air humide parfait pour le développement des Penicillium Roqueforti, les moisissures du fromage, ainsi qu'une stabilité de température qui permet un affinage progressif et régulier. Le roquefort pourra être vendu au terme de 3 mois d'affinage. Le roquefort fut le premier fromage français à bénéficier d'une AOC en 1925.");
        $produit57->setDisponible('1');
        $produit57->setImage($this->getReference('media71'));
        $produit57->setNom('Roquefort');
        $produit57->setPrix('1.20');
        $produit57->setTva($this->getReference('tva2'));
        $manager->persist($produit57);

        $produit58 = new produits();
        $produit58->setCategorie($this->getReference('categorie7'));
        $produit58->setDescription("L’agar agar est un gélifiant naturel extrait d’une algue rouge (Gracilaria ou Gelidium). Il présente sous la forme d’une poudre blanche. Il permet de réaliser des desserts onctueux et crémeux. Ce gélifiant naturel remplace aisément la gélatine, sans apporter de goût aux aliments et le résultat est surprenant !");
        $produit58->setDisponible('1');
        $produit58->setImage($this->getReference('media72'));
        $produit58->setNom('Agar agar');
        $produit58->setPrix('1.20');
        $produit58->setTva($this->getReference('tva2'));
        $manager->persist($produit58);

        $produit59 = new produits();
        $produit59->setCategorie($this->getReference('categorie7'));
        $produit59->setDescription("Comme toutes les herbes aromatiques, l’estragon contient vitamines et sels minéraux, mais les quantités employées sont trop minimes pour que cela ait une valeur nutritionnelle. L’estragon n’apporte pas de calories. Il contient de la vitamine A, calcium et fer.");
        $produit59->setDisponible('1');
        $produit59->setImage($this->getReference('media73'));
        $produit59->setNom('Estragon');
        $produit59->setPrix('1.20');
        $produit59->setTva($this->getReference('tva2'));
        $manager->persist($produit59);

        $produit60 = new produits();
        $produit60->setCategorie($this->getReference('categorie7'));
        $produit60->setDescription("Chouchou controversé des fêtes de fin d’année, le foie gras est considéré comme partie du patrimoine gastronomique français. Découvrez le poêlé, en terrines, déclinez pour varier les plaisirs et toujours vous surprendre !");
        $produit60->setDisponible('1');
        $produit60->setImage($this->getReference('media74'));
        $produit60->setNom('Fois Gras');
        $produit60->setPrix('1.20');
        $produit60->setTva($this->getReference('tva2'));
        $manager->persist($produit60);

        $produit61 = new produits();
        $produit61->setCategorie($this->getReference('categorie7'));
        $produit61->setDescription("C’est un mélange d’huiles végétales et d’eau, transformé à l’état solide et elles sont épaissit avec un émulsifiant. Un émulsifiant ? Par exemple, de la lécithine ou du jaune d’oeuf (on en met dans la mayonnaise pour émulsifier l’huile). Les margarines sont souvent faites à partir d’huile de lin, colza, tournesol…");
        $produit61->setDisponible('1');
        $produit61->setImage($this->getReference('media75'));
        $produit61->setNom('Margarine');
        $produit61->setPrix('1.20');
        $produit61->setTva($this->getReference('tva2'));
        $manager->persist($produit61);

        $produit62 = new produits();
        $produit62->setCategorie($this->getReference('categorie7'));
        $produit62->setDescription("Un thé vert est un thé peu oxydé lors de sa fabrication, conservant ainsi intactes ses propriétés. Ce type de thé est très populaire en Chine et au Japon, où il est réputé avoir les propriétés thérapeutiques les plus efficaces. Il se répand de plus en plus en Occident, où traditionnellement on boit plutôt du thé noir. Ingrédient de base du thé à la menthe, on peut aussi le cuisiner dans des recettes sucrées et salées.");
        $produit62->setDisponible('1');
        $produit62->setImage($this->getReference('media76'));
        $produit62->setNom('Thé Vert');
        $produit62->setPrix('1.20');
        $produit62->setTva($this->getReference('tva2'));
        $manager->persist($produit62);

        $produit63 = new produits();
        $produit63->setCategorie($this->getReference('categorie7'));
        $produit63->setDescription("");
        $produit63->setDisponible('1');
        $produit63->setImage($this->getReference('media77'));
        $produit63->setNom('Thé Noir');
        $produit63->setPrix('1.20');
        $produit63->setTva($this->getReference('tva2'));
        $manager->persist($produit63);




        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }






    }