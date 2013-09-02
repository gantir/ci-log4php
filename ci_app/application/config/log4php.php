<?php
return array(
    'rootLogger' => array(
        'appenders' => array('default'),
    ),
    'appenders' => array(
        'default' => array(
            'class' => 'LoggerAppenderFile',
        'layout' => array(
                       'class' => 'LoggerLayoutPattern',
                       'conversionPattern' => '%d [%p] %c: %m (at %F line %L)%n'
            ),
            'params' => array(
                'file' => '/tmp/%s.log',
                'append' => true
            )
        )
    )
);
