#!/bin/bash

echo "🚀 Préparation du déploiement statique IRCI avec animations..."

# Créer le dossier de déploiement
rm -rf deploy-static
mkdir -p deploy-static

# Copier tous les assets compilés (CSS + JS avec animations)
echo "📦 Copie des assets (CSS + JS avec animations)..."
cp -r public/build deploy-static/

# Copier les images
echo "🖼️  Copie des images..."
cp -r public/images deploy-static/

# Copier le favicon
echo "🎨 Copie du favicon..."
cp public/favicon.ico deploy-static/ 2>/dev/null || echo "Pas de favicon"

# Copier la checklist client
echo "📋 Copie de la checklist client..."
cp public/checklist-client.html deploy-static/ 2>/dev/null || echo "Pas de checklist"

echo ""
echo "✅ Package prêt dans le dossier 'deploy-static/'"
echo ""
echo "📌 PROCHAINES ÉTAPES :"
echo ""
echo "Pour Netlify (RECOMMANDÉ - avec animations) :"
echo "1. Aller sur https://app.netlify.com/drop"
echo "2. Glisser-déposer le dossier 'deploy-static/' complet"
echo "3. Attendre 30 secondes"
echo "4. Votre site est en ligne avec toutes les animations ! 🎉"
echo ""
echo "Pour GitHub (alternative) :"
echo "1. Créer un repo sur GitHub"
echo "2. Uploader le contenu de 'deploy-static/'"
echo "3. Activer GitHub Pages dans Settings > Pages"
echo ""
echo "🌐 Le site inclura :"
echo "  ✓ Toutes les animations scroll-reveal"
echo "  ✓ Effets hover sur les cartes"
echo "  ✓ Flèches animées"
echo "  ✓ Transitions fluides"
echo "  ✓ Filtres dynamiques (catalogue)"
echo ""
