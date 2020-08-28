<?php

Class IssoNaoEphp extends Exception
{
	public function __construct($message, $code=0, Exception $previous=null) {
		$this->message = $message;
		$this->code = $code;
		$this->previous = $previous;
	}

	public static function AdminMail()
	{
		return 'caue.mendes.rodrigues.alves@gmail.com';
	}
}