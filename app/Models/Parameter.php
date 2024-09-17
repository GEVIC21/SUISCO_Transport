<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Parameter
 * @package App\Models
 * @version April 6, 2020, 9:09 am UTC
 *
 * @property string label
 * @property string description
 * @property string value
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parameter whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parameter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parameter whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parameter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parameter whereCreatedAt($value)
 * @method static create(array $array)
 * @method static whereIn(string $string, string[] $array)
 */
class Parameter extends Model
{
    use SoftDeletes;

    public $table = 'parameters';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // Shop


    // Bus constants
    const BUS_MUTUAL_PRICE = 'BUS_MUTUAL_PRICE';
    const BUS_STANDARD_PRICE = 'BUS_STANDARD_PRICE';
    const BUS_PREMIUM_PRICE = 'BUS_PREMIUM_PRICE';

    const PRIX_STANDARD_1H_1KM = "PRIX_STANDARD_1H_1KM";
    const PRIX_PREMIUM_1H_1KM = "PRIX_PREMIUM_1H_1KM";

    const DEFAULTS = [
        self::BUS_MUTUAL_PRICE => ['BUS MUTUAL PRICE', '40 000 Fcfa/mois'],
        self::BUS_STANDARD_PRICE => ['BUS STANDARD PRICE', '60 000 Fcfa/mois'],
        self::BUS_PREMIUM_PRICE => ['BUS PREMIUM PRICE', '200 000 Fcfa/mois'],
        self::PRIX_STANDARD_1H_1KM => ['PRIX STANDARD SUR 1 HEURE ET 1KM POUR UN MOIS', '14257'],
        self::PRIX_PREMIUM_1H_1KM => ['PRIX STANDARD SUR 1 HEURE ET 1KM POUR UN MOIS', '57028'],
    ];


    public $fillable = [
        'label',
        'description',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'label' => 'string',
        'description' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'label' => 'required',
        'description' => 'required',
        'value' => 'required'
    ];

}
