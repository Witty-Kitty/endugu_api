<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 30/09/2015
 * Time: 14:43
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Report extends Model{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reports';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['phone_number', 'message', 'category', 'mobile_network'];

} 