<?php

return [

    /**
     * Assets Configuration
     */
    'assets' => [
        /**
         * Header Assets
         */
        'header' => [
            // JS

            // CSS
            'footercss' => [
                'bootstrap',
                URL(config('paths.templates_path') . '/TPL_PATH/css/style.css')
            ],
        ],
        /**
         * Footer Assets
         */
        'footer' => []
    ]

];
