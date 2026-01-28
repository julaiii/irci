# 🚀 Déploiement IRCI - Méthode Simple AVEC ANIMATIONS

## ✅ Assets déjà compilés !

Les animations sont prêtes dans `public/build/` :
- ✅ CSS avec toutes les animations
- ✅ JavaScript scroll-reveal
- ✅ Effets hover
- ✅ Filtres dynamiques

---

## 🎯 SOLUTION RECOMMANDÉE : Hébergement PHP

**Pourquoi ?** Votre site Symfony fonctionnera tel quel avec toutes les animations !

### Option A : 000webhost (Gratuit, PHP, 5 minutes)

1. **Créer un compte** : https://www.000webhost.com
2. **Créer un site web**
3. **Uploader via FTP** (gratuit dans 000webhost)
   - Hôte : `files.000webhost.com`
   - Télécharger FileZilla : https://filezilla-project.org
   
4. **Structure à uploader** :
```
htdocs/
├── .htaccess (créer ce fichier - voir ci-dessous)
├── index.php (de votre dossier public/)
├── build/ (tout le contenu de public/build/)
├── images/ (tout le contenu de public/images/)
└── [autres fichiers de public/]
```

5. **Contenu du fichier `.htaccess`** :
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    
    # Rediriger tout vers index.php
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php [QSA,L]
</IfModule>

# Désactiver l'affichage des erreurs en production
php_flag display_errors off
php_value error_reporting 0
```

6. **Uploader aussi** :
   - Dossier `src/`
   - Dossier `templates/`
   - Dossier `vendor/` (si vous l'avez)
   - Fichiers `composer.json`, `.env` (avec APP_ENV=prod)

---

## 🌐 Alternative : Netlify (Si vous voulez vraiment du statique)

### Étape 1 : Créer un compte Netlify
https://www.netlify.com (gratuit)

### Étape 2 : Créer un fichier `_redirects`

<function_calls>
<invoke name="run_terminal_cmd">
<parameter name="command">cd /home/vagrant/public_html/irci && cat > deploy-static/_redirects << 'EOF'
# Netlify Redirects pour SPA
/*    /index.html   200
EOF
