<?php

namespace App\Models;

class Post {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'author' => 'John Doe',
                'date' => '2024-06-30'
            ],
            [
                'id' => 2,
                'title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'author' => 'Jane Smith',
                'date' => '2024-06-29'
            ],
            [
                'id' => 3,
                'title' => 'Third Post',
                'content' => 'This is the content of the third post.',
                'author' => 'Alice Johnson',
                'date' => '2024-06-28'
            ],
            [
                'id' => 4,
                'title' => 'Fourth Post',
                'content' => 'This is the content of the fourth post.',
                'author' => 'Bob Brown',
                'date' => '2024-06-27'
            ],
            [
                'id' => 5,
                'title' => 'Fifth Post',
                'content' => 'This is the content of the fifth post.',
                'author' => 'Charlie Davis',
                'date' => '2024-06-26'
            ]
        ];
    }
};