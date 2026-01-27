# 🔐 Configuration GitHub - Token d'accès

## Token GitHub pour le dépôt IRCI

**Dépôt** : https://github.com/julaiii/irci  
**Token** : `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`

⚠️ **IMPORTANT** : Ce fichier ne doit PAS être commité dans Git pour des raisons de sécurité.

## Utilisation

### Push avec le token

```bash
cd /home/vagrant/public_html/irci
git push https://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@github.com/julaiii/irci.git main
```

### Ou utiliser le script

```bash
cd /home/vagrant/public_html/irci
./push-to-github.sh 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
```

## Stockage sécurisé (recommandé)

Le token est stocké dans `~/.git-credentials` pour une utilisation automatique.

---

**Date de création** : 2026-01-27  
**Expiration du token** : À vérifier sur https://github.com/settings/tokens
