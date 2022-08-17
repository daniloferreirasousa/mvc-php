<?php
class galeriaController extends controller {
    public function index() {
        $dados = array();
        $this->loadTemplate('galeria', $dados);
    }   
}