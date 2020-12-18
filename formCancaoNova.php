<?php
/*
Plugin Name: Pedidos e Missões
Plugin URI:  
Description: 
Version:     1.0.0
Author:      Matheus Filho e Gabriel Pires
Author URI:  
*/

function form_pedidos_e_missoes() { 
  if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['mission_request_new_form'] ) &&  $_POST['mission_request_new_form'] == "1") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone_res = $_POST['phone_res'];
    $phone_cel = $_POST['phone-cel'];
    $diocesse = $_POST['diocesse'];
    $paroquia = $_POST['paroquia'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $event = $_POST['event'];
    $event_name = $_POST['event-name'];
    $local = $_POST['local'];
    $initial_date = $_POST['initial-date'];
    $ending_date = $_POST['ending-date'];
    $event_type = $_POST['event-type'];
    $est_public = $_POST['est-public'];
    $patrocinador = $_POST['patrocinador'];
    $ingresso = $_POST['ingresso'];
    if($ingresso == "yes") {
      $ingresso_valor = $_POST['ingresso-valor'];
    } else {
      $ingresso_valor = $_POST['FREE'];
    }
    $endereco_solicitante = $_POST['endereco-solicitante'];
    if ($endereco_solicitante == "yes") {
      $logradouro_event = $_POST['logradouro'];
      $num_event =  $_POST['num'];
      $bairro_event = $_POST['bairro'];
      $cidade_event = $_POST['cidade'];
      $uf_event = $_POST['uf'];
    } else {
      $logradouro_event = $_POST['logradouro-event'];
      $num_event = $_POST['num-event'];
      $bairro_event = $_POST['bairro-event'];
      $cidade_event = $_POST['cidade-event'];
      $uf_event = $_POST['uf-event'];
    }
    $name_priest = $_POST['name-priest'];
    $date_participation = $_POST['date-participation'];
    $hour_initial = $_POST['hour-initial'];
    $hour_final = $_POST['hour-final'];
    $activity = $_POST['activity'];
   
    $new_post = array(
        'nome' => $nome,
        'email' => $email,
        'phone_res' => $phone_res,
        'phone_cel' => $phone_cel,
        'diocesse' => $diocesse,
        'paroquia' => $paroquia,
        'cep' => $cep,
        'logradouro' => $logradouro,
        'num' => $num,
        'bairro' => $bairro,
        'cidade' => $cidade,
        'uf' => $uf,
        'event' => $event,
        'event_name' => $event_name,
        'local' => $local,
        'initial_date' => $initial_date,
        'ending_date' => $ending_date,
        'event_type' => $event_type,
        'est_public' => $est_public,
        'patrocinador' => $patrocinador,
        'ingresso' => $ingresso,
        'ingresso_valor' => $ingresso_valor,
        'endereco_solicitante' => $endereco_solicitante,
        'logradouro_event' => $logradouro_event,
        'num_event' => $num_event,
        'bairro_event' => $bairro_event,
        'cidade_event' => $cidade_event,
        'uf_event' => $uf_event,
        'name_priest' => $name_priest,
        'date_participation' => $date_participation,
        'hour_initial' => $hour_initial,
        'hour_final' => $hour_final,
        'activity' => $activity,
    );

    $postData = ['post_title' => $event_name, 'post_type' => 'mission_request'];

    $pid = wp_insert_post($postData);
    
    if ($pid) {
      foreach ($new_post as $field=>$value) {
        update_post_meta($pid, $field, $value);
      }
    }
    else {
      var_dump($pid);
    }
  }

  function register_styles() {
    wp_register_style( 'main.css',  (dirname(__FILE__)).'/styles/main.css' ) ;
    wp_enqueue_style( 'main.css' );
  }
  // Register style sheet.
  add_action( 'wp_enqueue_scripts', 'register_styles' );
  include_once(dirname(__FILE__).'/views/form.php');

  

//   function myscripts() {
//     //get some external script that is needed for this script
//     wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js'); 
//     $script = get_template_directory_uri() . '/scripts/script.js';
//     wp_register_script('myfirstscript', 
//                         $script, 
//                         array ('jquery', 'jquery-ui'), 
//                         false, false);
//     //always enqueue the script after registering or nothing will happen
//     wp_enqueue_script('fullpage-slimscroll');
     
// }
// add_action("wp_enqueue_script", "myscripts");
}

add_shortcode('formulario', 'form_pedidos_e_missoes');

function mission_request_custom_post_type() {
  register_post_type('mission_request',
      array(
          'labels'      => array(
              'name'          => __('Solicitações de Missão', 'textdomain'),
              'singular_name' => __('Solicitação de Missão', 'textdomain'),
          ),
              'public'      => true,
              'has_archive' => true,
              'map_meta_cap'=> true
      )
  );
  add_post_type_support( 'mission_request',['author', 'excerpt', 'custom-fields']);
}
add_action('init', 'mission_request_custom_post_type');
?>