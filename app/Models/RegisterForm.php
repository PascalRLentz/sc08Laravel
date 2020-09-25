<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterForm extends Model
{
    use SoftDeletes;

    protected $table = 'register_form';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'telephone', 'address', 'zip_code', 'city', 'association', 'comment', 'updated_at', 'created_at', 'deleted_at'];
}
