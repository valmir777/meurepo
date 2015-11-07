<?php
	/**
	 * Design Patterns in  wordpress
	 *
	 * Um exemplo de plugin wordpress para demonstrar 2 design patterns no contexto
	 * do desenvolvimento WordPress
	 *
	 * @package DPWP
	 * @author Valmir Nascimento <valmir@souldigital.com.br>
	 * @license GPL-2.0+
	 * @link http://vndd.net
	 * @copyright 2014 Valmir Nascimento
	 * 
	 * @wordpress-plugin
	 * Plugin name: Design Patterns in Wordpress
	 * Plugin URI: http://vndd.net
	 * Description: Um exemplo de plugin wordpress para demonstrar 2 design patterns no contexto
	 * do desenvolvimento WordPress
	 * Version: 1.0.0
	 * Author: Valmir Nascimento
	 * Author URI: http://vndd.net
	 * License: GPL-2.0+
	 * Lincense URI: http://vndd.net
	 *
	 */


	// O que é Design Patterns?
	// Uma maneira formal de documentar soluções 
	// para problemas


//Se este arquivo for acessado diretamente, abort execution.
// O abaixo protege o plugin e impede que o este seja acessado diretamente
// Aqui tutorial explicando a diferença entre WPINC e ABSPATH
//http://wordpress.stackexchange.com/questions/108418/what-are-the-differences-between-wpinc-and-abspath
if ( ! defined( 'WPINC' ) ) die;

//Chama o arquivo com a classe
include_once('class_design_patterns_wordpress.php');
add_action('plugins_loaded', array('Design_Patterns_Wordpress', 'get_instance'));





