<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['copyright'] = '{title_legend},name,type,copyright';

$GLOBALS['TL_DCA']['tl_module']['fields']['copyright'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['copyright'],
    'exclude'   => true,
    'search'    => true,
    'default'   => '© {{date::Y}} {{page::rootTitle|specialchars}}',
    'inputType' => 'text',
    'eval'      => ['maxlength' => 255, 'tl_class' => 'w50'],
    'sql'       => 'varchar(255) NULL'
];
