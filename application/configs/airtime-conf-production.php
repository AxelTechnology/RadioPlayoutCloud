<?php
// This file generated by Propel 1.5.2 convert-conf target
// from XML runtime conf file /home/james/src/airtime/airtime_mvc/build/runtime-conf.xml

/* The original name of this file is airtime-conf.php but since we need to make custom changes
 * to it I've renamed it so that our changes aren't removed everytime we regenerate a database schema.
 * our custom changes requires the database parameters to be loaded from /etc/airtime/airtime.conf so
 * that the user can customize these.
 */

$CC_CONFIG = Config::getConfig();

$dbhost = $CC_CONFIG['dsn']['hostspec'];
$dbname = $CC_CONFIG['dsn']['database'];
$dbuser = $CC_CONFIG['dsn']['username'];
$dbpass = $CC_CONFIG['dsn']['password'];

$conf = array (
  'datasources' =>
  array (
    'airtime' =>
    array (
      'adapter' => 'pgsql',
      'connection' =>
      array (
        'dsn' => "pgsql:host=$dbhost;port=5432;dbname=$dbname;user=$dbuser;password=$dbpass",
      ),
    ),
    'default' => 'airtime',
  ),
  'generator_version' => '1.5.2',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-airtime-conf.php');
return $conf;
