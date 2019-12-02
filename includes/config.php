<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'XKCD Comics!',
        'pretty_uri' => false,
        'site_url' => 'https://assignment-2-2.herokuapp.com/',
        'nav_menu' => [
            '' => 'Home',
            'comic' => 'Comic'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
