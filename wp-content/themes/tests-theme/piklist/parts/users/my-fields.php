<?php
/*
Title: Campos adicionais
*/

piklist('field', array(
  'type' => 'text'
  ,'field' => 'campo_um'
  ,'label' => 'Campo 1'
));


piklist('field', array(
  'type' => 'text'
  ,'field' => 'campo_dois'
  ,'label' => 'Campo 2'
));


piklist('field', array(
    'type' => 'select'
    ,'field' => 'demo_select'
    ,'label' => 'Selecionar opção'
    ,'description' => 'Escolha uma opção no drop-down.'
    ,'help' => 'Aqui vai um texto de ajuda para você.'
    ,'attributes' => array(
      'class' => 'text'
    )
    ,'choices' => array(
      'option1' => 'Opção 1'
      ,'option2' => 'Opção 2'
      ,'option3' => 'Opção 3'
    )
  ));
 
piklist('field', array(
    'type' => 'colorpicker'
    ,'field' => 'demo_colorpicker'
    ,'label' => 'Cores'
    ,'value' => '#aee029'
    ,'description' => 'Selecione uma cor'
    ,'help' => 'Aqui vai um texto de ajuda para você.'
    ,'attributes' => array(
      'class' => 'text'
    )
  ));;

piklist('field', array(
  'type' => 'file'
  ,'field' => 'my_image'
  ,'label' => 'Upload image'
));


