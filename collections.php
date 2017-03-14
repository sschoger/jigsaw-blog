<?php

return [
    'posts' => [
        'sort' => ['-date'],

        /**
         * Paths
         *
         *    - allow you to specify the path structure for each collection item
         *    - if omitted, path defaults to `/the-slugified-file-name`
         *    - can specify just a subdirectory, and path will default to `subdirectory/the-slugified-file-name`
         *    - can be a function, which will automatically receive the collection item as its first parameter
         *    - can use a string syntax with variable replacement, similar to Laravel's route syntax
         */
        'path' => function ($item) {
            list($year, $month, $day) = parseDate($item->date);
            return sprintf('%s/%s/%s/%s', $year, $month, $day, str_slug($item['title']));
        },

        'helpers' => [
            'formatDate' => function ($item, $format) {
                $date = DateTime::createFromFormat('U', $item->date);
                return $date->format($format);
            }
        ]
    ],
];

function parseDate($timestamp) {
    $date = DateTime::createFromFormat('U', $timestamp);

    return [
        $date->format('Y'),
        $date->format('m'),
        $date->format('d'),
    ];
}