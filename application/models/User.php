<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = "users";

	protected $fillable = [
		'first_name',
		'last_name',
		'username',
		'email',
		'password'
	];

	// protected $hidden = [
    //     'password'
    // ];
}