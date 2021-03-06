<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_destination' => 'integer',
        'estimated_budget' => 'double',
        'digital_asset' => 'array'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'campaign_period_start',
        'campaign_period_end',
    ];


    public function userDestination()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_destination', 'id');
    }

    public function history()
    {
        return $this->hasMany(\App\Models\Tickethistory::class, 'ticket_id', 'id');
    }

    public function scopeForme($query)
    {
        if(myid() == 1) {
            return $query;
        } else {
            return $query->where('user_destination', myid());
        }
    }
}
