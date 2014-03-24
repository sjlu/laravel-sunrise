<?php

/*
|--------------------------------------------------------------------------
| Heroku Postgres Auto Detection
|--------------------------------------------------------------------------
|
| This will automatically pull in the environment's DATABASE_URL and
| parse it into a structure which Laravel can interpret. To instantiate
| a new Postgres database take a look at the Heroku docs.
|
| https://devcenter.heroku.com/articles/heroku-postgresql
|
*/

$config = array();

if (isset($_SERVER['DATABASE_URL'])) {
  $connection = array();
  list(
    $connection['driver'],
    $connection['username'],
    $connection['password'],
    $connection['host'],
    $connection['port'],
    $connection['database']
  ) = preg_split(
    '/[:\/@]/',
    $_SERVER['DATABASE_URL'],
    6,
    PREG_SPLIT_NO_EMPTY
  );

  if ($connection['driver'] === "postgres") {
    $connection['driver'] = "pgsql";
  }

  $config = array(
    'default' => 'pgsql',
    'connections' => array(
      'pgsql' => $connection
    )
  );
}

return $config;