<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## BUILDING AN ECOMMERCE 'SHOPIO58' USING LARAVEL V5.8.35

### 1. Creating the project
   > - composer create-project laravel/laravel="5.8.*" SHOPIO58
   > - git init
   > - git add .
   > - git commit -m "Initial commit: Laravel project 'SHOPIO58' created"
   > - git remote add origin git@github.com:ingafter60/SHOPIO58.git
   > - git push -u origin master

### 2. Modify the app and create user authentication

   #### Modify the app to redirect to home
   > - move index and .htaccess from public to the app root
   > - auth: modify login and register controller to redirect to home
   > - config/filesystems: add to public path
   > - middleware/Authentication: change the route to '/'

   #### Create database

   > - config/database: add db credentials
   > - providers/AppServiceProvider: add max length of table field to 191
   > - Create db
   > - Create migration
   > - create user auth
   > - register/login a new user
   > - :-)

   #### Git Repo

   > - renamed:    public/.htaccess -> .htaccess
   > - modified:   app/Http/Controllers/Auth/LoginController.php
   > - modified:   app/Http/Controllers/Auth/RegisterController.php
   > - new file:   app/Http/Controllers/HomeController.php
   > - modified:   app/Http/Middleware/Authenticate.php
   > - modified:   app/Providers/AppServiceProvider.php
   > - modified:   config/database.php
   > - modified:   config/filesystems.php
   > - renamed:    public/index.php -> index.php
   > - modified:   readme.md
   > - new file:   resources/views/auth/login.blade.php
   > - new file:   resources/views/auth/passwords/email.blade.php
   > - new file:   resources/views/auth/passwords/reset.blade.php
   > - new file:   resources/views/auth/register.blade.php
   > - new file:   resources/views/auth/verify.blade.php
   > - new file:   resources/views/home.blade.php
   > - new file:   resources/views/layouts/app.blade.php
   > - modified:   routes/web.php
   > - modified:   server.php

### 3. Creating Header and Footer

   #### Creating header part 1

   > - modified:   .gitignore
   > - modified:   app/Http/Controllers/HomeController.php
   > - new file:   public/css/header.css
   > - new file:   public/css/public.css
   > - modified:   resources/views/home.blade.php
   > - new file:   resources/views/layouts/default.blade.php
   > - new file:   resources/views/partials/header.blade.php
   > - modified:   routes/web.php

   #### Creating header part 2

   > - modified:   public/css/header.css
   > - modified:   public/css/public.css
   > - modified:   resources/views/layouts/default.blade.php
   > - modified:   resources/views/partials/header.blade.php
   > - public/css/grid.css
   > - public/fa/

   #### Creating header part 3

   > - modified:   public/css/header.css
   > - modified:   resources/views/partials/header.blade.php
   > - public/images/

   #### Creating header part 4

   > - modified:   public/css/header.css
   > - modified:   public/css/public.css
   > - modified:   resources/views/partials/header.blade.php
