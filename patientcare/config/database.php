<?php
class DATABASE_CONFIG {

    public $default;

    public $test = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'test_database_name',
        'prefix' => '',
        //'encoding' => 'utf8',
    );

    public function __construct() {
    $DATABASE_URL = parse_url($_ENV['DATABASE_URL']);
    $this->default = array(
      'datasource' => 'Database/Postgres',
      'persistent' => false,
      'host'       => $DATABASE_URL['host'],
      'login'      => $DATABASE_URL['user'],
      'password'   => $DATABASE_URL['pass'],
      'database'   => substr($DATABASE_URL['path'], 1),
      'prefix'     => '',
      'encoding'   => 'utf8',
    );
  }
}