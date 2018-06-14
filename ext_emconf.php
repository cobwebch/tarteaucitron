<?php

/*********************************************************************
 * Extension configuration file for ext "tarteaucitron".
 *********************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Tarte Au Citron',
    'description' => 'Cookie Manager tarteaucitron.js Integration',
    'category' => 'fe',
    'author' => 'Roberto Presedo',
    'author_email' => 'typo3@cobweb.ch',
    'state' => 'beta',
    'uploadfolder' => '0',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'typo3' => '6.2.0-9.99.99',
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(),
        ),
);

?>