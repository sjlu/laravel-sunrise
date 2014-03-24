## Deploying to Heroku

* In order to deploy to Heroku, create an app with the custom buildpack.

        heroku apps:create
        heroku config:set BUILDPACK_URL=https://github.com/sjlu/heroku-buildpack-sunrise.git

* Add a database to your Heroku app.

        heroku addons:add heroku-postgresql:dev

* Promote the newly created database.

        heroku config | grep HEROKU_POSTGRESQL_
        heroku pg:promote HEROKU_POSTGRESQL_COLOR_URL

    * Remember to replace `HEROKU_POSTGRESQL_COLOR_URL` with the variable name mentioned in the first command

* Add Mailgun to your Heroku app.

        heroku addons:add mailgun:starter

* Finally, deploy your app to Heroku.

        git push heroku master

### Utilities

In order to access Laravel Artisan CLI, use `heroku run` to access it. For example, to do a database
migration run the following command.

    heroku run php artisan migrate
