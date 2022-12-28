<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, culpa enim eos fuga harum incidunt ipsa optio pariatur placeat quidem quo vero voluptatem. Atque deserunt, dolores perferendis quas quibusdam tempore.'
            ],
            [
                'id' => 2,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, culpa enim eos fuga harum incidunt ipsa optio pariatur placeat quidem quo vero voluptatem. Atque deserunt, dolores perferendis quas quibusdam tempore.'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
