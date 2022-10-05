<?php

namespace Source\Model;
use CoffeeCode\DataLayer\DataLayer;


class Usuario extends Datalayer
{

	public function __construct()
    	{
        	
        	parent::__construct("usuario", [], "id", false);
   	 }


}


?>
