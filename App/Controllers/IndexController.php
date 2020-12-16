<?php

// Pt - Controllers - são classes controladoras, que são responsáveis por fazer o intermédio entre o diretório Model e o diretório Views.
// En - Controllers - are controller classes, which are responsible for making the intermediate between the Model directory and the Views directory.

// namespace - 
namespace App\Controllers;

// recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


// models
use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action {

	public function index() {

		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		@$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {

		$info = Container::getModel('Info');

		$informacoes = $info->getInfo();
		
		@$this->view->dados = $informacoes;

		$this->render('sobreNos', 'layout1');
	}

}


?>
