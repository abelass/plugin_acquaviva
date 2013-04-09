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
  'mobil' => array(
      'saisie' => 'input',//Type du champ (voir plugin Saisies)
      'options' => array(
            'nom' => 'mobil', 
            'label' => _T('acquaviva:mobil'), 
            'sql' => "varchar(30) NOT NULL DEFAULT ''",
            'restrictions'=>array('voir' => array('auteur' => '')),
      ),
    )    
  );
  return $champs;   
}
?>