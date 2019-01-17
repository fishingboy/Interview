<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------
  | DATABASE CONNECTIVITY SETTINGS
  | -------------------------------------------------------------------
  | This file will contain the settings needed to access your database.
  |
  | For complete instructions please consult the 'Database Connection'
  | page of the User Guide.
  |
  | -------------------------------------------------------------------
  | EXPLANATION OF VARIABLES
  | -------------------------------------------------------------------
  |
  | ['hostname'] The hostname of your database server.
  | ['username'] The username used to connect to the database
  | ['password'] The password used to connect to the database
  | ['database'] The name of the database you want to connect to
  | ['dbdriver'] The database type. ie: mysql.  Currently supported:
  mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
  | ['dbprefix'] You can add an optional prefix, which will be added
  |        to the table name when using the  Active Record class
  | ['pconnect'] TRUE/FALSE - Whether to use a persistent connection
  | ['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
  | ['cache_on'] TRUE/FALSE - Enables/disables query caching
  | ['cachedir'] The path to the folder where cache files should be stored
  | ['char_set'] The character set used in communicating with the database
  | ['dbcollat'] The character collation used in communicating with the database
  |        NOTE: For MySQL and MySQLi databases, this setting is only used
  |          as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
  |        (and in table creation queries made with DB Forge).
  |          There is an incompatibility in PHP with mysql_real_escape_string() which
  |          can make your site vulnerable to SQL injection if you are using a
  |          multi-byte character set and are running versions lower than these.
  |          Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
  | ['swap_pre'] A default table prefix that should be swapped with the dbprefix
  | ['autoinit'] Whether or not to automatically initialize the database.
  | ['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
  |             - good for ensuring strict SQL while developing
  |
  | The $active_group variable lets you choose which connection group to
  | make active.  By default there is only one group (the 'default' group).
  |
  | The $active_record variables lets you determine whether or not to load
  | the active record class
 */



$active_record = TRUE;
$active_group = 'local';

$hostname_rw = $db_ro['hostname'] = "127.0.0.1";
$username_rw = $db_ro['username'] = "n2";
$password_rw = $db_ro['password'] = "zuvion2irs";
$database_name = "zuvio_chicken";
$port_rw = $db_ro['port'] = "3306";

$db['local']['hostname'] = $hostname_rw;
$db['local']['username'] = $username_rw;
$db['local']['password'] = $password_rw;
$db['local']['port']     = $port_rw;
$db['local']['database'] = $database_name;
$db['local']['dbdriver'] = "mysqli";
$db['local']['dbprefix'] = "";
$db['local']['pconnect'] = FALSE;
$db['local']['db_debug'] = TRUE;
$db['local']['cache_on'] = FALSE;
$db['local']['cachedir'] = "";
$db['local']['char_set'] = "utf8mb4";
$db['local']['dbcollat'] = "utf8mb4_unicode_ci";
$db['local']['swap_pre'] = '';
$db['local']['autoinit'] = TRUE;
$db['local']['stricton'] = FALSE;

$db['read_only']['hostname'] = $db_ro['hostname'];
$db['read_only']['username'] = $db_ro['username'];
$db['read_only']['password'] = $db_ro['password'];
$db['read_only']['port']     = $db_ro['port'];
$db['read_only']['database'] = $database_name;
$db['read_only']['dbdriver'] = "mysqli";
$db['read_only']['dbprefix'] = "";
$db['read_only']['pconnect'] = FALSE;
$db['read_only']['db_debug'] = TRUE;
$db['read_only']['cache_on'] = FALSE;
$db['read_only']['cachedir'] = "";
$db['read_only']['char_set'] = "utf8mb4";
$db['read_only']['dbcollat'] = "utf8mb4_unicode_ci";
