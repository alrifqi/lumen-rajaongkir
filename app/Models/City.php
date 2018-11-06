<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 06/11/18
 * Time: 07.38
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class City extends Model {
    protected $table = 'city';
    public $timestamps = false;
    protected $primaryKey = 'city_id';
}