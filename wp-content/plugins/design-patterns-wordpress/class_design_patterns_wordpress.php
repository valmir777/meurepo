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
	 * The core plugin  class used to demonstrate Design Patterns in Worpress
	 *   
	 * @package DPWP
	 * @Author Valmir Nascimento
	 *
	 */



//Plugin Twitter
//Para nosso plugin vamos precisar de 3 coisas:
// 1. Uma variável para armazernar e lidar com os udsuários do twitter
// 2. Uma função para recuperar o número de followers
// 3. Uma maneira de renderizar essa informação na tela

//3 passos para criar um Singleton Pattern
class Design_Patterns_Wordpress {
    
    //Variável privada armazenar usuários
	private $twitter_handle;

    //1.Referência estática para a instância da classe
	private static $instance;
    
    //2.Um construtor privado
	private function __construct(){
		//faça o objeto acontecer
		$this->twitter_handle = 'valmirmusica';
		add_filter('the_content', array($this, 'display_twitter_followers_count'));

	}

	//3. Função Pública que retorna a referência para instância da classe
	public static function get_instance(){

		if( null == self::$instance){
				self::$instance =  new self;
		}

		return self::$instance;
	}


	public function display_twitter_followers_count( $content ){
		if(! is_single()){
			return $content;
		}


        $follower_count = '';
        $follower_count = $this->get_twitter_follower_count();

        if ('' != $follower_count && -1 != $follower_count) {
        	$html = '<div class="twitter-follower-count">';
        	$html .= '<span class="twitter-handle">' . $this->twitter_handle . '</span>';
        	$html .= ' tem ' . $follower_count . ' seguidores no Twitter.';
        	$html .= '</div>';

        	$content .= $html;
        }

		return $content;
	}

	private function get_twitter_follower_count() {
		$follower_count = -1;

		//1. Recuperar o HTML do Twitter
		$response = file_get_contents('https://twitter.com/' . $this->twitter_handle . '/');
		//2. Parsear a marcação para encontrr seguidores (com expressão regular)
		preg_match('/<span class="ProfileNav-value">(.*?)<\/span>/', $response, $matches);

		$follower_count = $matches[0][31];
		$follower_count .= $matches[0][32];
		$follower_count .= $matches[0][33];
		$follower_count .= $matches[0][34];
		$follower_count .= $matches[0][35];

		//3. Retornar o número de followers, ou -1 se não for encontrado
        return $follower_count;
	}

} 

