<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Reserv

<p align="center"><a href="https://reserv-ap.herokuapp.com" target="_blank"><img src="https://github.com/ArnaudAploon/Reserv/blob/main/public/readme-file/reserv-demo.gif?raw=true"></a></p>

## Comment cloner un projet laravel à partir d'un dépot github `by Aploon`

### Cloner le dépot distant avec 
- `git clone`

### Installer les dépendances du projet

- `composer install` Pour installer les paquets nécessaire à l'installation de laravel à partir de [composer](https://laravel.com/docs/9.x#installation-via-composer)
- `npm install` Pour installer les paquets javascripts nécessaire à l'installation de laravel ([Node js](https://nodejs.org/), [Vue js](https://vuejs.org/)...)
> Le deuxième point est optionnel, nous n'en aurons pas besoin ici

### Ajouter le fichier [.env] au projet

- Le fichier [.env] dans les projets laravel contient des configurations necessaire pour l'exécution du projet
- Il contient une clé d'encryption `APP KEY` unique pour chaque projet laravel. Il est utilisé pour encoder certains éléments de votre application
- Etant donné que le fichier [.env] n'est pas disponible sur le dépot (le fichier [.gitignore] empèche cela), nous allons le créer nous même.
- Ensuite, copiez le contenu du fichier [.env.example] dans le fichier [.env] que nous venons de créer

### Générer automatiquement la clé d'encryption

Pour générer une clé unique qui sera utilisé par votre application, exécuté la commande
- `php artisan key:generate`

> Votre application est alors près pour être exécuter

## Reserv page

### Page de connexion

<p align="center"><a href="https://reserv-ap.herokuapp.com" target="_blank"><img src="https://github.com/ArnaudAploon/Reserv/blob/main/public/readme-file/reserv-login.png?raw=true"></a></p>

### Page d'accueil

<p align="center"><a href="https://reserv-ap.herokuapp.com" target="_blank"><img src="https://github.com/ArnaudAploon/Reserv/blob/main/public/readme-file/reserv-home.png?raw=true"></a></p>

### Page de reservation

<p align="center"><a href="https://reserv-ap.herokuapp.com" target="_blank"><img src="https://github.com/ArnaudAploon/Reserv/blob/main/public/readme-file/reserv-reservation.png?raw=true"></a></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
