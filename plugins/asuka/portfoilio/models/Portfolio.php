<?php namespace Asuka\Portfoilio\Models;

use Model;

/**
 * Model
 */
class Portfolio extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'asuka_portfoilio_portfolios';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
        
    ];


}
