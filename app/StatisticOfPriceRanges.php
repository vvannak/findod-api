<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatisticOfPriceRanges extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'min_price',
        'max_price',
        'increasing_number',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
