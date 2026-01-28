<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RentalController extends AbstractController
{
    /**
     * @Route("/location-materiel", name="rental")
     */
    public function index(): Response
    {
        $products = $this->getProducts();
        
        return $this->render('rental/index.html.twig', [
            'page_title' => 'Location de Matériel',
            'products' => $products,
        ]);
    }

    /**
     * @Route("/location-materiel/{slug}", name="rental_product")
     */
    public function product(string $slug): Response
    {
        $products = $this->getProducts();
        
        $product = $products[$slug] ?? null;
        
        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé');
        }
        
        return $this->render('rental/product.html.twig', [
            'page_title' => $product['name'],
            'product' => $product,
        ]);
    }
    
    private function getProducts(): array
    {
        return [
            // SONORISATION
            'midas-m32r-live' => [
                'name' => 'MIDAS M32R Live',
                'slug' => 'midas-m32r-live',
                'category' => 'Sonorisation',
                'short_description' => 'Console numérique compacte et flexible, jusqu\'à 32 entrées',
                'description' => 'La M32R-LIVE est une console numérique 16+1 fadeurs motorisés, offrant 48 voies vers 25 bus de mixage. Idéale pour la sonorisation et l\'enregistrement sur scène ou en studio lorsque l\'encombrement doit être réduit sans concession aux performances.',
                'image' => '/IRCI/Midas M32R Live.jpg',
                'features' => [
                    '16 entrées micro',
                    '8 sorties XLR',
                    '8 groupes DCA et 6 groupes de Mute',
                    '17 faders motorisés',
                    'Écran couleur 5"',
                    'Interface audio 32x32 USB',
                    '25 bus de mixage',
                    'Télécommande DAW et contrôle à distance sans fil via application IOS',
                ],
            ],
            'jbl-eon-610-710' => [
                'name' => 'JBL EON 610/710',
                'slug' => 'jbl-eon-610-710',
                'category' => 'Sonorisation',
                'short_description' => 'Enceinte amplifiée, large bande active',
                'description' => 'L\'enceinte JBL EON610/710, apporte une puissance de qualité professionnelle et une polyvalence sans précédent aux systèmes de sonorisation pour les applications live et les installations fixes. Son volume et sa clarté sonore associés à des fonctionnalités complètes rendent sa configuration et son utilisation très intuitives.',
                'image' => '/IRCI/JBL EON 610-710.jpg',
                'features' => [
                    'DSP intégré avec écran LCD couleur et mixeur numérique 3 canaux',
                    'Amplificateur numérique de classe D',
                    'Puissance: 650 Watt RMS, 1300 Watt crête',
                    'Technologie dbx DriveRack Inside avec suppression automatique de larsen',
                    'Streaming audio Bluetooth 5.0',
                    'Réponse en fréquence: 65 Hz - 20 kHz (-10 dB)',
                    'SPL max.: 125 dB',
                    'Angle de dispersion (H x V): 100° x 60°',
                    'Entrées: 2 prises combinées XLR/Jack 6,3 mm',
                    'Sortie: 1 XLR parallèle (passthrough)',
                ],
            ],
            'jbl-control-25' => [
                'name' => 'JBL Control 25',
                'slug' => 'jbl-control-25',
                'category' => 'Sonorisation',
                'short_description' => 'Enceinte passive et compacte',
                'description' => 'La JBL Control 25 est équipée d\'un support mural, elle est compacte et peut être déployée n\'importe où. Sa petite taille lui permet de se fondre dans le décor. Avec sa large diffusion elle couvrira parfaitement votre salle de conférence. Par paire avec un ampli.',
                'image' => '/IRCI/JBL Control 25.jpg',
                'features' => [
                    'Enceintes ligne 100v ou 8 Ohms',
                    'Haut-parleur 13 cm + tweeter titane',
                    'Puissance : 200 W',
                    'Réponse en fréquence : 70 Hz – 23 kHz',
                    'Angle de dispersion (H x V) : 100° x 100°',
                ],
            ],
            'behringer-mpa-200bt' => [
                'name' => 'Behringer MPA 200BT',
                'slug' => 'behringer-mpa-200bt',
                'category' => 'Sonorisation',
                'short_description' => 'Enceinte compacte bluetooth sur batterie',
                'description' => 'La Behringer MPA 200BT fonctionne sur batterie (jusqu\'à 10h d\'autonomie), elle est facile à transporter et peut fonctionner en bluetooth. Sa puissance de 200W la rend idéale pour un cocktail ou une remise de prix.',
                'image' => '/IRCI/Behringer MPA 200BT.jpg',
                'features' => [
                    'Batterie intégrée avec 10 heures d\'autonomie max en fonctionnement continu',
                    'Streaming audio Bluetooth',
                    'Équipement : haut-parleur 8" et tweeter 1"',
                    'Puissance : 200 Watt',
                    '2x entrées micro/ligne avec fiche combo XLR / jack 6,3 mm',
                    'Entrée auxiliaire avec mini-jack 3,5 mm',
                    'Sortie mixée XLR',
                ],
            ],
            'behringer-xenyx-x1204' => [
                'name' => 'Behringer Xenyx X1204USB',
                'slug' => 'behringer-xenyx-x1204',
                'category' => 'Sonorisation',
                'short_description' => 'Console compacte 12 entrées',
                'description' => 'La table de mixage compacte X1204USB vous permet d\'obtenir sans effort un son de qualité supérieure, grâce ses 4 préamplis micro XENYX, ses égaliseurs, ses compresseurs et son processeur Multi-FX. Solution idéale pour vos concerts et vos enregistrements, la X1204USB est un mélangeur incroyablement polyvalent.',
                'image' => '/IRCI/Behringer Xenyx X1204USB.jpg', // Image manquante
                'features' => [
                    '12 canaux',
                    '4 entrées micro avec alimentation fantôme +48 Volts et filtre coupe-bas 75 Hz',
                    'Compresseur par canal de microphone',
                    'Carte son USB intégrée',
                    '2 entrées stéréo',
                    'Mute par canal',
                    'Entrée/sortie enregistrement 2-Tracks',
                    'Sorties principales XLR',
                ],
            ],
            'soundcraft-efx12' => [
                'name' => 'Soundcraft EFX12',
                'slug' => 'soundcraft-efx12',
                'category' => 'Sonorisation',
                'short_description' => 'Console analogique 14 entrées',
                'description' => 'Console analogique 14 entrées, elle est légère est facilement transportable.',
                'image' => '/IRCI/Soundcraft EFX12.jpg',
                'features' => [
                    '8 ou 12 voies mono, 2 voies stéréo',
                    '2 Auxiliaires',
                    'Module d\'effets numérique Lexicon 24bit',
                    'Connecteurs XLR et Jack 6,35 métal',
                    '32 effets',
                    'Fonction Tap Tempo',
                ],
            ],
            'soundcraft-m8' => [
                'name' => 'Soundcraft M8',
                'slug' => 'soundcraft-m8',
                'category' => 'Sonorisation',
                'short_description' => 'Console 12 voies',
                'description' => 'Grâce à la qualité de ses préamplis micro et à sa simplicité d\'utilisation, cette console de mixage polyvalente est à l\'aise aussi bien avec le mixage des micros utilisés lors des conférences et réunions, qu\'avec celui de chants et d\'instruments.',
                'image' => '/IRCI/Soundcraft M8.jpg',
                'features' => [
                    'Sorties directes',
                    '8 entrées mono, 4 entrées stéréo',
                    'Sortie numérique S/PDIF',
                    'Filtre passe-haut 100Hz',
                    'Entrées mono en jack 6,35 mm et XLR',
                    'Entrées stéréo et sorties directes en jack 6,35 mm',
                    'Sorties Master en jack, XLR et numérique S/PDIF en coaxial',
                ],
            ],
            'micros-shure-analogique' => [
                'name' => 'Micros HF Shure Analogique',
                'slug' => 'micros-shure-analogique',
                'category' => 'Sonorisation',
                'short_description' => 'Micro HF cardioïde SM58',
                'description' => 'Premier choix des musiciens dans le monde, le SM58 est le microphone le plus polyvalent et le plus fiable de sa catégorie. Il isolera la voix de celui qui l\'utilise des bruits alentours. Résistant et fiable il est une valeur sûre. Grâce à ses plages de fréquences libres et son récepteur compact, il peut être utilisé en toute circonstance.',
                'image' => '/IRCI/Micro Shure Analogique.jpg',
                'features' => [
                    'Série SM Vocal',
                    'Micros à main sans fil avec capsule dynamique SM 58',
                    'Directivité: cardioïde',
                    'Réponse en fréquence: 50 - 15.000 Hz',
                    'Récepteur avec boitier plastique',
                    'Antennes internes',
                    'Sorties XLR et jack',
                    'Gamme de fréquence M17: 662 - 686 MHz / S8: 823 - 832 MHz / T11 : 863 – 865 MHz',
                ],
            ],
            'pack-micros-shure-numeriques' => [
                'name' => 'Pack micros HF Shure numériques',
                'slug' => 'pack-micros-shure-numeriques',
                'category' => 'Sonorisation',
                'short_description' => 'Micros montés en pack avec manager de fréquence. Idéal pour des tables rondes',
                'description' => 'Premier choix des musiciens dans le monde, le SM58 est le microphone le plus polyvalent et le plus fiable de sa catégorie. Montés par 5 ou 6 avec leur manager de fréquence, notre pack est idéal pour des conférences, tables rondes avec plusieurs intervenant.',
                'image' => '/IRCI/Pack micros Shure numériques.jpg',
                'features' => [
                    'Série SM Vocal',
                    'Micros à main sans fil avec capsule dynamique SM 58',
                    'Directivité: cardioïde',
                    'Double bande: 2,4 GHz & 5,8 GHz',
                    'Réglage automatique de la fréquence',
                    'Affichage de l\'autonomie de la batterie en heures et minutes',
                    'Baie de charge de la batterie intégrée',
                    'Sorties sur XLR et Jack 6,3 mm',
                    'Jusqu\'à 12 heures d\'autonomie',
                    'Jusqu\'à 60 mètres de portée',
                ],
            ],
            'micro-serre-tete-shure-sm35' => [
                'name' => 'Micro serre-tête Shure SM35 TQG',
                'slug' => 'micro-serre-tete-shure-sm35',
                'category' => 'Sonorisation',
                'short_description' => 'Pour une utilisation main libre et une qualité inchangée',
                'description' => 'Certaines personnes préfèrent avoir les mains libres pour s\'exprimer, avec nos micros Shure SM35, nous équipons chaque personne pour qu\'elle se sente à l\'aise. Avec son émetteur de poche léger il se glisse facilement à la ceinture ou autre.',
                'image' => '/IRCI/Micros serre tete.jpg',
                'features' => [
                    'Directivité: Cardioïde',
                    'Réponse en fréquence: 45 - 20 000 Hz',
                    'Niveau de sortie: -59 dBV/Pa',
                    'Niveau de pression acoustique max.: 153 dB',
                ],
            ],
            'micro-cravate-shure-cvl' => [
                'name' => 'Micro cravate Shure CVL',
                'slug' => 'micro-cravate-shure-cvl',
                'category' => 'Sonorisation',
                'short_description' => 'Pour une utilisation main libre et une qualité inchangée',
                'description' => 'Certaines personnes préfèrent avoir les mains libres pour s\'exprimer, avec nos micros Shure CVL, nous équipons chaque personne pour qu\'elle se sente à l\'aise. Avec son émetteur de poche léger il se glisse facilement à la ceinture ou autre.',
                'image' => '/IRCI/Micros serre tete.jpg',
                'features' => [
                    'Directivité: Cardioïde',
                    'Réponse en fréquence: 50 – 20 000 Hz',
                    'Niveau de sortie: -43,5dBV/Pa',
                    'Niveau de pression acoustique max.: 139 dB',
                ],
            ],
            'rack-son-cle-en-main' => [
                'name' => 'Rack son clé en main',
                'slug' => 'rack-son-cle-en-main',
                'category' => 'Sonorisation',
                'short_description' => 'Rack son équipé, il est conçu pour être autonome',
                'description' => 'Nos racks son clé en main sont équipés d\'une console Behringer Xenyx X1222 avec 12 entrées, d\'un pack de 5 micros HF Shure numériques (possibilité de micro serre-tête ou cravate), d\'un manager de fréquence, d\'amplis et de 4 enceintes JBL Control 25. Fixez les enceintes, branchez-les, mettez du jus et c\'est parti.',
                'image' => '/IRCI/Rack son cle en main.jpg', // Image manquante
                'features' => [
                    'Manager de fréquence Shure GLXD+',
                    '5 micros Shure SM 58',
                    '4 enceintes JBL Control 25',
                    '2 amplis t.amp TA450 MK-X',
                    'Compresseur Samson S Com',
                    'Table de mixage Behringer Xenyx X1222USB',
                ],
            ],
            // LUMIÈRE
            'eurolite-pfe60' => [
                'name' => 'Eurolite PFE60 WW/CW Pro. Sport',
                'slug' => 'eurolite-pfe60',
                'category' => 'Lumière',
                'short_description' => 'Projecteurs à découpe, plusieurs angles de faisceaux disponibles',
                'description' => 'Cet appareil est un pro de la LEDfile spot pour des effets d\'éclairage professionnels dans le domaine de la technologie événementielle, par exemple sur scène. Parfait pour mettre en valeur votre évènement.',
                'image' => '/IRCI/Eurolite PFE60.jpg',
                'features' => [
                    'LED COB (Chip-on-board) 2en1 BCL WW/CW de 60 W',
                    'Curseur d\'ouverture',
                    'Indice de rendu des couleurs élevé: (CRI >90)',
                    'Température de couleur variable: 3200 K - 5600 K',
                    'Focalisation manuelle',
                    'Angle de faisceau: 9° - 25° / 20° - 50°',
                ],
            ],
            'eurolite-bar-12-qcl' => [
                'name' => 'Eurolite bar-12 QCL',
                'slug' => 'eurolite-bar-12-qcl',
                'category' => 'Lumière',
                'short_description' => 'Barre de 12 LED, couleur personnalisable à souhait.',
                'description' => 'Les barres LED Eurolite bar-12 QCL présentent une facilité d\'usage, des sélections prédéfinies de couleurs au réglage personnalisé. Elles s\'utilisent aussi bien seule qu\'en groupe (jusqu\'à 8 barres). Parfaite pour apporter de la chaleur et de la couleur à vos espaces (scènes, accueil, etc…). DMX Controller inclus dès 6 barres LED réservées.',
                'image' => '/IRCI/Eurolite bar 12.jpg',
                'features' => [
                    'Avec 12x LED QCL de 4 Watt avec couleurs rouge, vert, bleu et blanc',
                    'Couleurs statiques',
                    'Mélange des couleurs RVBB',
                    'Projection sans scintillement',
                    'Mode Maître / Esclave',
                    'Contrôle DMX512 via n\'importe quel contrôleur DMX disponible dans le commerce (occupe jusqu\'à 9 canaux)',
                ],
            ],
            'stairville-ddc-12-lcd-dmx' => [
                'name' => 'Stairville DDC-12 LCD DMX Controller',
                'slug' => 'stairville-ddc-12-lcd-dmx',
                'category' => 'Lumière',
                'short_description' => 'Pupitre DMX 12 canaux',
                'description' => 'Boitier de contrôle DMX 12 canaux.',
                'image' => '/IRCI/Stairville DMX Controller.jpg',
                'features' => [
                    '12 canaux',
                    'Avec fader Master',
                    'Ecran LCD avec paramètres d\'affichage pour les 12 canaux et le Master (0-255)',
                    'Design compact',
                    'Utilisation simple',
                    'Bloc d\'alimentation DC 9 V incl.',
                    'Sortie DMX sur XLR 3 broches',
                ],
            ],
            // MULTIMÉDIA
            'televisions-samsung' => [
                'name' => 'Télévisions Samsung',
                'slug' => 'televisions-samsung',
                'category' => 'Multimédia',
                'short_description' => 'Ecrans de la marque Samsung exclusivement pour homogénéiser vos espaces',
                'description' => 'Nous disposons d\'écrans de différentes tailles, allant du 24\'\' au 70\'\'. Les télévisions sont UHD 4K, elles peuvent être utilisés sur un meuble, une table mais également sur pied (hauteur de support réglable) ou en fixation murale.',
                'image' => '/IRCI/TV Samsung.jpg', // Image manquante
                'features' => [
                    'Gamme Samsung Crystal UHD',
                    'Tailles : 24\'\', 32\'\', 43\'\', 50\'\', 55\'\', 65\'\', 70\'\'',
                    'Connectiques USB / HDMI',
                    'Fonction Smart TV',
                ],
            ],
            'videoprojecteur-courte-focale' => [
                'name' => 'Vidéoprojecteur courte focale',
                'slug' => 'videoprojecteur-courte-focale',
                'category' => 'Multimédia',
                'short_description' => 'Vidéoprojecteur FullHD de 3600 à 4000 lumens',
                'description' => 'Ces vidéoprojecteurs de résolution Full HD 1080p sont compatible HDR, offrant un taux de contraste de 50 000:1 et un niveau de luminosité maximal de 4 000 lumens.',
                'image' => '/IRCI/VP courte focale.jpeg',
                'features' => [
                    'Luminosité: 3600 à 4000 lm',
                    '2 prises HDMI',
                    'Focale courte',
                ],
            ],
            'videoprojecteur-haute-resolution' => [
                'name' => 'Vidéoprojecteur haute résolution',
                'slug' => 'videoprojecteur-haute-resolution',
                'category' => 'Multimédia',
                'short_description' => 'Projecteur LCD à partir de 5000 lumens',
                'description' => 'Avec une luminosité élevée comprise entre 5 000 et 5 500 lm, la gamme vous promet ainsi des noirs profonds, un graphisme net et précis, et des textes faciles à déchiffrer.',
                'image' => '/IRCI/VP haute résolution.jpeg',
                'features' => [
                    'Luminosité: 5000 à 5200 lm',
                    'Résolution : WUXGA',
                    'Connectiques : HDMI, VGA, USB',
                ],
            ],
            'videoprojecteur-longue-distance' => [
                'name' => 'Vidéoprojecteur longue distance',
                'slug' => 'videoprojecteur-longue-distance',
                'category' => 'Multimédia',
                'short_description' => 'Projecteur longue distance haute luminosité (7000 lumens)',
                'description' => 'Nos vidéoprojecteurs longue distance permettent de projeter à plus d\'une dizaine de mètres sans perte de qualité.',
                'image' => '/IRCI/VP longue distance.jpg',
                'features' => [
                    'Luminosité: 6500 à 7500 lm',
                    'Résolution : WXGA',
                    'Connectiques : HDMI, HDBaseT, USB',
                    'Focale normale ou longue distance',
                ],
            ],
            'tablettes-tactiles' => [
                'name' => 'Tablettes tactiles',
                'slug' => 'tablettes-tactiles',
                'category' => 'Multimédia',
                'short_description' => 'Tablettes Apple ou Samsung selon préférence',
                'description' => 'Nos tablettes 10 ou 11 pouces équipées de coques de protections peuvent être utilisées avec des supports sur pied ou sur table.',
                'image' => '/IRCI/Tablettes tactiles.jpeg',
                'features' => [
                    'iPad 10,2\'\' 9e génération',
                    'Samsung Galaxy Tab A9 11\'\'',
                ],
            ],
            'ordinateurs-portables' => [
                'name' => 'Ordinateurs portables',
                'slug' => 'ordinateurs-portables',
                'category' => 'Multimédia',
                'short_description' => 'Ordinateurs sous Windows avec un processeur allant de i3 à i7 avec pack office',
                'description' => 'Nous avons différents ordinateurs pour s\'adapter au mieux à votre besoin. Ils sont tous équipés de cadenas.',
                'image' => '/IRCI/Ordinateurs.webp',
                'features' => [
                    'Ordinateurs 15,6\'\'',
                    'Processeur intel core i3/i5/i7',
                    'Suite Office (Pro Plus 2021)',
                ],
            ],
            // CONTRÔLE D'ACCÈS / INFORMATIQUE
            'lecteur-cs-4070' => [
                'name' => 'Lecteur CS 4070',
                'slug' => 'lecteur-cs-4070',
                'category' => 'Contrôle d\'accès',
                'short_description' => 'Douchette de contrôle d\'accès compact',
                'description' => 'Les douchettes CS 4070 permettent un enregistrement des badges et une récupération des données. Les datas sont stockés sur la douchette avant d\'être récupérées.',
                'image' => '/IRCI/CS4070.png',
                'features' => [
                    'Lecture code 1D-2D, QR code',
                    'Transmission bluetooth ou stockage interne',
                    'Autonomie d\'environ 16 heures',
                ],
            ],
            'pda-zebra-tc21' => [
                'name' => 'PDA Zebra TC21',
                'slug' => 'pda-zebra-tc21',
                'category' => 'Contrôle d\'accès',
                'short_description' => 'Matériel de contrôle d\'accès en temps réel',
                'description' => 'Zebra TC21 est un outil professionnel Android économique créé pour les petites et grandes entreprises, avec toutes les fonctionnalités d\'un smartphone et en plus un scanner code à barre capable de déchiffrer sur écran et papier et bien d\'autres. La Zebra TC21 permet un contrôle en direct des accès avec la possibilité de filtrer les participants.',
                'image' => '/IRCI/Zebra TC21.jpg',
                'features' => [
                    'Utilisation en Wi-Fi',
                    'Ecran 5\'\'',
                    'Lecture code 1D-2D',
                    'Système Android',
                ],
            ],
            'imprimante-multifonction-laser-hp' => [
                'name' => 'Imprimante multifonction laser HP',
                'slug' => 'imprimante-multifonction-laser-hp',
                'category' => 'Contrôle d\'accès',
                'short_description' => 'Imprimante couleur avec fonction copie et scanner inclus',
                'description' => 'Créez des documents couleur de qualité professionnelle et effectuez rapidement des tâches grâce à l\'impression recto verso ultrarapide.',
                'image' => '/IRCI/Imprimante multifonction.jpeg',
                'features' => [
                    'Impressions laser couleur',
                    'Fonction Copie et scanner',
                    'Recto-verso automatique',
                    '18 pages/minute',
                    'Capacité 150 feuilles',
                    'Wi-Fi, USB, réseau',
                    'Papier A4',
                ],
            ],
            'imprimante-laser-noir-blanc' => [
                'name' => 'Imprimante laser noir et blanc',
                'slug' => 'imprimante-laser-noir-blanc',
                'category' => 'Contrôle d\'accès',
                'short_description' => 'Imprimante laser compacte',
                'description' => 'Nos imprimantes laser monochrome sont conçues pour optimiser la productivité. Avec une vitesse d\'impression allant jusqu\'à 32 pages par minute et la capacité d\'imprimer en recto-verso automatiquement à une vitesse de 16 faces par minute, elle répond aux besoins des professionnels les plus exigeants.',
                'image' => '/IRCI/Imprimante laser noir et blanc.jpeg',
                'features' => [
                    'Impression laser noir et blanc',
                    'Recto-verso automatique',
                    '32 pages/minute',
                    'Capacité 250 feuilles',
                    'Wi-fi, USB, Réseau',
                    'Papier A4',
                ],
            ],
        ];
    }
}
