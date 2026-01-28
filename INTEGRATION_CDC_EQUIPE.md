# 👥 Intégration CDC & Photos Équipe - IRCI

**Date** : 16 janvier 2026  
**Mise à jour** : Contenu selon cahier des charges + Section équipe

---

## 📋 Modifications effectuées

### ✅ Page d'accueil (`templates/home/index.html.twig`)

#### Hero Section enrichie
- **Titre** : "IRCI : Votre partenaire événementiel à taille humaine"
- **Badge** : "Entreprise Familiale"
- **Description longue** selon CDC :
  > Spécialistes de la sonorisation, de la lumière, de la vidéo et de la location de matériel événementiel, 
  > nous accompagnons vos événements professionnels avec une approche humaine, personnalisée et une solide expérience terrain.
- **Icônes prestations** : 5 services visualisés (Son, Lumière, Vidéo, Enregistrement, Location)

#### Nouvelle section "Entreprise Familiale"
- **Photo équipe complète** : Préparée avec placeholder
- **Texte CDC intégré** :
  > Depuis plusieurs années dans le secteur, notre équipe (père et trois fils) met son expertise à votre service.
- **Statistiques** à compléter :
  - [XX] Années d'expérience
  - [XX]+ Clients satisfaits
  - [XX]k Visiteurs accueillis
  - 100% Sur-mesure
- **CTA** : "Rencontrer l'équipe" → vers page À Propos

---

### ✅ Page "À Propos" (`templates/about/index.html.twig`)

#### Section "ADN de l'entreprise"
Texte complet du CDC intégré :

**6 valeurs visuelles** :
1. ✔️ Une relation humaine et directe
2. ✔️ Un accompagnement individualisé
3. ✔️ Une grande réactivité
4. ✔️ Une adaptation à chaque besoin client
5. ✔️ Une expertise terrain solide
6. ✔️ Une approche sur-mesure

**Citation mise en avant** :
> Chaque événement est pensé comme un projet unique, porté par l'expérience et la passion du métier.

#### Section "Notre Équipe" - Refonte complète

**Présentation générale** :
- Texte entreprise familiale (père + 3 fils)
- Approche humaine et personnalisée
- Accompagnement du brief à la clôture

**3 Membres avec fiches détaillées** :

##### 🔴 Membre 1 (Gauche)
- **Photo** : `images/equipe/membre1.jpg` (à découper)
- **Structure prête** :
  - Nom/Prénom
  - Fonction : Responsable Technique
  - Expertise : Son & Sonorisation
  - Présentation courte
  - Citation personnelle

##### 🔴 Membre 2 (Centre) - **François "Coach"** ✅
- **Photo** : `images/equipe/membre2.jpg` (à découper)
- **Données intégrées selon CDC** :
  - Nom : François
  - Surnom : "Coach"
  - Fonction : Responsable Projet
  - Âge : 25 ans
  - Expertise : Accompagnement client
  - Caractère : Patient et agile
  - Point fort : Esprit d'équipe !
  - Citation : "Mon mot d'ordre : Esprit d'équipe !"
- **Badge spécial** : "Coordinateur"
- **Card mise en avant** (bordure rouge)

##### 🔴 Membre 3 (Droite)
- **Photo** : `images/equipe/membre3.jpg` (à découper)
- **Structure prête** :
  - Nom/Prénom
  - Fonction : Expert Lumière & Vidéo
  - Expertise : Éclairage & Captation
  - Présentation courte
  - Citation personnelle

#### Design des fiches équipe
- **Photos circulaires** : 180px avec bordure rouge de 4px
- **Effet hover** : Élévation de la card + ombre rouge
- **Fallback automatique** : Icône utilisateur si photo manquante
- **Style élégant** : Cards Bootstrap personnalisées

---

## 📸 Photos requises

### Format et qualité
- **Dimensions** : 700x700px (carré)
- **Poids max** : 500 Ko par photo
- **Format** : JPEG optimisé
- **Résolution** : 72 dpi (web)

### Fichiers à créer (4 photos)

```
📁 /public/images/equipe/
  ├── membre1.jpg          (personne de GAUCHE sur la photo)
  ├── membre2.jpg          (personne du CENTRE - François)
  ├── membre3.jpg          (personne de DROITE sur la photo)
  └── equipe-complete.jpg  (photo complète des 3)
```

### Découpage de la photo fournie

**Photo originale** : 3 hommes en costumes clairs, nœuds papillons, devant haie verte

**Découpage** :
1. **Membre 1** (gauche) : Homme avec costume gris foncé
2. **Membre 2** (centre) : François "Coach" - Homme avec costume blanc/crème
3. **Membre 3** (droite) : Homme avec costume gris clair

**Consignes** :
- Centrer le visage au milieu de l'image
- Inclure tête + épaules
- Garder le fond végétal pour cohérence
- Format carré obligatoire pour affichage circulaire

**Guide complet** : Voir `GUIDE_PHOTOS_EQUIPE.md`

---

## ✏️ Textes à personnaliser

### Membre 1 (Gauche)

**Fichier** : `templates/about/index.html.twig` - Ligne ~145

```twig
<h3 class="h4 font-bold text-primary-dark mb-2">[Prénom]</h3>
<p class="text-primary-red font-bold mb-3 fs-5">Responsable Technique</p>
```

**À renseigner** :
- Prénom et/ou nom
- Fonction exacte
- Âge (optionnel)
- Années d'expérience
- Domaine d'expertise précis
- Caractère / point fort
- Point faible fun (optionnel)
- Citation personnelle

**Exemple suggéré** :
```
Prénom : Jean-Marc
Fonction : Directeur Technique
Âge : 55 ans
Expertise : Son & Sonorisation depuis 30 ans
Caractère : Perfectionniste et rigoureux
Citation : "Chaque détail compte pour un son parfait."
```

### Membre 3 (Droite)

**Fichier** : `templates/about/index.html.twig` - Ligne ~210

```twig
<h3 class="h4 font-bold text-primary-dark mb-2">[Prénom]</h3>
<p class="text-primary-red font-bold mb-3 fs-5">Expert Lumière & Vidéo</p>
```

**À renseigner** :
- Prénom et/ou nom
- Fonction exacte
- Âge (optionnel)
- Années d'expérience
- Domaine d'expertise précis
- Caractère / point fort
- Point faible fun (optionnel)
- Citation personnelle

**Exemple suggéré** :
```
Prénom : Alexandre
Fonction : Responsable Lumière & Vidéo
Âge : 28 ans
Expertise : Éclairage scénique & Captation HD/4K
Caractère : Créatif et technique
Citation : "La lumière crée l'ambiance, elle fait toute la différence."
```

---

## 📊 Chiffres à mettre à jour

### Page d'accueil - Section "Entreprise Familiale"

**Fichier** : `templates/home/index.html.twig` - Ligne ~100

```twig
<h3 class="h2 font-bold text-primary-red mb-0">[XX]</h3>
<p class="small text-dark-gray mb-0">Années d'expérience</p>
```

**Remplacer les [XX] par** :
- **Années d'expérience** : Nombre depuis création entreprise
- **Clients satisfaits** : Nombre total de clients
- **Visiteurs accueillis** : Cumul visiteurs sur tous les salons
- **100% Sur-mesure** : Déjà OK ✅

**Exemple** :
```
15 Années d'expérience
250+ Clients satisfaits
500k Visiteurs accueillis
100% Sur-mesure
```

---

## 🎨 Design personnalisé

### Palette rouge IRCI
- **Rouge principal** : `#DC143C` - Bordures photos, badges
- **Rouge adouci** : `#E57373` - Hover effects
- **Gris anthracite** : `#2C3E50` - Textes titres
- **Beige chaud** : `#F5E6D3` - Background section famille

### Éléments visuels spéciaux
- **Badge "Coordinateur"** sur François (carte centre)
- **Bordure rouge** autour des photos (4px)
- **Effet hover** : Card s'élève + ombre rouge
- **Icons FontAwesome** : Citations, expertise, valeurs

---

## ✅ Checklist d'intégration

### Contenu CDC
- [x] Titre page d'accueil : "Votre partenaire à taille humaine"
- [x] Description entreprise familiale intégrée
- [x] 6 valeurs affichées avec icônes
- [x] Section équipe avec structure complète
- [x] François "Coach" : toutes infos CDC intégrées
- [x] Citation CDC mise en avant

### Photos à faire
- [ ] Découper la photo en 3 images individuelles
- [ ] Optimiser les 3 photos (< 500 Ko chacune)
- [ ] Créer membre1.jpg, membre2.jpg, membre3.jpg
- [ ] Créer equipe-complete.jpg
- [ ] Placer dans `/public/images/equipe/`

### Textes à personnaliser
- [ ] Nom/prénom Membre 1
- [ ] Infos complètes Membre 1 (selon modèle François)
- [ ] Citation Membre 1
- [ ] Nom/prénom Membre 3
- [ ] Infos complètes Membre 3 (selon modèle François)
- [ ] Citation Membre 3
- [ ] Chiffres statistiques page d'accueil

### Tests
- [ ] Vérifier affichage photos circulaires
- [ ] Tester fallback si photos manquantes
- [ ] Vérifier responsive mobile
- [ ] Tester effets hover sur cards équipe
- [ ] Valider cohérence palette rouge

---

## 🚀 Mise en production

### 1. Ajouter les photos
```bash
cd /home/vagrant/public_html/irci/public/images/equipe/
# Copier vos 4 fichiers jpg ici
```

### 2. Personnaliser les textes
Éditer : `templates/about/index.html.twig`
- Lignes ~145-165 (Membre 1)
- Lignes ~210-230 (Membre 3)

### 3. Mettre à jour les statistiques
Éditer : `templates/home/index.html.twig`
- Lignes ~100-120 (Chiffres)

### 4. Vérifier le rendu
- Page d'accueil : `https://127.0.0.1:8000/`
- Page équipe : `https://127.0.0.1:8000/a-propos`

---

## 📞 Support

**Guides disponibles** :
- `GUIDE_PHOTOS_EQUIPE.md` - Découpage et optimisation photos
- `PALETTE_COULEURS.html` - Guide visuel palette rouge
- `CHANGELOG_DESIGN_SECURITE.md` - Historique modifications

**En cas de besoin** :
- Découpez les photos avec Photopea (gratuit) : https://www.photopea.com/
- Optimisez avec TinyPNG : https://tinypng.com/
- Consultez les guides pour plus de détails

---

## 🎉 Résultat attendu

Une fois terminé, vous aurez :
- ✅ Page d'accueil fidèle au CDC
- ✅ Section équipe familiale complète et professionnelle
- ✅ 3 fiches membres détaillées avec photos
- ✅ François "Coach" mis en avant comme coordinateur
- ✅ Design rouge nuancé et élégant
- ✅ Contenu 100% selon cahier des charges

**Votre site IRCI sera prêt à impressionner vos clients ! 🎊**
