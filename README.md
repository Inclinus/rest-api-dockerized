# Rest-API Dockerized (Apache, MariaDB)

## Description
Ce projet est un exemple de Rest-API dockerisé avec Apache et MariaDB.

Réalisé par **[Noam DE MASURE](https://github.com/Inclinus)** avec l'aide d'**[Amin NAIRI](https://github.com/aminnairi)**.

## Structure 
Le projet est structuré de la manière suivante :
- **/libraries** : Contient des fonctions utilitaires pour la création d'une Rest-API *(Fournies par **Amin NAIRI**)*
- **/public** : Contient le fichier **index.php** qui est le point d'entrée de l'application
- **/services** : Contient les différents services de la Rest-API, ajoutez ici vos différents traitements
- **/database** : Contient la méthode de connexion à la base de données
- **/docker** : Contient les fichiers de configuration Docker
  - (contient le fichier **/docker/db/script.sql** qui contient le script de création de la base de données)

## Informations
Le projet est déjà structuré selon un exemple précis, avec un exemple de données (fichier **/docker/db/script.sql**).

N'hésitez pas à modifier ce script selon vos besoins.

Vous pouvez modifier le code de votre Rest-API sans avoir à reconstruire vos containers Docker. Cependant, en cas de modification du fichier **docker/db/script.sql**, vous devrez les reconstruire.

### Lancement de la Rest-API et de la base de données
Pour lancer le projet, utilisez la commande suivante à la racine :
```bash
docker-compose up
```

### Arrêt de la Rest-API et de la base de données
Pour arrêter le projet, utilisez la commande suivante à la racine :
```bash
docker-compose stop
```

### Rebuild de la Rest-API et de la base de données (nécessaire si modification du script SQL)
Pour reconstruire le projet, utilisez la commande suivante à la racine :
```bash
docker-compose down
```

