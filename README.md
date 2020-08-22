Laravel Migrations, Seeds & Use of faker data.

Create the migration file
sudo php artisan make:migration create_dummy_table

Create the migration file in particular folder
sudo php artisan make:migration create_test_table --path=database/migrations/test_folder

Run the migration 
sudo php artisan migrate

With specific folder
sudo php artisan migrate --path=database/migrations/test_folder

Create the Seed for DummyTable
sudo php artisan make:seeder DummyTableSeeder

Create the Models
sudo php artisan make:model DummyTable
sudo php artisan make:model TestModel

Create the seeder in a folder
sudo php artisan make:seeder Auth/UserTableSeeder

Run DB Seed
sudo php artisan db:seed

Run DB Seed with particular class
sudo php artisan db:seed --class=DummyTableSeeder