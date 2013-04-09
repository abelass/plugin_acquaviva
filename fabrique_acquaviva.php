<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2013-04-09 09:09:24
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 5,
  ),
  'paquet' => 
  array (
    'nom' => 'Acquaviva',
    'slogan' => 'Acquaviva',
    'description' => 'Acquaviva',
    'prefixe' => 'acquaviva',
    'version' => '1.0.0',
    'auteur' => 'Web Simple',
    'auteur_lien' => 'http://websimple.be/',
    'licence' => 'GNU/GPL',
    'categorie' => 'edition',
    'etat' => 'dev',
    'compatibilite' => '[3.0.7;3.0.*]',
    'documentation' => '',
    'administrations' => '',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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PdcFhNLvjzzyiAI6fPjw4r57771X6+vrdc2aNcV9v/zlLzWVShVnvvPAPwkQR1wCCq8VK1Zonz59dO3atWUHXyoBuVxOt27dWty/e/fu4ue7775bjTH6yCOPaHfAH3UJcM71SCp+9atfaV1dnS5atKgsCAUbICL6jW98o4vO33DDDZrL5XTVqlX6cSfiU5WAw6mD955169ZpQ0ODfv/73+8CQkEFALXW6nvvvaeqqvv379cpU6ZoXV2drl+/XksBL6dyfzMj2NNOvffee3r22Wfreeedp/v27euiAoB+73vfU1XVV199VYcPH67nnnuu7ty5Uz+NWT/iAPQEoNbWVmbNmqUnnniivvLKKx1U4IwzzlBV1fvuu08rKyv16quv1vb29k+9X586AOUk45ZbbtH6+np98MEHdenSpdq3b19ds2aNzp49W/v06aOPPvroEbf0h3qF7XmOCtKlr3Xr1umYMWN00KBBOnbsWB02bJhOnDhRt2zZokdj0B0ACEOOyo06G8empiauuOIKHTFihC5cuFAPJTWfZv+ifIio84WMyFFvTU1NVFVV9TghekSbV9Q5JMqHyTNCn142tzO9Vfj3OAVyozTVfahnhI5IX0z8wLYpAOvzYfw/ffBHdfY783elT4YVnuo4siDEIywAXfhvFv8fWAwFtihEUAsAAAAASUVORK5CYII=',
        ),
      ),
    ),
    'objets' => 
    array (
    ),
  ),
);

?>