# 🚀 Mon Application Web

Ce projet est une application full-stack avec un backend utilisant Symfony et une base de données SQLite, ainsi qu'un frontend développé avec Angular.

---

## 🛠️ Technologies Utilisées

- **Backend :** Symfony
- **Base de données :** SQLite
- **Frontend :** Angular

---

## ⚙️ Configuration et Démarrage

### 1. Pré-requis
Avant de commencer, assurez-vous d'avoir installé les outils suivants sur votre machine :
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Symfony CLI](https://symfony.com/download)
- [Node.js et npm](https://nodejs.org/)
- [Angular CLI](https://angular.io/cli)

---

### 2. Backend (Symfony)

#### a. Initialiser la base de données
Le backend utilise **SQLite** comme base de données. Pour configurer et initialiser la base, exécutez la commande suivante dans le répertoire du projet backend :

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate -n
symfony server:start
php bin/phpunit tests/Functional
```

### 3. Frontend (angular)

```bash
nvm use
npm install
ng serve
```