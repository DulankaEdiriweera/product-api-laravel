# product-api-laravel
This is a simple Laravel backend project providing a **Products API**.  
It includes database migration, seeder files.

# Install Dependencies
Install PHP dependencies:
composer install

# Configure Database
Create a MySQL database, e.g., product_db.
Copy .env.example to .env: cp .env.example .env
Open .env and update the database credentials:
DB_CONNECTION=mysql,
DB_HOST=127.0.0.1,
DB_PORT=3306,
DB_DATABASE=product_db,
DB_USERNAME=your_db_user,
DB_PASSWORD=your_db_password

# Generate an application key:
php artisan key:generate

# Run Migrations and Seeders
php artisan migrate

php artisan db:seed --class=ProductSeeder

# Start Laravel Server
php artisan serve

# Test the Products API
Open your browser or Postman and visit: http://127.0.0.1:8000/api/products

