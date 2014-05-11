##laravel-Todo

### Features 
```sh
Login
Add New Item
Edit Existing Item
Remove Exisiting Item
Mark for  done Item
```

###Requirement
```sh
1) PHP 5.4 or above
2) Composer
```
###Usage
Download this reposity and run `composer install` via cmd from window, terminal for linux. 

When it's was finish.Open "app/config/database.php" and edit to compatible with your database. For default database configuration as I had done is like the following.

```sh
'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'laravel-todo',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
```
My database name is `laravel-todo` | My database username is `root` | My database password is `empty`.

When you had finished your database configuration so now run from your cmd/terminal

```sh
php artisan migrate
php artisan db:seed
```
Now you had finished your database configration/ migration/ seeding.

Now, let's start your server run your cmd/terminal

```sh
php artisan serve
```
So now you will see something like 

```sh
Laravel development server started on http://localhost:8000
```
Now your Todo App was running so .... see it from your browser.
### License

The Todo App with Laravel PHP Framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
