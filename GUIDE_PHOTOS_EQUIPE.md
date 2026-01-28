# 📸 Guide - Photos de l'Équipe IRCI

## Photo reçue

Vous avez fourni une photo des 3 membres de l'équipe (père et fils) en costumes clairs avec nœuds papillons, devant une haie verte.

---

## 🎯 Objectif

Découper cette photo en 3 images individuelles pour les afficher dans la section "Notre équipe" du site.

---

## 📐 Étapes de découpage

### Option 1 : Découpage manuel (Photoshop, GIMP, etc.)

1. **Ouvrir la photo** dans votre logiciel de retouche
2. **Créer 3 nouveaux fichiers** :
   - `membre1.jpg` (personne de gauche)
   - `membre2.jpg` (personne du centre - François "Coach")
   - `membre3.jpg` (personne de droite)

3. **Dimensions recommandées** :
   - Largeur : 600-800px
   - Hauteur : 600-800px (format carré idéal pour cercle)
   - Résolution : 72 dpi (web)
   - Format : JPEG ou PNG

4. **Cadrage** :
   - Centrer le visage
   - Inclure tête + épaules
   - Laisser un peu d'espace au-dessus de la tête
   - Fond : garder le fond végétal pour cohérence

### Option 2 : Découpage en ligne gratuit

**Outils recommandés** :
- **Photopea** (https://www.photopea.com/) - gratuit, comme Photoshop
- **Canva** (https://www.canva.com/) - version gratuite suffisante
- **Remove.bg** (https://www.remove.bg/) - pour retirer le fond si nécessaire

---

## 📂 Emplacement des fichiers

Une fois les photos découpées, les placer dans :

```
/home/vagrant/public_html/irci/public/images/equipe/
```

### Noms des fichiers requis :

```
membre1.jpg    → Personne de GAUCHE
membre2.jpg    → Personne du CENTRE (François "Coach")
membre3.jpg    → Personne de DROITE
```

**Et aussi** :
```
equipe-complete.jpg → Photo complète des 3 membres (utilisée sur la page d'accueil)
```

---

## 🎨 Recommandations qualité

### Taille des fichiers
- Maximum : 500 Ko par photo
- Compression : Utiliser TinyPNG (https://tinypng.com/) pour optimiser

### Aspect visuel
- **Luminosité** : Bien équilibrée
- **Contraste** : Ajuster pour que les visages ressortent
- **Netteté** : Légère accentuation si nécessaire
- **Couleurs** : Garder les tons naturels

### Format circulaire
Les photos seront affichées en cercle sur le site (CSS `border-radius: 50%`), donc :
- ✅ Privilégier un **format carré** (1:1)
- ✅ Centrer le visage au milieu de l'image
- ✅ Laisser de l'espace autour du visage

---

## 🔄 Après découpage

### 1. Téléverser les fichiers

Via FTP ou ligne de commande :
```bash
cd /home/vagrant/public_html/irci/public/images/equipe/
# Copier vos 4 fichiers ici
```

### 2. Vérifier l'affichage

Le site est configuré pour afficher automatiquement les photos :
- **Page "À Propos"** : `/a-propos` → Photos individuelles en cercle
- **Page "Accueil"** : `/` → Photo complète de l'équipe

### 3. Photos de secours

Si les fichiers n'existent pas encore, des icônes de substitution s'afficheront automatiquement :
- Cercle gris avec icône utilisateur (FontAwesome)
- SVG placeholder pour l'équipe complète

---

## ✏️ Personnalisation des textes

Une fois les photos en place, pensez à personnaliser les textes dans :

**Fichier** : `templates/about/index.html.twig`

### Pour chaque membre, modifier :

```twig
<h3 class="h4 font-bold text-primary-dark mb-2">[Prénom]</h3>
<p class="text-primary-red font-bold mb-3 fs-5">Responsable Technique</p>
```

### Informations à renseigner :

**Membre 1 (Gauche)** :
- Prénom
- Fonction/Rôle
- Âge (optionnel)
- Domaine d'expertise
- Caractère/Points forts
- Citation personnelle

**Membre 2 (Centre)** - François "Coach" :
- ✅ Déjà renseigné selon le CDC
- Responsable Projet, 25 ans
- Expert accompagnement client
- Mot d'ordre : Esprit d'équipe !

**Membre 3 (Droite)** :
- Prénom
- Fonction/Rôle
- Âge (optionnel)
- Domaine d'expertise
- Caractère/Points forts
- Citation personnelle

---

## 📊 Chiffres à mettre à jour

Dans la section "Équipe familiale" de la page d'accueil, remplacer les `[XX]` :

```twig
<h3 class="h2 font-bold text-primary-red mb-0">[XX]</h3>
<p class="small text-dark-gray mb-0">Années d'expérience</p>
```

**Chiffres suggérés** :
- Années d'expérience : nombre d'années depuis la création
- Clients satisfaits : nombre de clients servis
- Visiteurs accueillis : total des visiteurs sur les salons/événements

---

## 🎯 Exemple de découpage réussi

### Membre 1 (Gauche)
```
Dimensions : 700x700px
Poids : 180 Ko
Format : JPG
Nom : membre1.jpg
```

### Membre 2 (Centre - François)
```
Dimensions : 700x700px
Poids : 195 Ko
Format : JPG
Nom : membre2.jpg
```

### Membre 3 (Droite)
```
Dimensions : 700x700px
Poids : 175 Ko
Format : JPG
Nom : membre3.jpg
```

### Photo complète
```
Dimensions : 1200x800px
Poids : 350 Ko
Format : JPG
Nom : equipe-complete.jpg
```

---

## 🆘 Besoin d'aide ?

Si vous avez besoin d'aide pour le découpage ou l'optimisation des photos :

1. **Services en ligne gratuits** :
   - Photopea : édition complète
   - Canva : templates et découpage facile
   - Iloveimg : redimensionnement et optimisation

2. **Alternative** :
   - Envoyez-moi la photo complète en haute résolution
   - Je peux la découper et optimiser pour vous

---

## ✅ Checklist finale

- [ ] Photo découpée en 3 images individuelles
- [ ] Format carré (1:1) pour chaque photo
- [ ] Fichiers optimisés (< 500 Ko chacun)
- [ ] Noms corrects : membre1.jpg, membre2.jpg, membre3.jpg
- [ ] Photo complète : equipe-complete.jpg
- [ ] Fichiers placés dans `/public/images/equipe/`
- [ ] Textes personnalisés dans about/index.html.twig
- [ ] Chiffres mis à jour sur la page d'accueil
- [ ] Test visuel sur le site

---

**Une fois terminé, votre section équipe sera complète et professionnelle ! 🎉**
