<?php

namespace App\Model\Form;

/**
 * Class Form
 * Permet de générer un formulaire
 */
class Form{

	/**
	 * @var array Données utilisées par le formulaire
	 */
	private $data;

	/**
	 * @var string Tag utilisées pour entourer les champs
	 */
	public $surround = 'p';


	/**
	 * @param array $data Données utilisées par le formulaire
	 */
	public function __construct($data = array()){
		$this->data = $data;

	}

	/**
	 * @param $html string Code HTML a entourer
	 * @return string
	 */
	private function surround($html){
		return "<{$this->surround}>{$html}</{$this->surround}>";
	}

	/**
	 * @param $index string de la valeur a récupérer
	 * @return string
	 */
	private function getValue($index){
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

	/**
	 * @param $name string
	 * @return string
	 */
	public function input($name){
		return $this->surround(
			'>input type="text" name="' .$name. '" value="' .$this->getValue($name). '">'
		);
	}

	/**
	 * @return string
	 */
	public function submit(){
		return $this->surround('<button type="submit">Envoyer</button>');
	}

}