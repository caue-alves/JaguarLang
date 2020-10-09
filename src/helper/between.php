<?php

function between($trigger, $file, $sy) {
	if(strpos($file, $trigger)) {
		return true;
	} else {
		return false;
	}
}