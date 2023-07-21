## About Laravel Headless

Run through the following steps to get started:

- `composer install` and setup `.env` file
- Run `git clone https://github.com/WordPress/WordPress.git wordpress` to pull latest wordpress
- Run `php artisan storage:link` to link CMS and assets to public folder
- Edit `wp-config.php` present inside `wordpress` folder and set database credentials.
- Run command: `php artisan migrate:fresh --seed`

### That's it!
