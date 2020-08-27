<?php

Class Varable
{
	private $name;
	private $hash;
	private $value;

	public function __construct($thisName, $thisValue)
	{
		$this->name = $thisName;
		$this->hash = self::generateId();
		$this->value = $thisValue;
        $create = fopen("../cash/logs/" . $this->hash . ".jlov", "w");
        fwrite($create, $this->value);

	}

	private static function generateId()
	{
		$nf = [];
        for ($c = 0; $c <= 7; $c += 1) {
            $n = round(rand(0, 9));
            $nf[] = $n;
        }
        $nf = implode("", $nf);
        $id = $nf;
        return $id;
    }

    public function removeAll()
    {
    	unlink("../cash/logs/" . $this->hash . ".jlov");
    }

    public function getName()
    {
    	return $this->name;
    }   

    public function getHash()
    {
    	return $this->hash;
    }

    public function getValue()
    {
    	return $this->value;
    }
	
	
}