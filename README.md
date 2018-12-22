# Slim Framework 3 MVC Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the Slim 3 with the PHP-View template renderer. It also uses the Monolog logger and the Eloquent ORM.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    composer create-project m92o/slim-mvc-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands

	cd [my-app-name]
	composer start

Run this command in the application directory to run the test suite

	composer test

That's it! Now go build something cool.

## Features

* Model (Eloquent ORM)
* View (PHP-View)
* Controller
* DI Container (Pimple)
* Logger (Monolog)
* Unit testing (PHPUnit)
* Docker for development

## TODO

* Session
* Cookie
* CORS
* CSRF
* Database migration
* Basic authentication
* Debug Bar

## License

The MIT License (MIT).
Please see [License File](LICENSE) for more information.