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
    const PRE_ORDER_VALIDATION_FEES = 'PRE_ORDER_VALIDATION_FEES';

    const TICKET_UNIT_PRICE = 'TICKET_UNIT_PRICE';


    // Shop
    const SHOP_PAGINATION = 'SHOP_PAGINATION';

    // Finance Constants
    const LOAN_START_DATE = 'LOAN_START_DATE';
    const LOAN_END_DATE = 'LOAN_END_DATE';
    const TONTINE_START_DATE = 'TONTINE_START_DATE';
    const SUBMISSION_FEES = 'SUBMISSION_FEES';
    const BEST_PARENTS_QUANTITY = 'BEST_PARENTS_QUANTITY';
    const MONTHLY_INTEREST_RATE = 'MONTHLY_INTEREST_RATE';
    const RISK_COEFFICIENT = 'RISK_COEFFICIENT';
    const SCHOOL_YEAR = 'SCHOOL_YEAR';
    const LOAN_MAXIMUM_AMOUNT =  'LOAN_MAXIMUM_AMOUNT';

    // Bus constants
    const BUS_MUTUAL_PRICE = 'BUS_MUTUAL_PRICE';
    const BUS_STANDARD_PRICE = 'BUS_STANDARD_PRICE';
    const BUS_PREMIUM_PRICE = 'BUS_PREMIUM_PRICE';

    const TOMBOLA_START_DATE = 'TOMBOLA_START_DATE';
    const TOMBOLA_COMING_SOON_TEXT = 'TOMBOLA_COMING_SOON_TEXT';

    const DEFAULTS = [
        self::SHOP_PAGINATION => ['SHOP_PAGINATION', '12'],
        self::PRE_ORDER_VALIDATION_FEES => ["PRE-ORDER VALIDATION FEES", "1"],
        self::BUS_MUTUAL_PRICE => ['BUS MUTUAL PRICE', '40 000 Fcfa/mois'],
        self::BUS_STANDARD_PRICE => ['BUS STANDARD PRICE', '60 000 Fcfa/mois'],
        self::BUS_PREMIUM_PRICE => ['BUS PREMIUM PRICE', '200 000 Fcfa/mois'],
        self::BEST_PARENTS_QUANTITY => ['BEST STUDENT PARENTS QUANTITY', '1'],
        self::LOAN_START_DATE => ['LOAN START DATE', '2020-05-10'],
        self::LOAN_END_DATE => ['LOAN END DATE', '2020-11-30'],
        self::TONTINE_START_DATE => ['TONTINE START DATE', '2020-12-01'],
        self::SUBMISSION_FEES => ['SUBMISSION FEES', '5000'],
        self::MONTHLY_INTEREST_RATE => ['MONTHLY INTEREST RATE', '10,25'],
        self::RISK_COEFFICIENT => ['RISK COEFFICIENT', '1.33'],
        self::SCHOOL_YEAR => ['SCHOOL_YEAR', '2020-2021'],
        self::LOAN_MAXIMUM_AMOUNT => ['LOAN MAXIMUM AMOUNT', '300000'],
        self::TICKET_UNIT_PRICE => ['TOMBOLA TICKET UNIT PRICE', '1'],
        self::TOMBOLA_START_DATE => ['TOMBOLA START DATE', '2021/07/24'],
        self::TOMBOLA_COMING_SOON_TEXT => ['TOMBOLA_COMING_SOON_TEXT', 'Tombola service is coming soon'],
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
