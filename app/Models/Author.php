<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $state
 * @property $register_date
 * @property $finished_date
 * @property $change_date
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Author extends Model
{
    
    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'state' => 'required',
		'register_date' => 'required',
		'finished_date' => 'required',
		'change_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','state','register_date','finished_date','change_date'];



}
