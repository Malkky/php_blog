<?php
	//Format the date
	function formatDate($date){
		return date('j-m-Y, H:i ',strtotime($date)); //europe format, use it like this
	}

	//Shorten the text in default page
	function shortenText($text, $chars = 450){
		$text = $text." ";
		$text = substr($text, 0, $chars); //returns parts of a string
		$text = substr($text, 0, strrpos($text,' ')); //we use this so text isnt cut off in the middle of a word
		$text = $text."...";
		return $text;
	}