<?php
function getNom($uid){
       $databaseResult=[
                            [
                              'uid'=> 1,
                              'nom'=>'Dia',
                             'prenom'=> 'mimo',
                             'pays' => 'Senegal',
                             'capital' => 'Dakar',
                            ],
                            [
                              'uid'=> 2,
                              'nom'=>'Konare',
                             'prenom'=> 'mimo',
                             'pays' => 'Mali',
                             'capital' => 'Bamako',
                            ],     
                      ];
      foreach($databaseResult as $key => $value){
              if($uid == $value['uid']) {
                // Si on recupere le nom, on retournera le prenom associé
                return $value["prenom"]. ' est de la ville de'.' '.$value["capital"];
               }
        
              if( $pays == $value['pays']) {
                // Si on recupere le nom, on retournera le prenom associé
                return $value["prenom"]. ' '.$value["capital"];
               }        
   // on ne retourne jamais quelque chose dans le foreach
      }
  // Si la valeur est differente de nom, on renvoie un message 
       return 'Cette personne est inconnue'; // ou return NULL
}
 
// Je passe le nom en argument pour afficher le prenom
$value = getNom('2');

  var_dump($value);