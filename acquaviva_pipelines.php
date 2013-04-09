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
   include_spip('inc/session');        
    if($id_auteur=session_get('id_auteur')){
        $flux['data']['id_auteur']=$id_auteur;
        $flux['data']['_hidden'].='<input type="hidden" name="id_auteur" value="'.$id_auteur.'">';
    }
    else{
        $flux['data']['nom']='';
        $flux['data']['email']='';
        $flux['data']['telephone']='';
        $flux['data']['mobile']='';      
    }
    
    
 }
    
     return $flux;
}
	
function acquaviva_formulaire_verifier($flux){
 $form=$flux['args']['form'];


 if($form == 'editer_location' and !_request('exec')){
           
       if(!$id_auteur=_request('id_auteur')){
           $obligatoires=array('nom','email');
           
           foreach($obligatoires as $obligatoire){
               if(!_request($obligatoire))$flux[$obligatoire]=_T("info_obligatoire");
           }

       if (_request('email') AND _request('nom')){
        $mode='6forum';
        include_spip('action/inscrire_auteur');
        if (function_exists('test_inscription'))
            $f = 'test_inscription';
        else 
            $f = 'test_inscription_dist';
        $declaration = $f($mode,_request('email'),_request('nom'),array());
        if (is_string($declaration)) {
            $k = (strpos($declaration, 'email')  !== false) ?
              'email' : 'nom';
            $flux[$k] = _T($declaration);
            }
            else {
            include_spip('base/abstract_sql');
            
                if ($row = sql_fetsel("statut, id_auteur, login, email", "spip_auteurs", "email=" . sql_quote($declaration['email']))){
                    if (($row['statut'] == '5poubelle') AND !$declaration['pass'])
                        // irrecuperable
                        $flux['message_erreur'] = _T('form_forum_access_refuse');    
                    else if (($row['statut'] != 'nouveau') AND !$declaration['pass'])
                        // deja inscrit
                        $flux['message_erreur'] = _T('form_forum_email_deja_enregistre');
                    spip_log($row['id_auteur'] . " veut se resinscrire");
                    }
                }
            }
        if(!_request('id_auteur') AND (!_request('telephone') AND !_request('mobile'))){
             $flux['telephone']=_T("aquaviva:erreur_tel_mobile");
             $flux['mobile']=_T("aquaviva:erreur_tel_mobile");
            }

        }
    }
     return $flux;
}

function acquaviva_pre_insertion($flux){
    if ($flux['args']['table']=='spip_locations'){
        if(!_request('id_auteur')){
            $mode='6forum';
            $nom = _request('nom');
            $email = _request('email');

        $inscrire_auteur = charger_fonction('inscrire_auteur','action');
        $desc = $inscrire_auteur($mode, $email, $nom);
         set_request('id_auteur',$desc['id_auteur']);    
        }
    }
    if ($flux['args']['table']=='spip_auteurs'){
        $flux['data']['mobile']=_request('mobile');
        $flux['data']['telephone']=_request('telephone');    
    }
    
    return $flux;
}

function acquaviva_recuperer_fond($flux){
    if ($flux['args']['fond'] == 'formulaires/editer_location' AND !_request('exec')){
        $champs_login = recuperer_fond('formulaires/champs_login',$flux['args']['contexte']);
        $flux['data']['texte'] = str_replace('<!--extra-->', '<!--extra-->' . $champs_login, $flux['data']['texte']);
    }
    return $flux;
}

?>