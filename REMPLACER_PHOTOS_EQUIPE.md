# 📸 Guide - Remplacer les Photos de l'Équipe

**Date** : 16 janvier 2026  
**Status** : Placeholders SVG créés ✅ → À remplacer par vraies photos

---

## ✅ Placeholders créés (Temporaires)

### 4 fichiers SVG générés dans `/public/images/equipe/` :

```
📁 /public/images/equipe/
  ├── 📄 membre1.svg          (Placeholder personne gauche)
  ├── 📄 membre2.svg          (Placeholder François "Coach")
  ├── 📄 membre3.svg          (Placeholder personne droite)
  └── 📄 equipe-complete.svg  (Placeholder équipe complète)
```

**Design des placeholders** :
- Silhouettes simples
- Couleurs IRCI (rouge, gris, beige)
- Badge "COACH" pour François
- Texte de repérage ("MEMBRE 1", "FRANÇOIS", etc.)

---

## 📸 Photo fournie à découper

Vous avez fourni une photo avec **3 membres** en costumes clairs :
- **Gauche** : Homme avec costume gris foncé
- **Centre** : François "Coach" avec costume blanc/crème
- **Droite** : Homme avec costume gris clair

**Fond** : Haie verte

---

## 🔪 Découpage à effectuer

### Étape 1 : Ouvrir la photo

Utilisez un outil de retouche photo :
- **Photopea** (gratuit) : https://www.photopea.com/
- **GIMP** (gratuit)
- **Photoshop** (payant)
- **Canva** (freemium)

### Étape 2 : Découper les 3 membres

#### Photo 1 - Membre gauche
1. Sélectionner la personne de **GAUCHE**
2. Cadrage : Tête + épaules
3. Centrer le visage au milieu
4. Exporter en **format carré** (700x700px)
5. Enregistrer sous : `membre1.jpg`

#### Photo 2 - François (centre)
1. Sélectionner la personne du **CENTRE**
2. Cadrage : Tête + épaules
3. Centrer le visage au milieu
4. Exporter en **format carré** (700x700px)
5. Enregistrer sous : `membre2.jpg`

#### Photo 3 - Membre droite
1. Sélectionner la personne de **DROITE**
2. Cadrage : Tête + épaules
3. Centrer le visage au milieu
4. Exporter en **format carré** (700x700px)
5. Enregistrer sous : `membre3.jpg`

### Étape 3 : Photo complète

1. Prendre la photo **complète** des 3 membres
2. Recadrer si nécessaire (garder les 3 personnes)
3. Format : **1200x800px** (paysage)
4. Enregistrer sous : `equipe-complete.jpg`

---

## 📐 Spécifications techniques

### Photos individuelles (membre1, membre2, membre3)

| Paramètre | Valeur |
|-----------|--------|
| Format | JPEG ou PNG |
| Dimensions | 700x700px (carré) |
| Ratio | 1:1 |
| Résolution | 72 dpi (web) |
| Poids max | 500 Ko |
| Qualité JPEG | 85% |

**Important** : Format carré obligatoire car affichage en cercle !

### Photo complète (equipe-complete)

| Paramètre | Valeur |
|-----------|--------|
| Format | JPEG ou PNG |
| Dimensions | 1200x800px |
| Ratio | 3:2 (paysage) |
| Résolution | 72 dpi (web) |
| Poids max | 800 Ko |
| Qualité JPEG | 85% |

---

## 🎨 Conseils de découpage

### Cadrage optimal
```
┌─────────────┐
│   [espace]  │
│      👤      │  ← Visage centré
│   /    \    │  ← Épaules incluses
│             │
└─────────────┘
```

### Points clés
- ✅ **Centrer le visage** au milieu de l'image
- ✅ **Inclure la tête complète** avec espace au-dessus
- ✅ **Inclure les épaules** (coupé au niveau de la poitrine)
- ✅ **Garder le fond** (haie verte) pour cohérence
- ✅ **Format carré** impératif pour affichage circulaire

### À éviter
- ❌ Couper le haut de la tête
- ❌ Visage trop petit ou trop proche
- ❌ Format rectangulaire (sera déformé en cercle)
- ❌ Retirer le fond (garder la haie)

---

## 🔧 Optimisation des photos

### Étape 1 : Redimensionner

Si vos photos sont trop grandes :
- **Photopea** : Image > Image Size
- **TinyPNG** : https://tinypng.com/ (en ligne)

### Étape 2 : Compresser

Pour réduire le poids sans perte de qualité :
1. Aller sur **TinyPNG** : https://tinypng.com/
2. Uploader vos 4 photos
3. Télécharger les versions optimisées
4. Gain typique : -50% à -70% de poids

### Étape 3 : Vérifier

- Taille fichier < 500 Ko (photos individuelles)
- Taille fichier < 800 Ko (photo complète)
- Qualité visuelle satisfaisante
- Format correct (carré pour individus)

---

## 📂 Installation des photos

### Méthode 1 : Via FTP/SFTP

```bash
# Connectez-vous via FileZilla ou WinSCP
# Accédez au dossier :
/home/vagrant/public_html/irci/public/images/equipe/

# Copiez vos 4 fichiers JPG :
membre1.jpg
membre2.jpg
membre3.jpg
equipe-complete.jpg
```

### Méthode 2 : Via ligne de commande

```bash
# Se placer dans le dossier
cd /home/vagrant/public_html/irci/public/images/equipe/

# Copier vos fichiers (adaptez le chemin source)
cp /chemin/vers/membre1.jpg .
cp /chemin/vers/membre2.jpg .
cp /chemin/vers/membre3.jpg .
cp /chemin/vers/equipe-complete.jpg .

# Vérifier
ls -lh *.jpg
```

### Méthode 3 : Via interface web

Si vous avez un panneau d'administration (cPanel, Plesk) :
1. Accéder au gestionnaire de fichiers
2. Naviguer vers `/public/images/equipe/`
3. Uploader les 4 fichiers JPG

---

## 🔄 Système de fallback

Le site est configuré pour utiliser les photos dans cet ordre :

### Photos individuelles
```
1. Essayer membre1.svg (placeholder actuel)
2. Si échec → Essayer membre1.jpg (votre vraie photo)
3. Si échec → Afficher icône par défaut
```

### Avantage
- ✅ Les placeholders SVG s'affichent immédiatement
- ✅ Dès que vous ajoutez les JPG, ils sont prioritaires
- ✅ Aucune modification de code nécessaire

---

## ✅ Checklist de remplacement

### Préparation
- [ ] Photo originale obtenue (3 membres)
- [ ] Outil de retouche installé/accessible
- [ ] TinyPNG ouvert pour optimisation

### Découpage
- [ ] Membre 1 découpé (gauche) → `membre1.jpg`
- [ ] François découpé (centre) → `membre2.jpg`
- [ ] Membre 3 découpé (droite) → `membre3.jpg`
- [ ] Photo complète préparée → `equipe-complete.jpg`

### Vérification qualité
- [ ] Format carré pour membres (700x700px)
- [ ] Format paysage pour équipe (1200x800px)
- [ ] Visages centrés et bien cadrés
- [ ] Poids optimisé (< 500 Ko individuels)
- [ ] Qualité visuelle satisfaisante

### Installation
- [ ] 4 fichiers JPG uploadés dans `/public/images/equipe/`
- [ ] Permissions fichiers OK (644)
- [ ] Noms fichiers exacts (membre1.jpg, membre2.jpg, etc.)

### Tests
- [ ] Page d'accueil : Photo équipe complète visible
- [ ] Page "À Propos" : 3 photos individuelles visibles
- [ ] Photos en cercle correctement affichées
- [ ] Aucune déformation (grâce au format carré)
- [ ] Test sur mobile OK

---

## 🎯 Résultat attendu

### Page "À Propos" (`/a-propos`)
```
┌─────────────────────────────────────────────┐
│         Notre Équipe Familiale              │
├─────────────┬─────────────┬─────────────────┤
│   ⭕️📷1    │   ⭕️📷2    │    ⭕️📷3        │
│  [Prénom]  │  FRANÇOIS   │   [Prénom]      │
│ Technique  │   "Coach"   │  Lumière/Vidéo  │
└─────────────┴─────────────┴─────────────────┘
```

### Page d'Accueil (`/`)
```
┌─────────────────────────────────────────────┐
│      📷 Photo équipe complète                │
│   (3 membres en costumes devant haie)       │
└─────────────────────────────────────────────┘
```

---

## 💡 Astuces Photopea

### Découper une personne
1. **Ouvrir** la photo : File > Open
2. **Outil Rectangle de sélection** (M)
3. **Maintenir Shift** pour sélection carrée
4. **Sélectionner** autour de la personne
5. **Image** > Crop
6. **File** > Export As > JPG
7. **Qualité** : 85%
8. **Save**

### Format carré parfait
```
Image > Image Size
☑️ Constrain proportions (décocher)
Width: 700px
Height: 700px
→ OK
```

---

## 🆘 Problèmes fréquents

### Photo déformée en cercle
**Cause** : Format rectangulaire au lieu de carré  
**Solution** : Recadrer en format carré (700x700px)

### Photo floue
**Cause** : Trop petite résolution  
**Solution** : Utiliser photo source haute résolution

### Fichier trop lourd
**Cause** : Pas optimisé  
**Solution** : Passer sur TinyPNG

### Photo ne s'affiche pas
**Cause** : Mauvais nom de fichier ou permissions  
**Solution** : Vérifier noms exacts et chmod 644

---

## 📞 Support

**Outils recommandés** :
- **Photopea** : https://www.photopea.com/ (découpage)
- **TinyPNG** : https://tinypng.com/ (optimisation)
- **GIMP** : https://www.gimp.org/ (gratuit, téléchargeable)

**Fichiers de code** :
- `templates/about/index.html.twig` (photos individuelles)
- `templates/home/index.html.twig` (photo complète)

**Guides associés** :
- `GUIDE_PHOTOS_EQUIPE.md` - Guide complet original
- `INTEGRATION_CDC_EQUIPE.md` - Intégration contenu

---

## 🎊 Une fois terminé

Vos vraies photos remplaceront automatiquement les placeholders SVG !

**Les avantages** :
- ✅ Identité visuelle authentique
- ✅ Équipe familiale mise en valeur
- ✅ Design professionnel
- ✅ Photos optimisées pour le web

**Votre site IRCI aura une vraie équipe visible ! 👥**
