<?php
class TestController extends AppController
{
  var $name = 'test';
  var $uses = array('Categoria');

  function index()
  {
    $categorias = $this->Categoria->find("all");
    $this->set('message', 'MODELO CATEGORIAS');
    $this->set('categorias', $categorias);
    $this->render('index');
  }
}
?>
