<?php
return array
(
    'default' => array
    (
        'type'       => 'mysql',
        'connection' => array(
            'hostname'   => '127.0.0.1',

            'database'   => 'stourwebcms',
            'username'   => 'root',
            'password'   => 'root',
            'persistent' => FALSE,
        ),
        'table_prefix' => 'sline_',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    ),

);