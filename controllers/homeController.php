<?php
class homeController extends controller {

    public function index() {
       $anuncios = new Anuncios();
       
        $dados = array(
            'quantidade' => $anuncios->getQuantidade(),
            'titulo' => $anuncios->getTitulo(),
            'descricao' => $anuncios->getDescricao(),
            'criador' => $anuncios->getCriador()
        );

        $this->loadTemplate('home', $dados);
    }
    
    
}