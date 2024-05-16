<?php
class categoria extends AppModel
{
  var $name = 'Categoria';
  var $useTable = 'categorias';
  var $primaryKey = 'categoria_id';

  /**
  var $hasMany = array(
    'Subcategoria' => array(
      'className'     => 'Subcategoria',
      'foreignKey'    => 'categoria_id')
  );
  /**/
}
?>

