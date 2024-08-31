<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $input)
 */
class SubscriptionHistory extends Model
{
    public $table = 'subscription_histories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;

    public $fillable = [
        'subscription_id',
        'reference',
        'service',
        'home_address',
        'school_address',
        'trajectory',
        'phone_number',
        'children_number',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subscription_id' => 'integer',
        'reference' => 'string',
        'service' => 'string',
        'home_address' => 'string',
        'school_address' => 'string',
        'trajectory' => 'string',
        'phone_number' => 'string',
        'children_number' => 'integer',
        'enforcement_date' => 'date',
    ];
}
