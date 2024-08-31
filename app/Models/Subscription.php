<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subscription
 * @package App\Models
 * @version May 15, 2020, 10:02 am UTC
 *
 * @property string reference
 * @property string service
 * @property string home_address
 * @property string school_address
 * @property string trajectory
 * @property string phone_number
 * @property integer children_number
 * @property string enforcement_date
 * @property string|\Carbon\Carbon request_date
 * @method static create(array $input)
 */
class Subscription extends Model
{
    use SoftDeletes;

    public $table = 'subscriptions';

    const CREATED_AT = 'request_date';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'reference',
        'service',
        'home_address',
        'school_address',
        'trajectory',
        'phone_number',
        'children_number',
        'enforcement_date',
        'request_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reference' => 'string',
        'service' => 'string',
        'home_address' => 'string',
        'school_address' => 'string',
        'trajectory' => 'string',
        'phone_number' => 'string',
        'children_number' => 'integer',
        'enforcement_date' => 'date',
        'request_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'service' => 'required',
        'home_address' => 'required',
        'school_address' => 'required',
        'trajectory' => 'required',
        'phone_number' => ['required', 'string', 'phone:TG,AUTO']
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function histories()
    {
        return $this->hasMany(SubscriptionHistory::class, 'subscription_id');
    }

}
