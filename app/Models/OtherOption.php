<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class OtherOption
 * @package App\Models
 * @version October 5, 2021, 10:16 am UTC
 *
 * @property string $Spot_name
 * @property string $Address
 * @property number $Payment
 */
class OtherOption extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = '_another_place';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Spot_name',
        'Address',
        'Payment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Spot_name' => 'string',
        'Address' => 'string',
        'Payment' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Spot_name' => 'required|string|max:255',
        'Address' => 'required|string|max:255',
        'Payment' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
