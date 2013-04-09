<?php
/**
 * Utilisations de pipelines par Acquaviva
 *
 * @plugin     Acquaviva
 * @copyright  2013
 * @author     Web Simple
 * @licence    GNU/GPL
 * @package    SPIP\Acquaviva\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function acquaviva_formulaire_charger($flux){
 $form=$flux['args']['form'];

 // cré un contact si pas encore existant
 if($form == 'editer_location' and !_request('exec')){
           
    if($id_auteur=session_get('id_auteur')){
        $data=sql_fetsel('*','spip_auteurs','id_auteur='.$id_auteur);
        $flux['data']['nom']=$data['nom'];
        $flux['data']['email']=$data['email'];
        $flux['data']['telephone']=$data['telephone'];
        $flux['data']['mobile']=$data['mobile'];        
    }
    else{
        $flux['data']['nom']='';
        $flux['data']['email']='';
        $flux['data']['telephone']='';
        $flux['data']['mobile']='';      
    }
    
    $flux['data']['_hidden'].='<input type="hidden" name="id_auteur" value="'.$id_auteur.'">';
    
     return($flux);
}
	
function acquaviva_formulaire_verifier($flux){
 $form=$flux['args']['form'];

 // cré un contact si pas encore existant
 if($form == 'editer_location' and !_request('exec')){
           
       if($flux['data']['mail_inscription'] AND _request('mail_inscription')){
           if($id_auteur=sql_getfetsel('id_auteur','spip_auteurs','email='.sql_quote(_request('mail_inscription')))){
               $flux['data']['mail_inscription']='';
           }
           
       }
        if (count($flux['data'])) unset($flux['data']['message_erreur']);
    }
     return($flux);
}

function acquaviva_formulaire_traiter($flux){
 $form=$flux['args']['form'];

 // cré un contact si pas encore existant
 if($form == 'editer_location' and !_request('exec')){
       if($flux['data']['mail_inscription'] AND _request('mail_inscription')){
           if($id_auteur=sql_getfetsel('id_auteur','spip_auteurs','email='.sql_quote(_request('mail_inscription')))){
               $flux['data']['mail_inscription']='';
           }
           
       }
        if (count($flux['data'])) unset($flux['data']['message_erreur']);
    }
     return($flux);
}

function acquaviva_recuperer_fond($flux){
    if ($flux['args']['fond'] == 'formulaires/editer_location'){
        $champs_login = recuperer_fond('formulaires/champs_login',$flux['data']);
        $flux['data']['texte'] = str_replace('<!--extra-->', '<!--extra-->' . $champs_login, $flux['data']['texte']);
    }
    return $flux;
}

?>