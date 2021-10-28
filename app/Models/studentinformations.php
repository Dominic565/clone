<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class studentinformations
 * @package App\Models
 * @version October 28, 2021, 3:21 am UTC
 *
 * @property string $Name
 * @property integer $Age
 * @property integer $ContactNO
 * @property string $Address
 * @property string $Gender
 * @property string $Citizenship
 */
class studentinformations extends Model
{

    use HasFactory;

    public $table = 'studentinformations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Age',
        'ContactNO',
        'Address',
        'Gender',
        'Citizenship'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Age' => 'integer',
        'ContactNO' => 'integer',
        'Address' => 'string',
        'Gender' => 'string',
        'Citizenship' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:255',
        'Age' => 'required|integer',
        'ContactNO' => 'required|integer',
        'Address' => 'required|string|max:255',
        'Gender' => 'required|string|max:255',
        'Citizenship' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
