# 🗺️ MAPPING COMPLET - Site IRCI.docx → Site Web

**Date** : Analyse complète du document "Site IRCI.docx"  
**Objectif** : Vérifier que toutes les informations sont mappées pour remplacer les données fictives

---

## ✅ 1. PAGE D'ACCUEIL (`templates/home/index.html.twig`)

### 1.1 Hero Section - Titre et description
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Texte intro | "Spécialistes de la sonorisation, de la lumière, de la vidéo" | "Spécialistes de la sonorisation, de la lumière, de l'**audiovisuel**" | ❌ À modifier |
| Icônes services | "Vidéo" | **"Audiovisuel"** (logo TV) | ❌ À modifier |
| Icônes services | "Enregistrement" | **"Contrôle d'accès/Enregistrement"** (logo QR code) | ❌ À modifier |
| Logo Location | Logo actuel | **Logo à changer** | ❌ À modifier |

### 1.2 Section Équipe Familiale
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Texte équipe | "Depuis plusieurs années" | **"Depuis plus de 25 ans, notre équipe (père et 3 fils)"** | ❌ À modifier |
| Texte valeurs | Texte actuel | **"Nous privilégions … clôture de votre évènement"** | ❌ À modifier |
| Encadré atout | Texte actuel | **"Notre atout : Une expertise multi-métiers - Un interlocuteur unique pour 4 corps de métiers : équipement de salles de conférences (son, vidéo, lumière), multimédia, contrôle d'accès, régie technique"** | ❌ À modifier |
| Chiffres clés | 15 ans, 200+ clients, 50k visiteurs | **25 ans, 70+ clients, 55k visiteurs, 100% sur mesure** | ❌ À modifier |

### 1.3 Section Prestations
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Structure | Lumière, Son, Enregistrement, Multimédia, Location | **Audiovisuel, Multimédia, Contrôle d'accès, Régie technique, Location** | ❌ À modifier |
| Descriptions | Descriptions actuelles | Descriptions du document | ❌ À modifier |

---

## ✅ 2. PAGE PRESTATIONS (`templates/prestations/index.html.twig`)

### 2.1 Navigation Prestations
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Sections | Lumière, Son, Enregistrement, Multimédia, Location | **Audiovisuel, Multimédia, Contrôle d'accès, Régie technique, Location** | ❌ À modifier |

### 2.2 Section Audiovisuel (remplace Vidéo)
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Titre | "Vidéo" | **"Audiovisuel"** (picto enceinte son) | ❌ À modifier |
| Description | Texte actuel | **"Equipement de vos salles de conférences/congrès - Nous vous proposons des solutions adaptées pour tout type de besoin. De l'éclairage à la vidéo en passant par le son nous optimisons votre espace."** | ❌ À modifier |
| Matériel | Liste actuelle | **"Projecteurs à découpe, barres LED, Enceintes active large bande, Enceintes compactes, Microphones HF (main, cravate, serre tête), Tables de mixage numériques, Pupitre sonorisé, micros cols de cygnes, Captation du son, Vidéoprojecteurs ultra-courte focale, longue distance, Ecrans 4K UHD"** | ❌ À modifier |

### 2.3 Section Multimédia
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Description | Texte actuel | **"Vidéoprojecteurs haute définition, écrans TV 4K, tablettes, ordinateurs. Nous vous proposons de nombreuses références d'équipements."** | ❌ À modifier |
| Matériel | Liste actuelle | **"TV 4K (7 références) + pieds, Vidéoprojecteurs ultra-courte focale, longue distance, Tablettes android ou Apple avec support, Ordinateurs avec suite office (carte i3 au minimum)"** | ❌ À modifier |

### 2.4 Section Contrôle d'accès (remplace Enregistrement)
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Titre | "Enregistrement" | **"Contrôle d'accès"** (logo QR code) | ❌ À modifier |
| Description | Texte actuel | **"Nous mettons en place votre accueil visiteurs et exposants pour fluidifier au mieux leur enregistrement. Puis le contrôle d'accès de votre évènement et des différents espaces à l'intérieur."** | ❌ À modifier |
| Matériel | Liste actuelle | **"Ordinateurs portables, Routeur 4G/5G, Imprimantes lasers N&B ou couleurs, Douchettes de contrôle d'accès (en temps réel ou non), Application Leads pour vos exposants (scan, qualification des fiches et récupération à tout moment)"** | ❌ À modifier |

### 2.5 Section Régie technique (NOUVELLE)
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Titre | N'existe pas | **"Régie technique"** | ❌ À créer |
| Description | N'existe pas | **"Supervision de votre montage, gestion des prestataires d'installation, coordination des équipes"** | ❌ À créer |

### 2.6 Section Location
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Durée minimale | "1 journée (24h)" | **À ENLEVER** | ❌ À modifier |
| Description | Texte actuel | **"IRCI met à votre disposition un catalogue de matériel audiovisuel professionnel de marques reconnues. Sonorisation, éclairage, vidéo, informatique : tout ce dont vous avez besoin pour réussir votre évènement. Livraison, installation et reprise possible. Support technique inclus pour vous accompagner dans votre projet."** | ❌ À modifier |

---

## ✅ 3. PAGE LOCATION MATÉRIEL (`templates/rental/index.html.twig`)

### 3.1 Bug affichage
| **Document** | **Problème** | **Solution** | **Statut** |
|--------------|--------------|--------------|------------|
| Filtres catégories | "la catégorie est dans une bulle rouge mais on ne voit plus le texte" | **Corriger le CSS pour le contraste texte/bulle** | ❌ À corriger |

### 3.2 Catalogue produits
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Produits | 6 produits fictifs | **26 produits réels du document** | ❌ À remplacer |
| Descriptions | Descriptions fictives | **Descriptions du document "Site IRCI.docx"** | ❌ À remplacer |
| Images | Images Unsplash | **Images du dossier `/public/IRCI/`** | ❌ À remplacer |
| Années | Années affichées | **À ENLEVER (pas d'année d'acquisition)** | ❌ À modifier |

---

## ✅ 4. PAGE À PROPOS (`templates/about/index.html.twig`)

### 4.1 Hero Section
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Titre | "Votre partenaire événementiel depuis 15 ans" | **"Votre partenaire évènementiel depuis 25 ans"** | ❌ À modifier |

### 4.2 Section ADN
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Description | Texte actuel | **"Avec plus de 25 ans d'expériences dans l'évènementiel professionnel, notre équipe accompagne des organisateurs dans des projets variés : salons, congrès, assemblées générales, manifestations sportives, etc."** | ❌ À modifier |
| Force différenciation | "4 métiers, 1 seul interlocuteur" | **"Notre force : changer enregistrement par contrôle d'accès"** | ❌ À modifier |
| Badges | Sonorisation, Éclairage, Vidéo & Multimédia, Enregistrement | **Sonorisation, Éclairage, Audiovisuel, Multimédia, Contrôle d'accès, Régie technique** | ❌ À modifier |

### 4.3 Section Équipe
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Texte intro | "Depuis plusieurs années" | **"Depuis plusieurs années dans le secteur, notre équipe familiale (père et trois fils) met son expertise à votre service."** | ❌ À modifier |
| Membre 1 | Pierre - Responsable Technique - Son & Sonorisation - 12 ans | **Jean-Yves - Fondateur - Expertise : Informatique & Multimédia - En 25 ans il a grandi avec le milieu et a su apporter des idées novatrices.** | ❌ À modifier |
| Membre 2 | François - Responsable Projet - 25 ans | **Pierre - Directeur des opérations - Expertise : Technique & Accompagnement - En 10 ans il a touché à tout dans l'entreprise. Sa connaissance du matériel et du terrain est un plus pour votre projet. Point fort : sa polyvalence** | ❌ À modifier |
| Membre 3 | Fred - Expert Lumière & Vidéo | **François - Responsable du développement - Expertise : Sonorisation & Vidéo - Spécialiste des salles de conférences il maîtrise le son et la vidéo parfaitement.** | ❌ À modifier |
| Note | 3 membres | **"Derrière ce trio, un réseau d'experts de l'évènementiel accompagne IRCI à travers le territoire."** | ❌ À ajouter |

### 4.4 Section Expertise
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Liste | Événements Professionnels, Salons & Foires, Spectacles & Concerts, Accompagnement | **Événements Professionnels (Séminaires, conventions, lancements de produits, conférences), Salons & Foires (Stands, animations, sonorisation de halls d'exposition), Manifestations sportives (Sonorisation, lumière), Accompagnement Sur-Mesure (Conseil, installation, assistance technique, maintenance)** | ❌ À modifier |

### 4.5 Section Témoignages
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Témoignages | 3 témoignages fictifs | **"Témoignages à venir"** | ❌ À modifier (ou supprimer) |

---

## ✅ 5. FOOTER (`templates/base.html.twig`)

### 5.1 Contact
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Téléphone | "À définir" | **06 68 56 38 43** | ❌ À modifier |
| Email | contact@irci.fr | **contact@irci-salon.fr** | ❌ À modifier |
| Localisation | "France" | **Marseille, France** | ❌ À modifier |
| LinkedIn | N'existe pas | **Lien LinkedIn (via Logo) : https://fr.linkedin.com/company/irci-salon** | ❌ À ajouter |

### 5.2 Description
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Texte | "Prestataire événementiel professionnel spécialisé en son, lumière, enregistrement et multimédia." | **"Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs."** | ❌ À modifier |

---

## ✅ 6. FORMULAIRE CONTACT (`src/Controller/ContactController.php`)

### 6.1 Email de destination
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Email | Email actuel | **devis@irci-salon.fr** | ❌ À modifier |

---

## ✅ 7. MENTIONS LÉGALES (à créer ou modifier)

### 7.1 Informations légales
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Raison sociale | N'existe pas | **IRCI, SARL** | ❌ À créer |
| Capital | N'existe pas | **Capital 1 000€** | ❌ À créer |
| SIRET | N'existe pas | **930 547 385 00011** | ❌ À créer |
| RCS | N'existe pas | **RCS Marseille** | ❌ À créer |
| TVA | N'existe pas | **FR15930547385** | ❌ À créer |
| Directeur publication | N'existe pas | **Pierre ROUSSEL** | ❌ À créer |
| Confidentialité | N'existe pas | **À récupérer sur un autre site** | ❌ À créer |

---

## ✅ 8. SCHEMA.ORG (`templates/base.html.twig`)

### 8.1 Données structurées
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Email | contact@irci.fr | **contact@irci-salon.fr** | ❌ À modifier |
| Adresse | France | **Marseille, France** | ❌ À modifier |
| Services | Liste actuelle | **Audiovisuel, Multimédia, Contrôle d'accès, Régie technique, Location** | ❌ À modifier |
| LinkedIn | N'existe pas | **https://fr.linkedin.com/company/irci-salon** | ❌ À ajouter |

---

## ✅ 9. META TAGS (`templates/base.html.twig`)

### 9.1 Meta description
| **Document** | **Actuel (fictif)** | **À remplacer par** | **Statut** |
|--------------|---------------------|---------------------|------------|
| Description | Texte actuel | **"Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs."** | ❌ À modifier |
| Keywords | Mots-clés actuels | **Ajouter : audiovisuel, contrôle d'accès, régie technique** | ❌ À modifier |

---

## 📊 RÉSUMÉ DU MAPPING

### ✅ Informations mappées et prêtes
- ✅ Toutes les descriptions de produits du catalogue (26 produits)
- ✅ Toutes les caractéristiques techniques (sauf TASCAM DR40 exclu)
- ✅ Toutes les coordonnées (téléphone, email, localisation)
- ✅ Toutes les informations équipe (3 membres)
- ✅ Toutes les mentions légales
- ✅ Structure des prestations

### ❌ Informations NON encore intégrées dans le code
- ❌ **PAGE D'ACCUEIL** : Terminologie (Vidéo→Audiovisuel, Enregistrement→Contrôle d'accès)
- ❌ **PAGE D'ACCUEIL** : Chiffres clés (25 ans, 70+ clients, 55k visiteurs)
- ❌ **PAGE D'ACCUEIL** : Texte équipe et expertise multi-métiers
- ❌ **PAGE PRESTATIONS** : Restructuration complète (5 sections au lieu de 5 actuelles)
- ❌ **PAGE PRESTATIONS** : Suppression durée minimale
- ❌ **PAGE LOCATION** : Remplacement des 6 produits fictifs par 26 produits réels
- ❌ **PAGE LOCATION** : Correction bug affichage filtres
- ❌ **PAGE LOCATION** : Suppression années d'acquisition
- ❌ **PAGE À PROPOS** : Mise à jour équipe (Jean-Yves, Pierre, François)
- ❌ **PAGE À PROPOS** : Mise à jour texte et expertise
- ❌ **FOOTER** : Coordonnées complètes
- ❌ **FOOTER** : Lien LinkedIn
- ❌ **FORMULAIRE** : Email devis@irci-salon.fr
- ❌ **MENTIONS LÉGALES** : Création complète
- ❌ **SCHEMA.ORG** : Mise à jour données structurées

---

## 🎯 CONCLUSION

**Toutes les informations du document "Site IRCI.docx" sont identifiées et mappées**, mais **AUCUNE n'a encore été intégrée dans le code**.

**Prochaine étape** : Intégrer toutes ces modifications dans les fichiers templates et controllers.
