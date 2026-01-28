# 🚀 Push vers GitHub - Instructions

## ✅ Les fichiers sont prêts !

✅ **150 fichiers** commités avec toutes les animations  
✅ Dossier : `/home/vagrant/public_html/irci/deploy-static/`  
✅ Branch : `main`  
✅ Remote configuré : `https://github.com/julaiii/irci.git`

---

## 🔐 OPTION 1 : Push avec Personal Access Token (Recommandé)

### Étape 1 : Créer un Personal Access Token sur GitHub

1. Aller sur https://github.com/settings/tokens
2. Cliquer **"Generate new token"** > **"Generate new token (classic)"**
3. **Note** : "IRCI deploy"
4. **Expiration** : 30 jours (ou plus)
5. **Cocher** : `repo` (tous les droits)
6. Cliquer **"Generate token"**
7. **COPIER LE TOKEN** (vous ne le reverrez plus !)

### Étape 2 : Push avec le token

```bash
cd /home/vagrant/public_html/irci/deploy-static

# Remplacer YOUR_TOKEN par le token copié
git push https://YOUR_TOKEN@github.com/julaiii/irci.git main
```

---

## 🔐 OPTION 2 : Push avec identifiants GitHub

```bash
cd /home/vagrant/public_html/irci/deploy-static
git push -u origin main
```

Quand demandé :
- **Username** : `julaiii`
- **Password** : Votre mot de passe GitHub OU un Personal Access Token

⚠️ **Note** : GitHub n'accepte plus les mots de passe classiques depuis 2021.  
Il FAUT utiliser un Personal Access Token (Option 1).

---

## 🎯 OPTION 3 : Push via GitHub CLI (si installé)

```bash
gh auth login
cd /home/vagrant/public_html/irci/deploy-static
git push -u origin main
```

---

## ✅ Une fois le push réussi

1. Aller sur https://github.com/julaiii/irci
2. Vérifier que les fichiers sont bien là
3. Aller dans **Settings** > **Pages**
4. **Source** : Deploy from a branch
5. **Branch** : main + / (root)
6. **Save**
7. Attendre 2-3 minutes

**Votre site sera sur** : https://julaiii.github.io/irci/

---

## 📝 Commande rapide (si vous avez le token)

```bash
cd /home/vagrant/public_html/irci/deploy-static
git push https://YOUR_TOKEN@github.com/julaiii/irci.git main
```

Remplacez `YOUR_TOKEN` par votre Personal Access Token de GitHub !

---

## 🆘 Besoin d'aide ?

Si problème, vous pouvez aussi uploader manuellement via l'interface web :
1. Aller sur https://github.com/julaiii/irci
2. Upload les fichiers via **Add file** > **Upload files**

---

**Tout est prêt pour le push ! Il ne manque que votre token GitHub !** 🚀
