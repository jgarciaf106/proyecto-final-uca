<?php 


/**
 * User class
 */
class Pet
{
	
	use Model;

	protected $table = 'pets';

	protected $allowedColumns = [

		'id',
		'email_address',
		'foto',
		'historia',
		'nombre',
		'tel_contacto'
	];

}