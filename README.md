This repository is a demo for the [gDoc](https://github.com/Whyounes/gDoc) package.

##Installation
Clone the repository to your computer `git clone --recursive git@github.com:Whyounes/gDocDemo.git` and run `composer update`. The repo contain a copy of the [Laravel documentation repository](https://github.com/laravel/docs) and I created a `doc.yml` file to make it work properly with the package.
To generate the static files for your demo you can use the `config/config.php` file and run the following command.

```bash
php vendor/rafie/gDoc/rafie.php generate config/config.php
```

After the command is done, you will have two folders inside you `build` folder, you can create a small server instance using the following command.

```bash
php -S localhost:8900 -t build/
```

Now you can visit the `http://localhost:8900/master/documentation.html` to see the documentation output.