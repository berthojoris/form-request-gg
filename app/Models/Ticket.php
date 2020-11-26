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
    protected $fillable = [
        'uuid',
        'status',
        'project_id',
        'project_name',
        'departemen_request',
        'user_destination',
        'username_submited',
        'email_submited',
        'digital_asset',
        'background',
        'objective',
        'target_audience',
        'creatif_consideration',
        'support_other_channel',
        'kpi',
        'requirement_rules',
        'reference',
        'project_brief',
        'campaign_period_start',
        'campaign_period_end',
        'estimated_budget',
        'document_upload',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_destination' => 'integer',
        'estimated_budget' => 'double',
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
        return $this->belongsTo(\App\Models\User::class);
    }
}
