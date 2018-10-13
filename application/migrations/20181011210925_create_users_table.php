<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

class Migration_Create_Users_Table extends CI_Migration
{
	public function up() {
	    Capsule::schema()->create('users', function ($table) {
	    	$table->increments('user_id');
	    	$table->string('first_name');
	    	$table->string('last_name');
	    	$table->string('username')->unique();
	    	$table->string('email')->unique();
	    	$table->string('password');
	    	$table->timestamps();
	    });
	}

	public function down() {
		Capsule::schema()->drop('users');
	}
}