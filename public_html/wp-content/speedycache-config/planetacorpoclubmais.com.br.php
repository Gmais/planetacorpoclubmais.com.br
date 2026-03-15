<?php

if(!defined('ABSPATH')){
	exit();
}

$speedycache_ac_config = array (
  'settings' => 
  array (
    'status' => true,
    'gzip' => true,
    'logged_in_user' => false,
    'mobile_theme' => true,
    'mobile' => true,
  ),
  'excludes' => 
  array (
  ),
);

if(empty($speedycache_ac_config) || !is_array($speedycache_ac_config)){
	$speedycache_ac_config = [];
}