<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consignment
 * @package App\Models
 * @version May 16, 2020, 3:21 pm UTC
 *
 * @property string $last_name
 * @property string $first_name
 * @property string $email
 * @property string $phone_number
 * @property string $seats_number
 * @property string $details
 * @property string $enforcement_date
 * @property string|\Carbon\Carbon $request_date
 * @property integer $children_number
 * @method static create(array $input)
 */
class Consignment extends Model
{
    //
    use SoftDeletes;

    public $table = 'consignments';

    const CREATED_AT = 'request_date';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'last_name',
        'first_name',
        'email',
        'phone_number',
        'seats_number',
        'details',
        'enforcement_date',
        'request_date',
        'children_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'last_name' => 'string',
        'first_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'seats_number' => 'string',
        'details' => 'string',
        'enforcement_date' => 'date',
        'request_date' => 'datetime',
        'children_number' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'last_name' => 'required',
        'first_name' => 'required',
        'email' => 'required',
        'phone_number' => 'required',
        'seats_number' => 'required',
        'children_number' => 'required'
    ];

}
