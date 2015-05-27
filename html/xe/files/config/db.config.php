<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysql',
    'db_port' => '3306',
    'db_hostname' => 'localhost',
    'db_userid' => 'abs1111',
    'db_password' => 'Seoslow1207',
    'db_database' => 'abs1111',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysql',
      'db_port' => '3306',
      'db_hostname' => 'localhost',
      'db_userid' => 'abs1111',
      'db_password' => 'Seoslow1207',
      'db_database' => 'abs1111',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://abs1111.dothome.co.kr/xe/',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'Y',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
    1 => '121.165.98.179',
  ),
  'lang_type' => 'ko',
  'use_sitelock' => 'N',
  'sitelock_title' => 'Maintenance in progress...',
  'sitelock_message' => NULL,
);