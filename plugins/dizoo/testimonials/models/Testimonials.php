<?php namespace Dizoo\Testimonials\Models;

use Model;

/**
 * Model
 */
class Testimonials extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    
    public $attachOne = [
        'image' => 'System\Models\File'  
    ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dizoo_testimonials_main';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'quote' => 'required'
    ];
}
