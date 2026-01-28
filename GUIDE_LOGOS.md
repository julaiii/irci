# 🎨 Guide - Logos IRCI

## Logo fourni

Vous avez fourni le logo IRCI :
- **Design** : "IRCI" en noir avec deux points rouges (haut gauche et bas droite)
- **Fond** : Blanc
- **Style** : Minimaliste et professionnel

---

## 📁 Fichiers logo requis

### 1. Logo standard (fond blanc)
**Fichier** : `logo-irci.png`  
**Emplacement** : `/public/images/logo-irci.png`  
**Usage** : Navigation, headers, pages à fond clair

**Spécifications** :
- Format : PNG avec transparence
- Dimensions : 200x80px (ou ratio équivalent)
- Résolution : 72 dpi (web)
- Poids : < 50 Ko
- Fond : Transparent ou blanc

### 2. Logo version blanche (pour fond sombre)
**Fichier** : `logo-irci-white.png`  
**Emplacement** : `/public/images/logo-irci-white.png`  
**Usage** : Footer (fond sombre), headers sombres

**Spécifications** :
- Format : PNG avec transparence
- Dimensions : 200x80px (ou ratio équivalent)
- Couleur texte : Blanc
- Points : Rouge (#DC143C) ou blanc
- Fond : Transparent
- Poids : < 50 Ko

### 3. Favicon (optionnel mais recommandé)
**Fichier** : `favicon.ico`  
**Emplacement** : `/public/favicon.ico`  
**Usage** : Onglet navigateur, favoris

**Spécifications** :
- Format : ICO (multi-tailles)
- Tailles : 16x16, 32x32, 48x48px
- Design : Version simplifiée du logo ou juste les points rouges

---

## 🎨 Préparation des logos

### Option 1 : Extraction depuis le logo fourni

**Outil recommandé** : Photoshop, GIMP, ou Photopea (gratuit)

#### Logo standard :
1. Ouvrir le logo fourni
2. Sélectionner l'image (sans bordures)
3. Exporter en PNG avec transparence
4. Dimensions : Largeur 200px, hauteur auto
5. Nom : `logo-irci.png`

#### Logo blanc :
1. Dupliquer le logo standard
2. Changer couleur du texte "IRCI" en blanc (#FFFFFF)
3. Garder les points rouges (#DC143C)
4. OU tout en blanc si préféré
5. Exporter PNG avec transparence
6. Nom : `logo-irci-white.png`

### Option 2 : Outils en ligne gratuits

**Conversion & Optimisation** :
- **TinyPNG** (https://tinypng.com/) - Compression PNG
- **Favicon Generator** (https://favicon.io/) - Création favicon
- **Remove.bg** (https://www.remove.bg/) - Retirer fond si besoin

**Création version blanche** :
- **Photopea** (https://www.photopea.com/)
  1. Ouvrir le logo
  2. Image > Adjustments > Hue/Saturation
  3. Lightness : +100 pour le texte
  4. Sauvegarder PNG

---

## 📂 Structure des fichiers

```
public/
├── images/
│   ├── logo-irci.png              ✅ Logo standard
│   ├── logo-irci-white.png        ✅ Logo blanc (footer)
│   └── equipe/
│       ├── membre1.jpg
│       ├── membre2.jpg
│       ├── membre3.jpg
│       └── equipe-complete.jpg
└── favicon.ico                    ⭐ Favicon (optionnel)
```

---

## 🔧 Utilisation dans le code

### Navigation (Header)
**Fichier** : `templates/base.html.twig` - Ligne ~34

```twig
<img src="{{ asset('images/logo-irci.png') }}" 
     alt="Logo IRCI" 
     height="35" 
     class="me-2">
```

**Hauteur** : 35px (ajustable selon besoins)

### Footer
**Fichier** : `templates/base.html.twig` - Ligne ~111

```twig
<img src="{{ asset('images/logo-irci-white.png') }}" 
     alt="Logo IRCI" 
     height="30" 
     class="me-2">
```

**Hauteur** : 30px (ajustable selon besoins)

### Fallback automatique
Si le logo n'existe pas, le système affiche automatiquement :
- **Navigation** : Icône point rouge + texte "IRCI"
- **Footer** : Texte "IRCI" seul

---

## 📐 Dimensions recommandées

### Logo principal
| Usage | Largeur | Hauteur | Ratio |
|-------|---------|---------|-------|
| Navigation | 200px | 80px | 2.5:1 |
| Footer | 180px | 72px | 2.5:1 |
| Header pages | 250px | 100px | 2.5:1 |

**Note** : Adaptez selon votre logo réel

### Favicon
| Taille | Usage |
|--------|-------|
| 16x16 | Onglet navigateur |
| 32x32 | Raccourci bureau |
| 48x48 | Windows |
| 180x180 | Apple Touch Icon |

---

## 🎨 Recommandations design

### Logo standard (fond clair)
- Texte "IRCI" : Noir (#000000) ou gris foncé (#2C3E50)
- Points : Rouge IRCI (#DC143C)
- Fond : Transparent
- Bordure : Aucune

### Logo blanc (fond sombre)
- Texte "IRCI" : Blanc (#FFFFFF)
- Points : Rouge IRCI (#DC143C) ou blanc
- Fond : Transparent
- Bordure : Aucune

### Qualité
- **Format vectoriel** si possible (SVG) pour netteté parfaite
- **PNG haute résolution** (2x) pour écrans Retina
- **Compression optimisée** avec TinyPNG

---

## 📝 Variantes de logo (optionnel)

### Logo carré (réseaux sociaux)
**Dimensions** : 1000x1000px  
**Usage** : Facebook, Instagram, LinkedIn  
**Contenu** : Logo IRCI centré ou icône stylisée

### Logo horizontal (signatures emails)
**Dimensions** : 600x200px  
**Usage** : Signatures emails, bannières  
**Contenu** : Logo + slogan si besoin

### Logo vertical (documents)
**Dimensions** : 400x600px  
**Usage** : Devis, factures, documents PDF  
**Contenu** : Logo + coordonnées

---

## ✅ Checklist d'intégration

### Fichiers logo
- [ ] Logo standard créé (`logo-irci.png`)
- [ ] Logo blanc créé (`logo-irci-white.png`)
- [ ] Fichiers optimisés (< 50 Ko chacun)
- [ ] Transparence activée (PNG)
- [ ] Dimensions correctes (ratio 2.5:1)

### Placement fichiers
- [ ] Logo standard → `/public/images/logo-irci.png`
- [ ] Logo blanc → `/public/images/logo-irci-white.png`
- [ ] Favicon → `/public/favicon.ico` (optionnel)

### Vérification
- [ ] Logo visible dans navigation
- [ ] Logo visible dans footer
- [ ] Hauteur adaptée (35px nav, 30px footer)
- [ ] Fallback fonctionne si logo manquant
- [ ] Affichage correct sur mobile

### SEO
- [ ] Attribut `alt="Logo IRCI"` présent
- [ ] Favicon configuré
- [ ] Logo référencé dans meta Open Graph

---

## 🔍 Où trouver le logo

### Si vous n'avez pas le logo en fichier numérique

**Option 1** : Scanner/Photographier
- Prenez une photo haute résolution
- Détourez avec Remove.bg
- Optimisez avec Photopea

**Option 2** : Recréer
- Utilisez Canva ou Figma
- Police similaire pour "IRCI"
- Ajoutez 2 cercles rouges (#DC143C)
- Exportez PNG transparent

**Option 3** : Demander au graphiste
- Si vous avez un graphiste, demandez :
  - Logo PNG transparent
  - Logo version blanche
  - Fichier source (AI, SVG, PSD)
  - Favicon multi-tailles

---

## 🎯 Résultat attendu

### Navigation (Header)
```
┌────────────────────────────────────┐
│  [Logo] IRCI    Accueil Prestations│
└────────────────────────────────────┘
```
- Logo de 35px de haut
- Aligné verticalement avec le texte
- Marge de 8px à droite (me-2)

### Footer
```
┌────────────────────────────────────┐
│  [Logo blanc] IRCI                 │
│  Prestataire événementiel...       │
└────────────────────────────────────┘
```
- Logo de 30px de haut
- Version blanche pour contraste
- Aligné avec le titre

---

## 💡 Conseils

### Qualité
- Privilégiez toujours la **haute résolution**
- Utilisez **PNG avec transparence** (pas JPEG)
- **Testez sur fond blanc ET fond foncé**

### Performance
- Compressez avec TinyPNG avant upload
- Visez < 50 Ko par logo
- Utilisez le format WebP si navigateurs supportés

### Accessibilité
- Texte alternatif descriptif : `alt="Logo IRCI"`
- Contraste suffisant (WCAG AA)
- Taille minimum 30px pour lisibilité

---

## 🆘 Problème ?

### Logo pixelisé
→ Augmentez la résolution d'origine (min 200px largeur)

### Logo trop grand/petit
→ Ajustez l'attribut `height=""` dans les templates

### Logo ne s'affiche pas
→ Vérifiez le chemin : `/public/images/logo-irci.png`  
→ Vérifiez les permissions fichier (644)

### Logo mal aligné
→ Ajoutez CSS : `vertical-align: middle;`

---

## 📞 Support

**Fichiers de code modifiés** :
- `templates/base.html.twig` (navigation + footer)

**Outils recommandés** :
- Photopea : https://www.photopea.com/ (édition)
- TinyPNG : https://tinypng.com/ (compression)
- Favicon.io : https://favicon.io/ (favicon)

---

**Une fois les logos en place, votre site IRCI aura une identité visuelle complète ! 🎨**
