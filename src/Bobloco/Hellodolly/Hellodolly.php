<?php namespace Bobloco\Hellodolly;

class Hellodolly {
	
	/**
	* Returns a random line from the first verse of Hello Dolly
	*
	* @return string
	*/
	public function output()
	{
		$lyrics = array(
				"I said hello, dolly, well hello, dolly",
				"It's so nice to have you back where you belong",
				"You're lookin' swell, dolly I can tell, dolly",
				"You're still glowin', you're still crowin', you're still goin' strong",
				"I feel that room swayin', while the band's playin'",
				"One of your old favourite songs from way back when",
				"So take her wrap, fellas. Find her an empty lap, fellas",
				"Dolly'll never go away again"
			);

		return $lyrics[array_rand($lyrics)];
	}

}