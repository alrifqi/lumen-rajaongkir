<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 06/11/18
 * Time: 07.36
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Province extends Model {
    protected $table = 'province';
    public $timestamps = false;
    protected $primaryKey = 'province_id';
}