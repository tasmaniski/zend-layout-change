<?php

return [
    'service_manager' => [
        'invokables' => [
            LayoutChange\Listener\LayoutListener::class => LayoutChange\Listener\LayoutListener::class,
        ],
    ],
    'listeners'       => [
        LayoutChange\Listener\LayoutListener::class,
    ],
];
