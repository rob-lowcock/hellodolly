<?php namespace Bobloco\Hellodolly\Facades;

use Illuminate\Support\Facades\Facade;

class Hellodolly extends Facade {

	/**
	* Get the registered name of the component
	*
	* @return string
	*/
	protected static function getFacadeAccessor() { return 'hellodolly'; }

}