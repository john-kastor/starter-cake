<?php
class HealthController extends AppController
{
    var $name = 'health';
    var $uses = array();

    function index()
    {
        $this->set('message', 'App is healthy');
        $this->render('index');
    }
}
?>