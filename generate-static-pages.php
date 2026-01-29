<?php
/**
 * Script pour générer les pages HTML statiques du site IRCI
 * À exécuter avec : php generate-static-pages.php
 */

$baseUrl = 'https://127.0.0.1:8000'; // Changer si nécessaire
$outputDir = __DIR__ . '/deploy-static';

// Créer le dossier de sortie s'il n'existe pas
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

// Liste des pages à générer
$pages = [
    'index.html' => '/',
    'prestations.html' => '/prestations',
    'location-materiel.html' => '/location-materiel',
    'a-propos.html' => '/a-propos',
    'galerie.html' => '/galerie',
    'contact.html' => '/contact',
    'mentions-legales.html' => '/mentions-legales',
];

// Pages produits (liste complète depuis RentalController)
$products = [
    'midas-m32r-live',
    'jbl-eon-610-710',
    'jbl-control-25',
    'behringer-mpa-200bt',
    'behringer-xenyx-x1204',
    'soundcraft-efx12',
    'soundcraft-m8',
    'micros-shure-analogique',
    'pack-micros-shure-numeriques',
    'micro-serre-tete-shure-sm35',
    'micro-cravate-shure-cvl',
    'rack-son-cle-en-main',
    'eurolite-pfe60',
    'eurolite-bar-12-qcl',
    'stairville-ddc-12-lcd-dmx',
    'televisions-samsung',
    'videoprojecteur-courte-focale',
    'videoprojecteur-haute-resolution',
    'videoprojecteur-longue-distance',
    'tablettes-tactiles',
    'ordinateurs-portables',
    'lecteur-cs-4070',
    'pda-zebra-tc21',
    'imprimante-multifonction-laser-hp',
    'imprimante-laser-noir-blanc',
];

echo "🚀 Génération des pages HTML statiques...\n\n";

// Désactiver la vérification SSL pour localhost
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);

// Générer les pages principales
foreach ($pages as $filename => $route) {
    echo "📄 Génération de $filename...";
    
    $url = $baseUrl . $route;
    $html = @file_get_contents($url, false, $context);
    
    if ($html === false) {
        echo " ❌ ERREUR\n";
        echo "   URL: $url non accessible\n";
        continue;
    }
    
    // Adapter les chemins des assets pour le déploiement statique
    $html = str_replace('/build/', './build/', $html);
    $html = str_replace('/images/', './images/', $html);
    $html = str_replace('/IRCI/', './IRCI/', $html);
    $html = str_replace('href="/', 'href="./', $html);
    $html = str_replace("href='/", "href='./", $html);
    $html = str_replace('src="/IRCI/', 'src="./IRCI/', $html);
    
    // Sauvegarder le fichier
    file_put_contents($outputDir . '/' . $filename, $html);
    echo " ✅\n";
}

// Générer les pages produits
if (!is_dir($outputDir . '/location-materiel')) {
    mkdir($outputDir . '/location-materiel', 0755, true);
}

foreach ($products as $productSlug) {
    $filename = "location-materiel/$productSlug.html";
    echo "📦 Génération de $filename...";
    
    $url = $baseUrl . '/location-materiel/' . $productSlug;
    $html = @file_get_contents($url, false, $context);
    
    if ($html === false) {
        echo " ❌ ERREUR\n";
        continue;
    }
    
    // Adapter les chemins (un niveau de plus pour les sous-pages)
    $html = str_replace('/build/', '../build/', $html);
    $html = str_replace('/images/', '../images/', $html);
    $html = str_replace('/IRCI/', '../IRCI/', $html);
    $html = str_replace('href="/', 'href="../', $html);
    $html = str_replace("href='/", "href='../", $html);
    $html = str_replace('src="/IRCI/', 'src="../IRCI/', $html);
    
    file_put_contents($outputDir . '/' . $filename, $html);
    echo " ✅\n";
}

echo "\n✅ Génération terminée !\n";
echo "\n📂 Fichiers générés dans : $outputDir/\n";
echo "\n🎉 Vous pouvez maintenant déployer le dossier 'deploy-static/' sur Netlify !\n\n";
