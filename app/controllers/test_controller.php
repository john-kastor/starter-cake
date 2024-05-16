<?php
class TestController extends AppController
{
  var $name = 'test';
  var $uses = array('Categoria');

  function index()
  {
    $categorias = $this->Categoria->query("select * from categorias");
    $this->set('message', 'MODELO CATEGORIAS');
    $this->set('categorias', $categorias);
    $this->render('index');
  }
}
?>
