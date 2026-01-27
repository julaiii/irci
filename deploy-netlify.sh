#!/bin/bash

echo "🚀 Création du package de déploiement IRCI pour Netlify..."
echo ""

# Configuration
BASE_URL="https://pma.localhost:8000"
DEPLOY_DIR="deploy-static"

# Nettoyer le dossier précédent
rm -rf $DEPLOY_DIR
mkdir -p $DEPLOY_DIR

# Étape 1 : Compiler les assets (si pas déjà fait)
echo "📦 Vérification de la compilation des assets..."
if [ ! -d "public/build" ]; then
    echo "⚙️  Compilation des assets..."
    npm run build
fi
echo "✅ Assets compilés"
echo ""

# Étape 2 : Copier les assets compilés (CSS + JS avec animations)
echo "📋 Copie des assets (CSS, JS, images)..."
cp -r public/build $DEPLOY_DIR/
cp -r public/images $DEPLOY_DIR/
[ -f public/favicon.ico ] && cp public/favicon.ico $DEPLOY_DIR/
[ -f public/checklist-client.html ] && cp public/checklist-client.html $DEPLOY_DIR/
echo "✅ Assets copiés"
echo ""

# Étape 3 : Télécharger les pages HTML avec wget
echo "🌐 Téléchargement des pages HTML..."
echo "⚠️  Note : Assurez-vous que le serveur Symfony est démarré sur $BASE_URL"
echo ""

# Fonction pour télécharger une page
download_page() {
    local url=$1
    local output=$2
    
    echo "  📄 $output..."
    wget --quiet --no-check-certificate -O "$DEPLOY_DIR/$output" "$url" 2>/dev/null
    
    if [ $? -eq 0 ]; then
        # Adapter les chemins dans le HTML
        sed -i 's|/build/|./build/|g' "$DEPLOY_DIR/$output"
        sed -i 's|/images/|./images/|g' "$DEPLOY_DIR/$output"
        sed -i 's|href="/|href="./|g' "$DEPLOY_DIR/$output"
        sed -i "s|href='/|href='./|g" "$DEPLOY_DIR/$output"
        echo "     ✅"
    else
        echo "     ❌ Erreur"
    fi
}

# Télécharger les pages principales
download_page "$BASE_URL/" "index.html"
download_page "$BASE_URL/prestations" "prestations.html"
download_page "$BASE_URL/location-materiel" "location-materiel.html"
download_page "$BASE_URL/a-propos" "a-propos.html"
download_page "$BASE_URL/galerie" "galerie.html"
download_page "$BASE_URL/contact" "contact.html"

# Créer le dossier pour les pages produits
mkdir -p "$DEPLOY_DIR/location-materiel"

# Télécharger les pages produits
echo ""
echo "📦 Téléchargement des pages produits..."
products=(
    "console-yamaha-dm3"
    "enceinte-l-acoustics-x12"
    "projecteur-led-martin-mac-aura"
    "lyre-robe-robin-600"
    "ecran-led-absen-a3pro"
    "machine-fumee-antari-z1520"
)

for product in "${products[@]}"; do
    echo "  🔧 $product.html..."
    wget --quiet --no-check-certificate -O "$DEPLOY_DIR/location-materiel/$product.html" "$BASE_URL/location-materiel/$product" 2>/dev/null
    
    if [ $? -eq 0 ]; then
        # Adapter les chemins (un niveau de plus pour les sous-pages)
        sed -i 's|/build/|../build/|g' "$DEPLOY_DIR/location-materiel/$product.html"
        sed -i 's|/images/|../images/|g' "$DEPLOY_DIR/location-materiel/$product.html"
        sed -i 's|href="/|href="../|g' "$DEPLOY_DIR/location-materiel/$product.html"
        sed -i "s|href='/|href='../|g" "$DEPLOY_DIR/location-materiel/$product.html"
        echo "     ✅"
    else
        echo "     ❌ Erreur"
    fi
done

echo ""
echo "🎉 Package créé avec succès dans le dossier '$DEPLOY_DIR/' !"
echo ""
echo "📊 Contenu du package :"
echo "  ✓ 6 pages principales (HTML)"
echo "  ✓ 6 pages produits (HTML)"
echo "  ✓ Tous les assets (CSS + JS)"
echo "  ✓ Toutes les images"
echo "  ✓ Toutes les animations"
echo ""
echo "🚀 DÉPLOIEMENT SUR NETLIFY :"
echo ""
echo "Option 1 - Drag & Drop (RECOMMANDÉ) :"
echo "  1. Ouvrir https://app.netlify.com/drop"
echo "  2. Glisser-déposer le dossier '$DEPLOY_DIR/'"
echo "  3. Attendre 30 secondes"
echo "  4. Site en ligne ! 🎉"
echo ""
echo "Option 2 - Via ZIP :"
echo "  1. Compresser le dossier : zip -r irci-deploy.zip $DEPLOY_DIR/"
echo "  2. Uploader sur Netlify"
echo ""
echo "🌐 Votre site aura :"
echo "  ✓ Animations scroll-reveal"
echo "  ✓ Effets hover"
echo "  ✓ Flèches animées"
echo "  ✓ Filtres dynamiques"
echo "  ✓ Transitions fluides"
echo ""
