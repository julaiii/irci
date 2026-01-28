# 🔍 Guide SEO - IRCI

## Éléments SEO implémentés

### 1. robots.txt ✅
- **Localisation** : `/public/robots.txt`
- **Contenu** : Autorise tous les robots, bloque les dossiers sensibles
- **Sitemap référencé** : Oui

### 2. Sitemap XML dynamique ✅
- **URL** : `/sitemap.xml`
- **Type** : Dynamique (généré par Symfony)
- **Pages incluses** :
  - Accueil (priorité 1.0)
  - Prestations (priorité 0.9)
  - Contact (priorité 0.8)
  - À Propos (priorité 0.7)

### 3. Balises meta optimisées ✅
Chaque page contient :
- `<title>` unique et descriptif
- `<meta name="description">` personnalisée
- `<meta name="keywords">` ciblés
- Balises Open Graph (Facebook)
- Twitter Cards
- Meta robots

### 4. Schema.org JSON-LD ✅
Structure de données implémentée :
- **Type** : LocalBusiness
- **Informations** : Nom, description, services
- **Catalogue** : 5 services détaillés
- **Contact** : Email, adresse

## Optimisations à faire

### Contenu
- [ ] Ajouter des textes optimisés avec mots-clés naturels
- [ ] Créer du contenu unique pour chaque page
- [ ] Ajouter des alt text sur toutes les images
- [ ] Créer un blog pour du contenu régulier

### Technique
- [ ] Optimiser les images (WebP, compression)
- [ ] Activer la compression Gzip/Brotli
- [ ] Mettre en cache les ressources statiques
- [ ] Minifier CSS/JS (déjà fait avec Webpack Encore en prod)

### Performance
- [ ] Score Lighthouse > 90
- [ ] Temps de chargement < 3s
- [ ] Core Web Vitals optimisés

### Backlinks
- [ ] Inscription dans les annuaires professionnels
- [ ] Partenariats avec d'autres sites événementiels
- [ ] Création de profils sur réseaux sociaux

## Soumission aux moteurs de recherche

### Google Search Console
1. Créer un compte : https://search.google.com/search-console
2. Ajouter la propriété (domaine)
3. Vérifier la propriété via fichier HTML ou DNS
4. Soumettre le sitemap : `/sitemap.xml`

### Bing Webmaster Tools
1. Créer un compte : https://www.bing.com/webmasters
2. Ajouter le site
3. Soumettre le sitemap

## Mots-clés ciblés

### Principaux
- Prestataire événementiel
- Sonorisation professionnelle
- Éclairage événementiel
- Location matériel audiovisuel
- Prestataire technique événement

### Secondaires
- Sonorisation concert
- Lumière spectacle
- Enregistrement studio mobile
- Multimédia événementiel
- Location enceintes professionnelles

### Longue traîne
- Prestataire son lumière événement professionnel
- Location matériel sonorisation Paris/région
- Éclairage architectural événement
- Enregistrement multi-pistes concert
- Prestataire technique salon professionnel

## Suivi et analyse

### Google Analytics 4
```html
<!-- À ajouter dans base.html.twig avant </head> -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXXXX');
</script>
```

### Métriques à suivre
- Pages vues
- Taux de rebond
- Durée de session
- Conversions (soumissions formulaire)
- Sources de trafic
- Mots-clés de recherche

## Local SEO

### Google My Business
1. Créer une fiche Google My Business
2. Ajouter adresse, horaires, photos
3. Encourager les avis clients
4. Publier des actualités régulièrement

### Annuaires locaux
- PagesJaunes
- Yelp
- Annuaires événementiels
- Chambres de commerce

## Réseaux sociaux
- [ ] Créer page Facebook professionnelle
- [ ] Profil LinkedIn entreprise
- [ ] Instagram pour visuels événements
- [ ] YouTube pour vidéos de réalisations

## Checklist SEO mensuelle
- [ ] Vérifier positions dans les moteurs de recherche
- [ ] Analyser le trafic Google Analytics
- [ ] Publier du nouveau contenu
- [ ] Vérifier les backlinks
- [ ] Optimiser les pages les moins performantes
- [ ] Corriger les erreurs 404
- [ ] Mettre à jour le sitemap si nécessaire

## Outils SEO recommandés

### Gratuits
- Google Search Console
- Google Analytics
- Bing Webmaster Tools
- Google My Business

### Freemium
- Ubersuggest (recherche mots-clés)
- Answer The Public (idées de contenu)
- Google Trends (tendances)

### Payants (optionnel)
- SEMrush
- Ahrefs
- Moz Pro

## Contact
Pour toute question SEO : contact@irci.fr
