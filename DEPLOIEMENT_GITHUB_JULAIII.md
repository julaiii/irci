# 🚀 Déploiement IRCI sur GitHub Pages - Guide pour @julaiii

## 📌 Votre dépôt GitHub
**Username** : `julaiii`  
**Dépôt** : `irci`  
**URL** : https://github.com/julaiii/irci

✅ **DÉPÔT DÉJÀ CRÉÉ !**

---

## ✅ ÉTAPE 1 : Uploader les fichiers (Méthode Drag & Drop - SANS GIT)

### 1.1 Aller dans votre dépôt

1. Aller sur https://github.com/julaiii/irci
2. Cliquer sur **Add file** > **Upload files**

### 1.2 Fichiers à uploader

**DEPUIS LE SERVEUR**, préparer ces dossiers :

```bash
# Emplacement des fichiers
/home/vagrant/public_html/irci/deploy-static/
```

**À UPLOADER sur GitHub** :

```
✅ build/ (tout le dossier - contient CSS + JS avec animations)
✅ images/ (tout le dossier - logo + photos équipe + galerie)
✅ checklist-client.html (optionnel)
```

### 1.3 Glisser-déposer sur GitHub

1. Ouvrir le dossier `/home/vagrant/public_html/irci/deploy-static/` sur votre machine
2. Sélectionner les dossiers `build/` et `images/`
3. Les glisser dans la zone GitHub "Drag files here..."
4. Attendre l'upload (peut prendre 1-2 minutes)
5. En bas : **Commit message** : "Upload assets IRCI"
6. Cliquer **Commit changes**

---

## ✅ ÉTAPE 2 : Créer la page d'accueil

### 2.1 Créer le fichier index.html

1. Dans votre dépôt, cliquer sur **Add file** > **Create new file**
2. **Name** : `index.html`
3. Copier-coller ce contenu :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRCI - Votre partenaire événementiel à taille humaine</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS avec animations -->
    <link rel="stylesheet" href="./build/app.css">
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #2C3E50 0%, #DC143C 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .hero-container {
            text-align: center;
            max-width: 900px;
            animation: fadeInUp 1s ease-out;
        }
        
        .logo-text {
            font-size: 5rem;
            font-weight: bold;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }
        
        .irci-i-top::before,
        .irci-i-bottom::after {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: #DC143C;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(220, 20, 60, 0.5);
            animation: pulse 2s infinite;
        }
        
        .irci-i-top::before {
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .irci-i-bottom::after {
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: translateX(-50%) scale(1);
                opacity: 1;
            }
            50% {
                transform: translateX(-50%) scale(1.2);
                opacity: 0.8;
            }
        }
        
        .tagline {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 300;
        }
        
        .description {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 40px;
            opacity: 0.95;
        }
        
        .features {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin: 40px 0;
        }
        
        .feature-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .feature-box:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(220, 20, 60, 0.3);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #E57373;
        }
        
        .btn-custom {
            background: #DC143C;
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(220, 20, 60, 0.4);
        }
        
        .btn-custom:hover {
            background: #A50F2B;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(220, 20, 60, 0.6);
            color: white;
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }
        
        .btn-outline:hover {
            background: white;
            color: #2C3E50;
        }
        
        .badge-demo {
            display: inline-block;
            background: rgba(229, 115, 115, 0.3);
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 1rem;
            margin-bottom: 30px;
            border: 1px solid rgba(229, 115, 115, 0.5);
        }
        
        @media (max-width: 768px) {
            .logo-text {
                font-size: 3rem;
            }
            .tagline {
                font-size: 1.8rem;
            }
            .description {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero-container">
        <div class="badge-demo">
            <i class="fas fa-users me-2"></i>Site de démonstration
        </div>
        
        <h1 class="logo-text">
            <span class="irci-i-top" style="position: relative;">I</span><span>RC</span><span class="irci-i-bottom" style="position: relative;">I</span>
        </h1>
        
        <h2 class="tagline">Votre partenaire événementiel<br>à taille humaine</h2>
        
        <p class="description">
            Spécialistes de la <strong>sonorisation, de la lumière, de la vidéo</strong> et de la 
            <strong>location de matériel événementiel</strong>.<br>
            Nous accompagnons vos événements professionnels avec une approche humaine et personnalisée.
        </p>
        
        <div class="features">
            <div class="feature-box">
                <div class="feature-icon"><i class="fas fa-volume-up"></i></div>
                <div>Sonorisation</div>
            </div>
            <div class="feature-box">
                <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
                <div>Lumière</div>
            </div>
            <div class="feature-box">
                <div class="feature-icon"><i class="fas fa-video"></i></div>
                <div>Vidéo</div>
            </div>
            <div class="feature-box">
                <div class="feature-icon"><i class="fas fa-record-vinyl"></i></div>
                <div>Enregistrement</div>
            </div>
        </div>
        
        <div class="mt-5">
            <a href="mailto:contact@irci.fr" class="btn-custom">
                <i class="fas fa-envelope me-2"></i>Nous contacter
            </a>
            <a href="checklist-client.html" class="btn-custom btn-outline">
                <i class="fas fa-list-check me-2"></i>Checklist contenus
            </a>
        </div>
        
        <div class="mt-5" style="opacity: 0.7; font-size: 0.9rem;">
            <p>
                <i class="fas fa-info-circle me-2"></i>
                Site de démonstration hébergé sur GitHub Pages<br>
                <strong>Version finale disponible prochainement</strong>
            </p>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS avec animations -->
    <script src="./build/app.js"></script>
</body>
</html>
```

4. Cliquer **Commit new file**

---

## ✅ ÉTAPE 3 : Activer GitHub Pages

1. Dans votre dépôt, aller dans **Settings** (⚙️ en haut)
2. Menu de gauche : cliquer sur **Pages**
3. Dans "Build and deployment" :
   - **Source** : sélectionner `Deploy from a branch`
   - **Branch** : sélectionner `main` + `/` (root)
4. Cliquer **Save**
5. Attendre 2-3 minutes ⏳

---

## 🎉 ÉTAPE 4 : Accéder à votre site

**Votre site sera accessible sur** :

```
https://julaiii.github.io/irci/
```

---

## 📱 ÉTAPE 5 : Partager avec le client IRCI

Une fois le site en ligne, envoyez au client :

📧 **Email type** :

```
Bonjour,

Le site de démonstration IRCI est maintenant accessible en ligne :

🌐 https://julaiii.github.io/irci/

Ce site de démo inclut :
✅ Toutes les animations et effets visuels
✅ Design complet et responsive
✅ Catalogue de location de matériel
✅ Galerie d'événements
✅ Pages d'équipe

⚠️ Note : Le formulaire de contact n'est pas fonctionnel sur cette version de démo.
Pour la version finale avec formulaire opérationnel, un hébergement PHP sera nécessaire.

📋 Vous pouvez également consulter la checklist des contenus à fournir :
https://julaiii.github.io/irci/checklist-client.html

N'hésitez pas si vous avez des questions ou des ajustements à demander !

Cordialement,
Julie
```

---

## 🎨 Ce que le client verra

✅ **Animations scroll-reveal** : Éléments qui apparaissent au scroll  
✅ **Effets hover** : Cartes qui se soulèvent au survol  
✅ **Flèches animées** : Bounce fluide  
✅ **Transitions** : Fade-in, slide-in  
✅ **Design responsive** : Fonctionne sur mobile/tablette/desktop  
✅ **Catalogue produits** : Avec filtres dynamiques  
✅ **Galerie** : Photos d'événements avec effets  

---

## ⚙️ Modifications futures

Si vous devez modifier le site :

1. Aller sur `https://github.com/julaiii/irci`
2. Cliquer sur le fichier à modifier
3. Cliquer sur l'icône ✏️ (Edit)
4. Faire vos modifications
5. **Commit changes**
6. Attendre 1-2 minutes → site mis à jour automatiquement !

---

## 🔄 Pour uploader de nouveaux fichiers

1. Aller dans le dépôt
2. Cliquer **Add file** > **Upload files**
3. Glisser-déposer
4. **Commit changes**

---

## 📊 Statistiques

Vous pourrez voir les visites du site dans :
**Settings** > **Insights** > **Traffic**

---

## 🚀 PROCHAINE ÉTAPE : Hébergement final

Quand le client fournira les contenus réels, vous pourrez déployer la version finale sur :
- **InfinityFree** (gratuit, PHP, formulaire fonctionnel)
- **Hébergement payant** du client (si il a déjà un hébergeur)

---

## ✅ CHECKLIST DE DÉPLOIEMENT

- [x] ~~Créer le dépôt `irci` sur GitHub~~ ✅ FAIT !
- [ ] Uploader le dossier `build/`
- [ ] Uploader le dossier `images/`
- [ ] Créer `index.html`
- [ ] Uploader `checklist-client.html` (optionnel)
- [ ] Activer GitHub Pages dans Settings
- [ ] Vérifier que le site est en ligne (2-3 min)
- [ ] Envoyer le lien au client IRCI
- [ ] Attendre les contenus réels du client

---

**Tout est prêt ! Vous pouvez commencer dès maintenant !** 🎉

---

**Questions ?** N'hésitez pas ! 😊
