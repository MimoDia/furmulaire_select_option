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

// Creation de l'objet nommmé Utilisateur


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

// Creation de l'objet nommmé Utilisateur

 // creation d l'objet utilisateur
  class Utilisateur{

  
   // declaration des propriétes ou attribut
    private $nom;
    private $prenom;
    private $capital;
    private $pays;
    
   
    // methodes
     public function __construct($uid=NULL){
      
       if($uid){
             

           $databaseResult=[

                              'uid'=> 1,
                              'nom'=>'Dia',
                             'prenom'=> 'mimo',
                             'pays' => 'Senegal',
                             'capital' => 'Dakar',

                      ];
       $this->nom= $databaseResult['nom'];
       $this->prenom = $databaseResult['prenom'];
       $this->capital = $databaseResult['capital'];
       $this->pays = $databaseResult['pays'];
                 
       }
       

    }
    
     private function proprietExisteElle($propriete){
        /*
         if(property_exists($this, $propriete)){
           return true;
         }
        return false;
        */
         if(!property_exists($this, $propriete)){
           throw new Exception('La propriété ' . $propriete . ' n\'existe pas ! bitch');
         }
      }  
         
         //affecter vune valeur a une propriete   
      public function set($propriete, $valeur){
      	// $this-> fait refe à la class
      	//$this->: Peut faire reference a la methode comme à la propriete
      	// La propriete de ... ou la class de ...

        $this->proprietExisteElle($propriete);
        $this->$propriete = $valeur; 
        return $this;
      }      

// recuperer la valeur de la propriete $this->$propriete
      public function get($propriete){
        $this->proprietExisteElle($propriete);
        return $this->$propriete; 
      }
  }
  
  $user= new Utilisateur(1);

  var_dump($user->get('nom')); // Affiche Dia
  // var_dump($user->get('nomlll')); // Affiche :  Fatal error: Uncaught Exception: La propriété nomlll n'existe pas ! bitch 