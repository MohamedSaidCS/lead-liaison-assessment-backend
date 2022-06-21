# Mohamed Said Mohamed Shaaban

# Lead Liaison Assessment - Backend

## [Frontend](https://github.com/MohamedSaidCS/lead-liaison-assessment-frontend)

# Instructions

1) Clone the project
```
git clone https://github.com/MohamedSaidCS/lead-liaison-assessment-backend.git
```
2) Go to project directory
```
cd lead-liaison-assessment-backend
```
7) Install dependencies using composer
```
composer install
```
3) Generate .env file from .env.example file
```
cp .env.example .env
```
4) Change database configuration to match your own
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todos
DB_USERNAME=root
DB_PASSWORD=
```
5) Generate app key using artisan command
```
php artisan key:generate
```
6) Migrate database and run seeder
```
php artisan migrate --seed
```
7) Run the application
```
php artisan serve
```
