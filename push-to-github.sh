#!/bin/bash

# Script pour pousser vers GitHub avec token
# Usage: ./push-to-github.sh VOTRE_TOKEN

if [ -z "$1" ]; then
    echo "❌ Usage: ./push-to-github.sh VOTRE_TOKEN_GITHUB"
    echo ""
    echo "Pour obtenir un token :"
    echo "1. Aller sur https://github.com/settings/tokens"
    echo "2. Generate new token (classic)"
    echo "3. Cocher 'repo'"
    echo "4. Copier le token"
    exit 1
fi

TOKEN=$1
cd /home/vagrant/public_html/irci

echo "🚀 Push vers GitHub..."
echo "📦 Dépôt: https://github.com/julaiii/irci.git"
echo "🌿 Branche: main"
echo ""

# Pousser avec le token dans l'URL
git push https://${TOKEN}@github.com/julaiii/irci.git main

if [ $? -eq 0 ]; then
    echo ""
    echo "✅ Push réussi !"
    echo "🌐 Voir sur: https://github.com/julaiii/irci"
else
    echo ""
    echo "❌ Erreur lors du push"
    exit 1
fi
