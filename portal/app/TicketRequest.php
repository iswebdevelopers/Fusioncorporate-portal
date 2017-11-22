<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketRequest extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_datetime',
        'last_updat_datetime'
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'print_online_ind' => 'boolean',
    ];
}
