<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{

    public static function _all() {
        $data = [
            [
                'id' => 1, 
                'first_name' => 'Norene', 
                'last_name' => 'Marquardt',
                'sex' => 'Female',
                'age' => '25',
                'email' => 'Norene@example.com'
            ],
            [
                'id' => 2, 
                'first_name' => 'Norene2', 
                'last_name' => 'Marquardt2',
                'sex' => 'Female',
                'age' => '25',
                'email' => 'Norene2@example.com'
            ],
            [
                'id' => 3, 
                'first_name' => 'Norene3', 
                'last_name' => 'Marquardt3',
                'sex' => 'Female',
                'age' => '25',
                'email' => 'Norene3@example.com'
            ]
        ];

        return $data;
    }

}
