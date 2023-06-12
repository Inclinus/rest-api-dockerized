# Rest-API Dockerized (Apache, MariaDB)

## Description
Ce projet est un exemple de Rest-API dockerisé avec Apache et MariaDB.

Réalisé par **[Noam DE MASURE](https://github.com/Inclinus)** avec l'aide d'**[Amin NAIRI](https://github.com/aminnairi)**.

## Structure 
Le projet est structuré de la manière suivante :
- **/public** : Contient les fichiers de votre Rest-API (.htaccess et index.php)
- **/public/libraries** : Contient des fonctions utilitaires pour la création d'une Rest-API *(Fournies par **Amin NAIRI**)*
- **/public/routes** : Contient les routes de votre Rest-API
- **/public/entities** : Contient les entités de votre Rest-API
- **/public/database** : Contient la méthode de connexion à la base de données, et le script de migration de la base de données
- **/docker** : Contient les fichiers de configuration Docker
  - (contient le fichier **/docker/db/script.sql** qui contient le script lancé à la création de la base de données)

## Informations
Le projet est déjà structuré selon un exemple précis, avec un exemple de données (fichier **/docker/db/script.sql**).

En cas de modification du fichier **docker/db/script.sql**, pensez à appeler la route de migration.

Vous pouvez modifier le code de votre Rest-API sans avoir à reconstruire vos containers Docker.

### Lancement de la Rest-API
Pour lancer le projet, utilisez la commande suivante à la racine :
```bash
docker-compose up
```

### Arrêt de la Rest-API
Pour arrêter le projet, utilisez la commande suivante à la racine :
```bash
docker-compose stop
```

### Rebuild de la Rest-API
Pour reconstruire le projet, utilisez la commande suivante à la racine :
```bash
docker-compose down
docker-compose up --build
```

