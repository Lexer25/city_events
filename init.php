<?php defined('SYSPATH') or die('No direct script access.');
defined('EVENTS_VERSION') OR define('EVENTS_VERSION', '2.0.0');

Kohana::$config->load('menu')
    ->set('event', array(
        'title' => 'События',
        'url' => 'event',
        'icon' => 'fa-cog',
        'order' => 20,
       
    ));