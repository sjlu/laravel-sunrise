<?php

/*
|--------------------------------------------------------------------------
| Heroku Mailgun Auto Detect
|--------------------------------------------------------------------------
|
| This detects and automatically configures Mailgun for primary emailing
| on Heroku. Note that you will need the Mailgun Heroku addon in order
| for this to work. Please visit the documentation for more details.
|
| https://devcenter.heroku.com/articles/mailgun
|
*/

$config = array();

if (isset($_SERVER['MAILGUN_SMTP_LOGIN'])) {
  $config = array(
    'driver' => 'smtp',
    'encryption' => 'tls',
    'host' => $_SERVER['MAILGUN_SMTP_SERVER'],
    'port' => $_SERVER['MAILGUN_SMTP_PORT'],
    'username' => $_SERVER['MAILGUN_SMTP_LOGIN'],
    'password' => $_SERVER['MAILGUN_SMTP_PASSWORD']
  );
}

return $config;