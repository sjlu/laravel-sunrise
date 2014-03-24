## Laravel Sunrise

Laravel Sunrise bundles the following packages together to help you get started.

* [Laravel](https://github.com/laravel/laravel)
* [Bower](https://github.com/bower/bower)
    * [Twitter Bootstrap](https://github.com/twbs/bootstrap)
    * [jQuery](https://github.com/jquery/jquery)
    * [Font Awesome](https://github.com/FortAwesome/Font-Awesome)
    * [LESS Hat](https://github.com/csshat/lesshat)
* [Grunt](https://github.com/gruntjs/grunt)
    * [LESS](https://github.com/less/less.js)

### Install

* You will need a working [Laravel environment](http://laravel.com/docs/installation), [Node.js installation](http://nodejs.org/download/) and [Bower installation](http://bower.io/).

* Clone and create an instance of this.

        curl https://raw.github.com/sjlu/laravel-sunrise/master/install.sh | bash -s folder

    * You can replace `folder` with any name you like.

* Install dependencies.

        curl -sS https://getcomposer.org/installer | php
        php composer.phar install
        npm install
        bower install

* Start compiler to concat your scripts and compile your LESS.

        grunt

### Deploying

You can easily deploy this to **Heroku** by reading this [guide](HEROKU.md).

### Contribute

Like any good open-source project, fork it, edit it, **test it**, and send a pull request.

### License

Specific licenses are reserved by these packages. Architecture and framework is licensed under the [MIT license](http://opensource.org/licenses/MIT).
