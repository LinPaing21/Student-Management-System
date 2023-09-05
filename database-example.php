<?php
    use Illuminate\Database\Capsule\Manager as DB;

    $db = new DB;

    $db->addConnection([
        'driver' => 'mysql', #your choice
        'host' => 'localhost',
        'database' => 'school', # your database name
        'username' => 'root', # your username
        'password' => '', # password if you have
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $db->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $db->bootEloquent();
?>