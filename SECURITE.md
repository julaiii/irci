# 🔒 Configuration de Sécurité - IRCI

## Mesures de sécurité implémentées

### 1. Rate Limiting
- **Service** : `RateLimiterService`
- **Limite** : 3 soumissions par heure
- **Protection** : Empêche le spam et les attaques par force brute
- **Stockage** : Session utilisateur

### 2. Protection Honeypot
- **Champ caché** : `website` 
- **Fonctionnement** : Champ invisible pour les humains, mais visible pour les bots
- **Action** : Rejet automatique si rempli

### 3. Protection CSRF
- **Framework** : Symfony Forms (activé par défaut)
- **Token** : Généré automatiquement pour chaque formulaire
- **Validation** : Vérifiée à chaque soumission

### 4. Validations de formulaire
- **Nom** : 2-100 caractères
- **Email** : Format valide
- **Téléphone** : Format numérique avec caractères spéciaux autorisés
- **Message** : 10-2000 caractères

### 5. Validation côté serveur
- Toutes les validations sont faites côté serveur (Symfony Validator)
- Messages d'erreur personnalisés en français
- Protection contre les injections XSS/SQL grâce à Doctrine ORM

## Configuration HTTPS (Production)

Pour activer HTTPS en production :

1. **Obtenir un certificat SSL** (Let's Encrypt recommandé)
```bash
sudo apt install certbot
sudo certbot --nginx -d votredomaine.fr
```

2. **Forcer HTTPS dans `.htaccess`** (si Apache)
```apache
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

3. **Configuration Nginx** (si Nginx)
```nginx
server {
    listen 80;
    server_name votredomaine.fr;
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    server_name votredomaine.fr;
    
    ssl_certificate /path/to/cert.pem;
    ssl_certificate_key /path/to/key.pem;
    
    # ... reste de la config
}
```

## Google reCAPTCHA (Optionnel)

Pour ajouter Google reCAPTCHA v3 :

1. **Inscription** : https://www.google.com/recaptcha/admin
2. **Installation du bundle** (nécessite confirmation)
```bash
composer require karser/karser-recaptcha3-bundle
```

3. **Configuration dans `.env`**
```env
RECAPTCHA3_KEY=your_site_key
RECAPTCHA3_SECRET=your_secret_key
```

4. **Ajout dans le formulaire**
```php
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;

$builder->add('captcha', Recaptcha3Type::class, [
    'constraints' => new Recaptcha3(),
]);
```

## Bonnes pratiques de sécurité

### Headers de sécurité HTTP
Ajouter dans `public/.htaccess` ou configuration serveur :

```apache
# Protection XSS
Header set X-XSS-Protection "1; mode=block"

# Prévention du clickjacking
Header set X-Frame-Options "SAMEORIGIN"

# Désactiver le sniffing MIME
Header set X-Content-Type-Options "nosniff"

# Politique de sécurité du contenu (CSP)
Header set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data:;"

# HSTS (HTTPS Strict Transport Security)
Header set Strict-Transport-Security "max-age=31536000; includeSubDomains"
```

### Mise à jour régulière
```bash
# Mettre à jour les dépendances Composer
composer update

# Mettre à jour les dépendances NPM
npm update

# Vérifier les vulnérabilités
composer audit
npm audit
```

### Sauvegardes
- Sauvegardes quotidiennes de la base de données
- Sauvegardes hebdomadaires des fichiers
- Tester régulièrement la restauration

### Logs et monitoring
- Activer les logs d'erreurs Symfony
- Surveiller les tentatives de soumission suspectes
- Configurer des alertes pour les erreurs critiques

## Contact
En cas de problème de sécurité, contactez : contact@irci.fr
