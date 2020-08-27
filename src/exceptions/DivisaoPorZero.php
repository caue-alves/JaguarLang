<?php

Class DivisaoPorZero extends ArithmeticError {


	public function __construct($message = "", $code = 0, $previous = null)
	{
		parent::__construct($message, $code, $previous);
    }

	public static function AdminMail()
	{
		return 'caue.mendes.rodrigues.alves@gmail.com';
	}


}