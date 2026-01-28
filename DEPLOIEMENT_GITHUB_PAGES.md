# 🚀 Déploiement IRCI sur GitHub Pages

## Option 1 : Export HTML Statique vers GitHub Pages

### Étape 1 : Générer les pages HTML statiques

```bash
cd /home/vagrant/public_html/irci

# Créer un dossier pour l'export
mkdir -p export-static

# Générer les pages principales (vous devrez les sauvegarder manuellement)
# Ouvrir chaque page dans le navigateur et "Enregistrer sous" en HTML complet
```

### Étape 2 : Créer un dépôt GitHub

1. Aller sur https://github.com
2. Cliquer sur "New repository"
3. Nom : `irci-demo` ou `irci-vitrine`
4. Cocher "Public"
5. Cliquer "Create repository"

### Étape 3 : Upload via GitHub Web Interface (SANS GIT)

**Méthode A : Drag & Drop direct**
1. Aller dans votre dépôt sur GitHub
2. Cliquer "Add file" > "Upload files"
3. Glisser-déposer tous vos fichiers HTML/CSS/JS/images
4. Cliquer "Commit changes"

**Méthode B : ZIP Upload**
1. Compresser le dossier `public/` en ZIP
2. Uploader le ZIP sur GitHub
3. Décompresser dans le dépôt

### Étape 4 : Activer GitHub Pages

1. Dans le dépôt, aller dans "Settings"
2. Menu de gauche : "Pages"
3. Source : sélectionner "main" branch
4. Folder : sélectionner "/ (root)" ou "/docs" selon où sont vos fichiers
5. Cliquer "Save"
6. Attendre 2-3 minutes

**Votre site sera accessible sur :** `https://votre-username.github.io/irci-demo/`

---

## Option 2 : Hébergement PHP Gratuit (Site Symfony complet)

### Sites d'hébergement gratuits recommandés :

1. **InfinityFree** (recommandé)
   - URL : https://infinityfree.net
   - PHP 8.x, MySQL, 5 Go
   - FTP inclus
   - Pas de publicité

2. **000webhost**
   - URL : https://www.000webhost.com
   - PHP 8.x, MySQL, 1 Go
   - Constructeur de site + FTP

3. **Hostinger Free** (limité)
   - URL : https://www.hostinger.fr

### Étape 1 : Créer un compte sur InfinityFree

1. Aller sur https://infinityfree.net
2. Cliquer "Sign Up" (gratuit)
3. Créer un compte
4. Créer un nouveau site web
5. Choisir un sous-domaine gratuit (ex: irci-demo.epizy.com)

### Étape 2 : Obtenir les accès FTP

Dans le panneau de contrôle InfinityFree :
- Hôte FTP : `ftp.votresite.epizy.com`
- Nom d'utilisateur : `epiz_XXXXXXXX`
- Mot de passe : (celui que vous avez défini)

### Étape 3 : Uploader via FTP

**Logiciel recommandé : FileZilla (gratuit)**

1. Télécharger FileZilla : https://filezilla-project.org
2. Installer et ouvrir
3. Connexion :
   - Hôte : `ftp.votresite.epizy.com`
   - Utilisateur : votre username
   - Mot de passe : votre mot de passe
   - Port : 21

4. Uploader le contenu de `/home/vagrant/public_html/irci/` dans le dossier `htdocs/` du serveur

### Étape 4 : Configuration Symfony pour production

**Modifier le fichier `.env` avant upload :**

```env
APP_ENV=prod
APP_DEBUG=0
DATABASE_URL="mysql://user:pass@host:3306/dbname"
```

**Fichier .htaccess pour le dossier `public/` :**

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php [QSA,L]
</IfModule>
```

---

## Option 3 : Netlify (Export Statique) - LE PLUS SIMPLE

### Avantage : Drag & Drop, 0 config, SSL gratuit

### Étape 1 : Créer un compte Netlify
1. Aller sur https://www.netlify.com
2. S'inscrire gratuitement (avec GitHub si vous voulez)

### Étape 2 : Préparer les fichiers statiques
```bash
cd /home/vagrant/public_html/irci
mkdir netlify-deploy
cp -r public/* netlify-deploy/
```

### Étape 3 : Deploy
1. Sur Netlify, cliquer "Add new site" > "Deploy manually"
2. **Glisser-déposer** le dossier `netlify-deploy/`
3. Attendre 30 secondes
4. Votre site est en ligne avec une URL type : `random-name-123.netlify.app`

### Étape 4 : Personnaliser l'URL
1. Dans les settings du site
2. "Change site name"
3. Mettre : `irci-demo` → devient `irci-demo.netlify.app`

---

## 🎯 QUELLE OPTION CHOISIR ?

### Pour une DÉMO rapide (HTML statique uniquement)
✅ **NETLIFY** (le plus simple, 2 minutes)
- Drag & drop
- SSL automatique
- URL propre

### Pour montrer le site avec quelques fonctionnalités
✅ **InfinityFree + FTP** (10 minutes)
- Site Symfony complet
- Pas de formulaire BDD nécessaire
- Hébergement PHP réel

### Pour un dépôt GitHub (code source)
✅ **GitHub Pages** (5 minutes)
- Bon pour montrer le code
- Nécessite export HTML statique manuel

---

## 🔥 MA RECOMMANDATION : NETLIFY

**C'est le plus rapide et sans configuration :**

1. Compte Netlify (2 min)
2. Copier le dossier `public/` (30 sec)
3. Drag & drop sur Netlify (30 sec)
4. Site en ligne avec SSL (30 sec)

**Total : 3-4 minutes** ⏱️

URL finale : `https://irci-demo.netlify.app`

---

## 📧 Désactiver le formulaire de contact

Si vous utilisez **Netlify ou GitHub Pages**, le formulaire ne fonctionnera pas (pas de PHP).

### Option A : Rediriger vers email
Remplacer le formulaire par un simple lien email :

```html
<a href="mailto:contact@irci.fr" class="btn btn-primary-custom btn-lg">
    <i class="fas fa-envelope me-2"></i>Nous contacter par email
</a>
```

### Option B : Utiliser un formulaire Netlify Forms (gratuit)
Dans `/templates/contact/index.html.twig`, ajouter l'attribut `netlify` :

```html
<form name="contact" method="POST" netlify>
    <!-- vos champs -->
</form>
```

Netlify capturera automatiquement les soumissions !

---

## 🚀 COMMANDE RAPIDE POUR NETLIFY

```bash
# 1. Préparer les fichiers
cd /home/vagrant/public_html/irci
mkdir -p netlify-deploy
cp -r public/* netlify-deploy/

# 2. Créer une archive pour upload
cd netlify-deploy
zip -r ../irci-netlify.zip .

# Le fichier irci-netlify.zip est prêt à uploader sur Netlify !
```

Ensuite : Drag & drop sur https://app.netlify.com/drop

**C'est tout !** ✅
