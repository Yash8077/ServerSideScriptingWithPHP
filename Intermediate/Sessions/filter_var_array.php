<?php

// Sample array
$people = [
    [
        'name' => 'John Doe',
        'age' => 25,
        'email' => 'john@example.com'
    ],
    [
        'name' => 'Jane Smith',
        'age' => 30,
        'email' => 'jane@example.com'
    ],
    [
        'name' => 'Mike Johnson',
        'age' => 35,
        'email' => 'mike@example.com'
    ]
];

// Filters array
$filters = [
    'name' => FILTER_SANITIZE_STRING,
    'age' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => [
            'min_range' => 1,
            'max_range' => 100
        ]
    ],
    'email' => FILTER_VALIDATE_EMAIL
];
print_r(filter_var_array($people, $filters));
?>