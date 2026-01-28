# 🚀 Guide de Déploiement IRCI - AVEC ANIMATIONS

## ✅ VOS ASSETS SONT DÉJÀ COMPILÉS !

Le dossier `public/build/` contient :
- ✅ CSS avec animations
- ✅ JavaScript scroll-reveal  
- ✅ Tous les effets visuels

---

## 🎯 MÉTHODE RECOMMANDÉE : GitHub Pages (Le plus rapide)

### Étape 1 : Créer un dépôt GitHub (SANS Git CLI)

1. Aller sur https://github.com
2. Cliquer sur `+` (en haut à droite) > `New repository`
3. Nom : `irci-site`
4. Cocher `Public`
5. Cliquer `Create repository`

### Étape 2 : Uploader vos fichiers (Drag & Drop)

1. Dans votre nouveau dépôt, cliquer `uploading an existing file`
2. **Glisser-déposer ces dossiers/fichiers** :
   ```
   ✓ build/ (tout le dossier)
   ✓ images/ (tout le dossier)  
   ✓ favicon.ico (si vous en avez un)
   ✓ checklist-client.html
   ```

3. **Créer un fichier `index.html`** (bouton "Create new file") :
   
   Copier-coller ce contenu minimal qui redirige vers votre page d'accueil Symfony :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRCI - Votre partenaire événementiel</title>
    <meta http-equiv="refresh" content="0;url=https://votre-site-symfony.com">
</head>
<body>
    <p>Redirection vers IRCI...</p>
</body>
</html>
```

4. Cliquer `Commit changes`

### Étape 3 : Activer GitHub Pages

1. Dans le dépôt, aller dans `Settings` (onglet)
2. Menu de gauche : `Pages`
3. Source : sélectionner `main` branch
4. Folder : `/` (root)
5. Cliquer `Save`
6. Attendre 2-3 minutes

**Votre site sera sur** : `https://votre-username.github.io/irci-site/`

---

## 🔥 MÉTHODE ALTERNATIVE : Hébergement PHP Gratuit (Site complet fonctionnel)

### Option : InfinityFree (GRATUIT, PHP, MySQL)

**Avantage** : Votre site Symfony fonctionnera tel quel !

#### 1. Créer un compte
https://www.infinityfree.net (100% gratuit)

#### 2. Créer un site
- Sous-domaine gratuit : `irci.epizy.com` (ou autre)
- Attendre validation (2-5 minutes)

#### 3. Télécharger FileZilla
https://filezilla-project.org (client FTP gratuit)

#### 4. Se connecter en FTP

Dans InfinityFree, récupérer :
- Hôte : `ftpupload.net` (ou similar)
- Username : `epiz_XXXXX`
- Mot de passe : (celui que vous avez créé)

Dans FileZilla :
- Hôte : `ftp://ftpupload.net`
- Utilisateur : votre username
- Mot de passe : votre mot de passe
- Port : 21

#### 5. Uploader le site

**À UPLOADER dans le dossier `htdocs/` sur le serveur** :

```
htdocs/
├── index.php (de votre dossier public/)
├── build/ (tout)
├── images/ (tout)
├── .htaccess (créer - voir ci-dessous)
```

**Contenu du fichier `.htaccess`** à créer :

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    
    # Rediriger vers index.php si le fichier n'existe pas
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php [QSA,L]
</IfModule>

# Sécurité
Options -Indexes
php_flag display_errors Off
```

#### 6. Modifier `.env` (IMPORTANT)

Éditer le fichier `.env` dans le dossier `htdocs/` :

```env
APP_ENV=prod
APP_DEBUG=0
```

**Votre site sera accessible sur** : `https://irci.epizy.com` (ou le domaine choisi)

---

## 📦 PACKAGE PRÊT À DÉPLOYER

Un dossier `deploy-static/` a été créé avec :
- ✅ Tous les CSS/JS compilés (avec animations)
- ✅ Toutes les images
- ✅ La checklist client

**Utilisez ce dossier pour uploader !**

---

## 🎨 VÉRIFIER LES ANIMATIONS

Une fois déployé, votre site aura :
- ✅ **Animations scroll-reveal** : Les éléments apparaissent au scroll
- ✅ **Effets hover** : Cartes qui se soulèvent au survol
- ✅ **Flèches animées** : Bounce sur la page d'accueil
- ✅ **Transitions fluides** : Fade-in, slide-in
- ✅ **Filtres dynamiques** : Sur la page catalogue

---

## ⚡ SOLUTION ULTRA-RAPIDE : Netlify Drop

**Pour tester en 30 secondes** :

1. Aller sur https://app.netlify.com/drop
2. Glisser-déposer le dossier `deploy-static/`
3. Site en ligne !

**Note** : Sans serveur PHP, seuls les assets (CSS/JS/images) s'afficheront.
Pour un site complet, utilisez l'hébergement PHP.

---

## 🚨 IMPORTANT - Formulaire de Contact

Sur un hébergement statique (GitHub Pages, Netlify), le formulaire de contact **ne fonctionnera pas** (pas de PHP).

### Solutions :

**Option A** : Remplacer par un lien email
```html
<a href="mailto:contact@irci.fr" class="btn btn-primary-custom">
    Nous contacter
</a>
```

**Option B** : Utiliser Netlify Forms (si déploiement Netlify)
Dans `/templates/contact/index.html.twig`, ajouter :
```html
<form netlify>
```

**Option C** : Hébergement PHP (InfinityFree) → Formulaire fonctionnel !

---

## 📊 RÉCAPITULATIF

| Méthode | Durée | Animations | Formulaire | Gratuit |
|---------|-------|------------|------------|---------|
| **InfinityFree (PHP)** | 15 min | ✅ | ✅ | ✅ |
| **GitHub Pages** | 5 min | ✅ | ❌ | ✅ |
| **Netlify Drop** | 30 sec | ✅ | ⚠️ (avec Forms) | ✅ |

### 🎯 Ma recommandation :

**InfinityFree** si vous voulez que TOUT fonctionne (formulaire inclus).

**Netlify Drop** si vous voulez juste montrer le design rapidement.

---

## 🛠️ FICHIERS PRÊTS POUR VOUS

- ✅ `deploy-static/` : Package avec assets compilés
- ✅ `GUIDE_DEPLOIEMENT_FINAL.md` : Ce guide
- ✅ `checklist-client.html` : Checklist contenus

**Tout est prêt ! Choisissez votre méthode et déployez !** 🚀
