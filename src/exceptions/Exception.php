<?php

Class CompileException extends Exception
{
	protected $message = "CompileError: Please verify if you setup the compiler correctly";

	public function __construct($message, $code=0, Exception $previous = null)
	{ 
		parent::__construct($message, $code, $previous);
	}

	public static function AdminMail()
	{
		return 'caue.mendes.rodrigues.alves@gmail.com';
	}
}