<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TouristSpot
 * @package App\Models
 * @version October 5, 2021, 10:19 am UTC
 *
 * @property string $Tourist_spot
 * @property string $description
 * @property number $Expenses
 */
class TouristSpot extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = '_spot';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Tourist_spot',
        'description',
        'Expenses'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Tourist_spot' => 'string',
        'description' => 'string',
        'Expenses' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Tourist_spot' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'Expenses' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
