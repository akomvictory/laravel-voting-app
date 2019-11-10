<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Setting
 * @package App\Models
 * @version November 9, 2019, 11:25 pm UTC
 *
 * @property string|\Carbon\Carbon nomination_start_date
 * @property string|\Carbon\Carbon nomination_end_date
 * @property string|\Carbon\Carbon voting_start_date
 * @property string|\Carbon\Carbon voting_end_date
 */
class Setting extends Model
{
    use SoftDeletes;

    public $table = 'settings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomination_start_date',
        'nomination_end_date',
        'voting_start_date',
        'voting_end_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomination_start_date' => 'datetime',
        'nomination_end_date' => 'datetime',
        'voting_start_date' => 'datetime',
        'voting_end_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomination_start_date' => 'required',
        'nomination_end_date' => 'required',
        'voting_start_date' => 'required',
        'voting_end_date' => 'required'
    ];

    
}
