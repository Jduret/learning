<?php

interface monPolymorphisme {}


class morph1 implements monPolymorphisme {
	$meteo = 'pluvieux';
}
class morph2 implements monPolymorphisme {
	$ageDuColonel = '51';
}

class monTest {
	public function maMethodePolymorphe(monPolymorphisme $monParametre)
	{
		$class = get_class($monParametre);
		
		switch($class) {
			case 'morph1' : 
				$this->maMethodePolymorphe1($monParametre);
			break;
			case 'morph3' : 
				$this->maMethodePolymorphe2($monParametre);
			break;
			default :
				throw new BadArgumentException("Impossible de trouver "
				."une action pour le paramètre $class");
		}
	}
	
	protected function maMethodePolymorphe1($monParametre)
	{
		return 'Morphisme 1';
	}
	
	protected function maMethodePolymorphe2($monParametre)
	{
		return 'Morphisme 2';
	}
	
	
}






// Code fonctionnel

$tableau = ['ceci', 'est', 'mon', 'test'];
$result = '';
$concatene = function($result, $chaine) {
	return $chaine;
};

foreach($tableau as $subString) {
	$result .= ' ' . $subString;
}

echo $result;

echo implode(' ', $tableau);






















