<?php

/*
echo '<select name="source" id="source" multiple="multiple">';

$data = array('dakar', 'tamba', 'kidira');
$source= $_POST['source'];
foreach($data as $key => $value){

	$beSelected = $source==$value ? ' selected="selected"' : '';

	echo '<option value="'.$value.'" '.$beSelected.' >' .$value. '</option>';


}

echo '</select>';





echo '<select name="source" id="source" multiple="multiple">';

$data = array('dakar', 'tamba', 'kidira');
$source= $_POST['source'];
foreach($data as $key => $value){

	echo '<option value="'.$value.'"';
	if ($source==$value) {
		echo ' selected="selected"';
	}
	echo '>' .$value. '</option>';

}

echo '</select>';





 
$data = [
	'dakar' => 'Dakar',
	'tamba' => 'Tamba',
	'kidira' => 'Kidira',
	'stgermlaye' => 'Saint-Germain-en-Laye',
];

$source= $_POST['source'];
echo '<select name="source" id="source" multiple="multiple">';
foreach($data as $key => $value){

	$beSelected = $source==$key ? ' selected="selected"' : '';

	echo '<option value="'.$key.'"'.$beSelected.'>' .$value. '</option>';

}

echo '</select>';

*/
/*<!--
	<option value="ohjfoojojif" select="selected" > toto </option>;
	<option value="dakar" select="dakar" > dakar </option>;
-->*/



class Utilisateur{

	// attribut
	private $nom;
	private $prenom;
	private $naissance;
	private $pays;
	private $date_creation_compte;

	// constructeur
	//public function __construct($nom, $prenom, $pays, $naissance, $date_creation_compte){
	public function __construct($uid = NULL){
		if ($uid) {
			// requete en BDD
			$retourBdd = [
				'id' => 123,
				'nom' => 'Dia',
				'prenom' => 'Babacar',
				'naissance' => 'Mali',
				'pays' => 'fr',
				'date_creation_compte' => '2010-05-30 16:16:16',
			];

			// et set les propriétés :
			$this->nom= $retourBdd['nom'];
			$this->prenom= $retourBdd['prenom'];
			$this->naissance= $retourBdd['naissance'];
			$this->pays= $retourBdd['pays'];
			$this->date_creation_compte= $retourBdd['date_creation_compte'];
		}
	}
		// methode
	private function propertyExists($property) {
		if (!property_exists($this, $property)) {
			echo 'caca';
			// ou return FALSE;
		}
	}

	public function set($property, $value){
		$this->propertyExists($property);
		$this->$property = $value;
		return $this;// ou pas !
	}
	public function get($property){
		$this->propertyExists($property);
		return $this->$property;
	}





	//Methode de transformation de l'objet de nom et prenom en chaine de caractere
	public function __toString(){
		return "Bonjour {$this->prenom}  {$this->nom}" ;
	}

}


$user = new Utilisateur(1);

var_dump($user); 



$user->set('prenom', 'Ibrahima');
echo($user); // Affiche Bonjour Ibrama Dia

echo '</br>';

