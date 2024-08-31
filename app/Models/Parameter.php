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

    const TMONEY_PAYMENT_METHOD = 'TMONEY';
    const FLOOZ_PAYMENT_METHOD = 'FLOOZ';
    const TMONEY_WEB_METHOD = 'TMONEY-WEB';
    const FLOOZ_WEB_METHOD = 'FLOOZ-WEB';
    const TMONEY_USSD_METHOD = 'TMONEY-USSD';
    const FLOOZ_USSD_METHOD = 'FLOOZ-USSD';

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
        self::BUS_MUTUAL_PRICE => ['BUS MUTUAL PRICE', '40 000 F cfa'],
        self::BUS_STANDARD_PRICE => ['BUS STANDARD PRICE', '60 000 F cfa'],
        self::BUS_PREMIUM_PRICE => ['BUS PREMIUM PRICE', '200 000 F cfa'],
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

    const PREFECTURES_CANTONS = [
            'AGOE-NYIVE' => ['ADETIKOPE', 'AGOE-NYIVE', 'LEGBASSITO', 'TOGBLE', 'VAKPOSSITO', 'ZANGUERA'],

            'AGOU' => ['AGOTIME-NORD', 'AGOTIME-SUD (ADZAKPA)', 'AGOU-AKPOLO', 'AGOU-ATIGBE', 'AGOU-IBOE',
                'AGOU-KEBO', 'AGOU-NYOGBO', 'AGOU-NYOGBO-AGBETIKO', 'AGOU-TAVIE', 'AMOUSSOUKOPE', 'ASSAHOUN-FIAGBE',
                'GADJA', 'KATI', 'KLONOU'],

            'AKEBOU' => ['DJON', 'GBENDE', 'KAMINA-AKEBOU', 'KOUGNOHOU', 'KPALAVE', 'SEREGBENE', 'VEH', 'YALA'],

            'AMOU' => ['ADIVA', 'AMLAME (OUMA)', 'AMOU-OBLO', 'AVEDJE-ITADJI', 'EKPEGNON', 'EVOU', 'GAME', 'HIHEATRO', 'IMLE',
                'KPATEGAN', 'OKPAHOE', 'OTADI', 'SODO', 'TEMEDJA'],

            'ANIE' => ['ADOGBENOU', 'ANIE', 'ATCHINEDJI', 'GLITTO', 'KOLO-KOPE', 'PALAKOKO'],

            'ASSOLI' => ['ALEDJO', 'BAFILO', 'BOULADE', 'DAKO', 'KOUMONDE', 'SOUDOU'],

            'AVE' => ['AKEPE', 'ANDO', 'ASAHOUN', 'BADZA', 'EDZI', 'KEVE', 'NOEPE', 'TOVEGAN', 'ZOLO'],

            'BAS-MONO' => ['AFAGNAGAN', 'AFAGNAN-GBLETA', 'AGBETIKO', 'AGOME-GLOUZOU', 'ATTITOGON', 'HOMPOU', 'KPETSOU'],

            'BASSAR' => ['BAGHAN', 'BANGELI', 'BASSAR', 'BITCHABE', 'DIMOURI', 'KABOU', 'KALANGA', 'MANGA', 'SANDA-AFOWOU',
                'SANDA-KAGBANDA'],

            'BINAH' => ['BOUFALE', 'KEMERIDA', 'KETAO', 'LAMA-DESSI', 'PAGOUDA', 'PESSARE', 'PITIKITA', 'SIRKA', 'SOLLA'],

            'BLITTA' => ['AGBANDI', 'ATCHINTSE', 'BLITTA-GARE', 'BLITTA-VILLAGE', 'DIGUENGUE', 'DIKPELEOU', 'DOUFOULI', 'KATCHENKE',
                'KOFFITI', 'LANGABOU', "M'POTI", 'PAGALA-GARE', 'PAGALA-VILLAGE', 'TCHALOUDE', 'TCHARE-BAOU', 'TCHIFAMA', 'TINTCHRO',
                'WARAGNI', 'WELLY', 'YALOUMBE', 'YEGUE'],

            'CINKASSE' => ['BIANKOURI', 'BOADE', 'CINKASSE', 'GNOAGA', 'GOULOUNGOUSSI', 'NADJOUNDI', 'SAM-NABA', 'TIMBOU'],

            'DANKPEN' => ['BAPURE', 'GUERIN-KOUKA', 'KATCHAMBA', 'KIDJABOUN', 'KOULFEIKOU', 'KOUTCHITCHEOU', 'NAMON', 'NAMPOCH', 'NANDOUTA',
                'NATCHIBORE', 'NATCHITIKPI', 'NAWARE'],

            'DANYI' => ['AHLON', 'ATTIGBA', 'ELAVAGNO', 'EVITA', 'KAKPA', 'YIKPA'],

            'DOUFELGOU' => ['AGBANDE-YAKA', 'ALLOUM', 'BAGA', 'DEFALE', 'KADJALA', 'KOKA', 'KPAHA', 'LEON', 'MASSEDENA', 'NIAMTOUGOU',
                'POUDA', 'SIOU', 'TCHORE', 'TENEGA'],

            'EST-MONO' => ['BADIN-COPE', 'ELAVAGNON', 'GBADJAHE', 'KAMINA', 'KPESSI', 'MORETAN', 'NYAMASSILA'],

            'GOLFE' => ['AFLAO-GAKLI', 'AFLAO-SAGBADO', 'AMOUTIVE', 'BAGUIDA', 'BE-AFEDOME (BE EST)', 'DOUMASSESSE (BE OUEST)',
                'HEDZRANAWOE (BE CENTRE)'],

            'HAHO' => ['AKPAKPAKPE', 'ASRAMA', 'ATSAVE', 'AYITO', 'DALIA', 'DJEMEGNI', 'HAHOMEGBE', 'KPEDOME', 'NOTSE', 'WAHALA'],

            'KERAN' => ['AKPONTE', 'ATALOTE', 'HELOTA', 'KANDE', 'KOUTOUGOU', 'NADOBA', 'OSSACRE', 'PESSIDE', 'WARENGO'],

            'KLOTO' => ['AGOME-TOMEGBE', 'AGOME-YOH', 'GBALAVE', 'HANYIGBA', 'KPADAPE', 'KPALIME', 'KPIME', 'KUMA', 'LAVIE',
                'LAVIE-APEDOME', 'TOME', 'TOVE', 'WOME', 'YOKELE'],

            'KOZAH' => ['ATCHANGBADE', 'AWANDJELO', 'BOHOU', 'DJAMDE', 'KOUMEA', 'KPINZINDE', 'LAMA', 'LANDA', 'LASSA', 'PYA',
                'SARAKAWA', 'SOUMDINA', 'TCHARE', 'TCHITCHAO', 'YADE'],

            'KPELE' => ['KPELE-AKATA', 'KPELE-CENTRE', 'KPELE-DAWLOTOU', 'KPELE-DUTOE', 'KPELE-GBALEDZE', 'KPELE-GOVIE', 'KPELE-KAME',
                'KPELE-NORD', 'KPELE-NOVIVE'],

            'KPENDJAL' => ['BORGOU', 'KOUNDJOARE', 'MANDOURI', 'TAMBIGOU'],

            'KPENDJAL OUEST' => ['NAKI-EST', 'NAMOUNDJOGA', 'NAYEGA', 'OGARO', 'PAPRI', 'POGNO', 'TAMBONGA'],

            'LACS' => ['AGBODRAFO', 'AGOUEGAN', 'AKLAKOU', 'ANEHO', 'ANFOIN', 'FIATA', 'GANAVE', 'GBODJOME', 'GLIDJI', 'VILLE ANEHO'],

            'MO' => ['BOULOHOU', 'DJARKPANGA', 'KAGNINGBARA', 'SAIBOUDE', 'TINDJASSI'],

            'MOYEN-MONO' => ['AHASSOME', 'KATOME', 'KPEKPLEME', 'SALIGBE', 'TADO', 'TOHOUN'],

            'OGOU' => ['AKPARE', 'DATCHA', 'DJAMA', 'GLEI', 'GNAGNA', 'KATORE', 'OUNTIVOU', 'WOUDOU'],

            'OTI' => ['BARKOISSI', 'FARE', 'GALANGASHIE', 'LOKO', 'MANGO', 'NAGBENI', 'SADORI', 'TCHANAGA'],

            'OTI SUD' => ['GANDO', 'KOUMONGOU', 'KOUNTOARE', 'MOGOU', 'NALI', 'SAGBIEBOU', 'TAKPAMBA', 'TCHAMONGA'],

            'SOTOUBOUA' => ['ADJENGRE', 'AOUDA', 'BODJONDE', 'FAZAO', 'KANIAMBOUA', 'KAZABOUA', 'KERIADE', 'SESSARO', 'SOTOUBOUA', 'TABINDE',
                'TCHEBEBE', 'TITIGBE'],

            'TANDJOARE' => ['BAGOU', 'BOGOU', 'BOMBOUAKA', 'BOULOGOU', 'DOUKPERGOU', 'GOUNDOGA', 'LOKO', 'LOKPANOU', 'MAMPROUG',
                'NANDOGA', 'NANO', 'PLIGOU', 'SANGOU', 'SISSIAK', 'TAMONGUE', 'TAMPIALIME'],

            'TCHAMBA' => ['ADJEIDE', 'AFFEM', 'ALIBI I', 'BAGO', 'BALANKA', 'GOUBI', 'KABOLI', 'KOUSSOUNTOU', 'LARINI', 'TCHAMBA'],
            'TCHAOUDJO' => ['AGOULOUDE', 'ALEHERIDE', 'AMAIDE', 'KADAMBARA', 'KEMENI', 'KOLINA', 'KPANGALAM', 'KPARATAOU', 'KPASSOUADE',
                'LAMA-TESSI', 'SOKODE (KOMAH)', 'TCHALO', 'WASSARABOU'],

            'TONE' => ['BIDJENGA', 'DAPAONG', 'KANTINDI', 'KORBONGOU', 'KOURIENTRE', 'LOTOGOU', 'LOUANGA', 'NAKI-OUEST',
                'NAMARE', 'NANERGOU', 'NATIGOU', 'NIOUKPOURMA', 'PANA', 'POISSONGUI', 'SANFATOUTE', 'TAMI', 'TOAGA', 'WARKAMBOU'],

            'VO' => ['AKOUMAPE', 'ANYRONKOPE', 'DAGBATI', 'DZREKPO', 'HAHOTOE', 'MOME', 'SEVAGAN', 'TOGOVILLE', 'VOGAN', 'VO-KOUTIME'],

            'WAWA' => ['BADOU', 'DOUME', 'EKETO', "GBADI-N'KOUGNA", 'GOBE', 'KESSIBO', 'KLABE-EFOUKPA', 'KPETE-BENA', 'OKOU',
                'OUNABE', 'TOMEGBE', 'ZOGBEGAN'],

            'YOTO' => ['AHEPE', 'AMOUSSIME', 'ESSE-GODJIN', 'GBOTO', 'KINI-KONDJI', 'KOUVE', 'SEDOME', 'TABLIGBO', 'TCHEKPO', 'TOKPLI',
                'TOMETY KONDJI', 'ZAFI'],

            'ZIO' => ['ABOBO', 'AGBELOUVE', 'BOLOU', 'DALAVE', 'DAVIE', 'DJAGBLE', 'GAME', 'GAPE-CENTRE', 'GAPE-KPODJI', 'GBATOPE', 'GBLAINVIE', 'KOVIE',
                'KPOME', 'MISSION-TOVE', 'TSEVIE', 'WLI'],
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
