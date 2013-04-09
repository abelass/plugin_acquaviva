<?php
if (!defined("_ECRIRE_INC_VERSION")) return;

function acquaviva_declarer_champs_extras($champs = array()) {
  $champs['spip_auteurs']=array(
  'telephone' => array(
      'saisie' => 'input',//Type du champ (voir plugin Saisies)
      'options' => array(
            'nom' => 'telephone', 
            'label' => _T('acquaviva:telephone'), 
            'sql' => "varchar(30) NOT NULL DEFAULT ''",
            'restrictions'=>array('voir' => array('auteur' => '')),
      ),
    ),
  'mobile' => array(
      'saisie' => 'input',//Type du champ (voir plugin Saisies)
      'options' => array(
            'nom' => 'mobile', 
            'label' => _T('acquaviva:mobile'), 
            'sql' => "varchar(30) NOT NULL DEFAULT ''",
            'restrictions'=>array('voir' => array('auteur' => '')),
      ),
    )    
  );
  return $champs;   
}
?>