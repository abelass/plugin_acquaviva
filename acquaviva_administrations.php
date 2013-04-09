<?php
if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/cextras');
include_spip('base/titrecourt');
    
function acquaviva_upgrade($nom_meta_base_version,$version_cible) {

  $maj = array();
  cextras_api_upgrade(acquaviva_declarer_champs_extras(), $maj['create']); 

  include_spip('base/upgrade');
  maj_plugin($nom_meta_base_version, $version_cible, $maj);

}

function acquaviva_vider_tables($nom_meta_base_version) {
  cextras_api_vider_tables(acquaviva_declarer_champs_extras());
  effacer_meta($nom_meta_base_version);
}
?>