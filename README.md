
 <h3 align="center">My Portfolio using Laravel</h3>

   <div align="center">
     This project using PHP Laravel 5.4 <a href="https://oussamabosri.com" target="_blank"><b>OUSSAMA BOSRI</b></a>
    </div>
</div>

<br>
**Prerequisites**

Make sure you have the following installed on your machine:

- [Git](https://git-scm.com/)
- [Node.js](https://nodejs.org/en)
- [composer](https://getcomposer.org/) 

**Cloning the Repository**

```bash
git clone https://github.com/oussama-bosri/My-Portfolio-using-Laravel
cd Centre-de-repos
```

**Installation**

Install the project dependencies using composer:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

**Running the Project**

```bash
php artisan serv
```

Open [http://localhost:3000](http://localhost:3000) in your browser to view the project.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
