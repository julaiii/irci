# 🚀 Guide de Déploiement IRCI

## 📌 Configuration GitHub

**Dépôt** : https://github.com/julaiii/irci  
**Branche** : `main`  
**Remote configuré** : `origin` (avec token intégré)

---

## 🔐 Authentification GitHub

### Token d'accès

Le token GitHub est configuré dans le remote Git. Il est également documenté dans `GITHUB_TOKEN.md` (non commité pour sécurité).

**Token** : `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`

⚠️ **Sécurité** : Le token est stocké dans le remote Git. Ne pas le partager publiquement.

---

## 📤 Pousser les modifications vers GitHub

### Méthode simple (recommandée)

Le remote est déjà configuré avec le token, vous pouvez simplement faire :

```bash
cd /home/vagrant/public_html/irci
git add .
git commit -m "Votre message de commit"
git push origin main
```

### Vérifier l'état avant de pousser

```bash
cd /home/vagrant/public_html/irci
git status          # Voir les fichiers modifiés
git log --oneline -5  # Voir les derniers commits
git remote -v       # Vérifier la configuration du remote
```

### En cas de problème

Si le push échoue, vérifier :

1. **Conflits avec le dépôt distant** :
   ```bash
   git fetch origin
   git pull origin main  # Fusionner les changements distants
   git push origin main  # Pousser après fusion
   ```

2. **Token expiré** :
   - Aller sur https://github.com/settings/tokens
   - Générer un nouveau token
   - Mettre à jour le remote :
     ```bash
     git remote set-url origin https://NOUVEAU_TOKEN@github.com/julaiii/irci.git
     ```

---

## 🏗️ Structure du Projet

### Dépôt GitHub

Le dépôt contient le **code source Symfony complet** :
- Code PHP (controllers, entities, services)
- Templates Twig
- Assets (CSS, JS)
- Configuration Symfony
- Documentation

### Dossier `deploy-static/`

Ce dossier contient une **version HTML statique** du site (générée séparément) :
- Pages HTML pré-générées
- Assets compilés
- Images

⚠️ **Note** : Le dossier `deploy-static/` est un dépôt Git séparé, utilisé pour GitHub Pages si nécessaire.

---

## 🌐 Options de Déploiement

### Option 1 : Hébergement PHP (Recommandé pour production)

Pour un site Symfony complet avec formulaire de contact fonctionnel :

**Hébergeurs recommandés** :
- **InfinityFree** (gratuit) : https://infinityfree.net
- **000webhost** (gratuit) : https://www.000webhost.com
- Hébergement payant du client

**Étapes** :
1. Uploader tout le contenu du projet via FTP
2. Configurer la base de données (si nécessaire)
3. Modifier `.env` pour la production :
   ```env
   APP_ENV=prod
   APP_DEBUG=0
   ```
4. Configurer les permissions serveur

### Option 2 : GitHub Pages (Démo statique)

Pour une démonstration HTML statique :

1. Générer les pages statiques (voir scripts `deploy-static.sh` ou `deploy-netlify.sh`)
2. Uploader le contenu de `deploy-static/` sur GitHub Pages
3. Activer GitHub Pages dans Settings > Pages

⚠️ **Limitation** : Le formulaire de contact ne fonctionnera pas (pas de PHP).

### Option 3 : Netlify (Démo statique rapide)

1. Générer les pages statiques
2. Aller sur https://app.netlify.com/drop
3. Glisser-déposer le dossier `deploy-static/`
4. Site en ligne en 30 secondes

---

## 📝 Workflow de Développement

### 1. Faire des modifications locales

```bash
cd /home/vagrant/public_html/irci
# Modifier les fichiers...
```

### 2. Vérifier les changements

```bash
git status
git diff  # Voir les modifications
```

### 3. Créer un commit

```bash
git add .
git commit -m "Description des modifications"
```

### 4. Pousser vers GitHub

```bash
git push origin main
```

### 5. Vérifier sur GitHub

Aller sur https://github.com/julaiii/irci pour voir les modifications.

---

## 🔧 Scripts Utiles

### `push-to-github.sh`

Script pour pousser avec token explicite (si nécessaire) :

```bash
./push-to-github.sh VOTRE_TOKEN
```

### `deploy-static.sh`

Génère un package statique pour déploiement :

```bash
./deploy-static.sh
# Crée le dossier deploy-static/ avec tous les assets
```

### `deploy-netlify.sh`

Génère un package pour Netlify :

```bash
./deploy-netlify.sh
# Télécharge les pages HTML depuis le serveur local
```

---

## ⚠️ Points Importants

1. **Token GitHub** : Ne jamais commiter le token dans Git (déjà dans `.gitignore`)
2. **Branche principale** : Toujours utiliser `main` (pas `master`)
3. **Force push** : Éviter `git push --force` sauf si vraiment nécessaire
4. **Fichiers sensibles** : `.env` et fichiers de configuration ne doivent pas être commités

---

## 🆘 Dépannage

### Erreur : "non-fast-forward"

```bash
git pull origin main
# Résoudre les conflits si nécessaire
git push origin main
```

### Erreur : "could not read Username"

Le token n'est plus valide. Régénérer un token et mettre à jour le remote.

### Erreur : "Host key verification failed" (SSH)

Utiliser HTTPS au lieu de SSH (déjà configuré).

---

## 📚 Ressources

- **Dépôt GitHub** : https://github.com/julaiii/irci
- **Tokens GitHub** : https://github.com/settings/tokens
- **Documentation Symfony** : https://symfony.com/doc/5.4/

---

**Dernière mise à jour** : 2026-01-27  
**Maintenu par** : julaiii
