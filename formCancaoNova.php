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
    $nome                 = $_POST['nome'];
    $email                = $_POST['email'];
    $phone_res            = $_POST['phone_res'];
    $phone_cel            = $_POST['phone-cel'];
    $diocesse             = $_POST['diocesse'];
    $paroquia             = $_POST['paroquia'];
    $cep                  = $_POST['cep'];
    $logradouro           = $_POST['logradouro'];
    $num                  = $_POST['num'];
    $bairro               = $_POST['bairro'];
    $cidade               = $_POST['cidade'];
    $uf                   = $_POST['uf'];
    $event                = $_POST['event'];
    $event_name           = $_POST['event-name'];
    $local                = $_POST['local'];
    $initial_date         = $_POST['initial-date'];
    $ending_date          = $_POST['ending-date'];
    $event_type           = $_POST['event-type'];
    $est_public           = $_POST['est-public'];
    $patrocinador         = $_POST['patrocinador'];
    $ingresso             = $_POST['ingresso'];
    if($ingresso == "yes") {
      $ingresso_valor     = $_POST['ingresso-valor'];
    } else {
      $ingresso_valor     = $_POST['FREE'];
    }
    $endereco_solicitante = $_POST['endereco-solicitante'];
    if ($endereco_solicitante == "yes") {
      $logradouro_event   = $_POST['logradouro'];
      $num_event          = $_POST['num'];
      $bairro_event       = $_POST['bairro'];
      $cidade_event       = $_POST['cidade'];
      $uf_event           = $_POST['uf'];
    } else {
      $logradouro_event   = $_POST['logradouro-event'];
      $num_event          = $_POST['num-event'];
      $bairro_event       = $_POST['bairro-event'];
      $cidade_event       = $_POST['cidade-event'];
      $uf_event           = $_POST['uf-event'];
    }
    $name_priest          = $_POST['name-priest'];
    $date_participation   = $_POST['date-participation'];
    $hour_initial         = $_POST['hour-initial'];
    $hour_final           = $_POST['hour-final'];
    

    if($_POST['activity'] == "0" ) {
      $activity = $_POST['activity_text'];
    } else {
      $activity = $_POST['activity'];
    }
   
    $new_post = array(
        'nome'                  => $nome,
        'email'                 => $email,
        'phone_res'             => $phone_res,
        'phone_cel'             => $phone_cel,
        'diocesse'              => $diocesse,
        'paroquia'              => $paroquia,
        'cep'                   => $cep,
        'logradouro'            => $logradouro,
        'num'                   => $num,
        'bairro'                => $bairro,
        'cidade'                => $cidade,
        'uf'                    => $uf,
        'event'                 => $event,
        'event_name'            => $event_name,
        'local'                 => $local,
        'initial_date'          => $initial_date,
        'ending_date'           => $ending_date,
        'event_type'            => $event_type,
        'est_public'            => $est_public,
        'patrocinador'          => $patrocinador,
        'ingresso'              => $ingresso,
        'ingresso_valor'        => $ingresso_valor,
        'endereco_solicitante'  => $endereco_solicitante,
        'logradouro_event'      => $logradouro_event,
        'num_event'             => $num_event,
        'bairro_event'          => $bairro_event,
        'cidade_event'          => $cidade_event,
        'uf_event'              => $uf_event,
        'name_priest'           => $name_priest,
        'date_participation'    => $date_participation,
        'hour_initial'          => $hour_initial,
        'hour_final'            => $hour_final,
        'activity'              => $activity,
        'status'                => 'Aguardando',
    );

    $postData = ['post_title' => $event_name, 'post_type' => 'mission_request'];
    
    $pid = wp_insert_post($postData);
    
    function email_sender($email, $body, $subject){
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = $email;
        $subject = get_option('subject_mail_mission');
        $body = get_option('body_mail_mission');

        if(wp_mail( $to, $subject, $body )){
          echo '<script>alert("Solicitação realizada com sucesso")</script>'; 
        } else {
          echo '<script>alert("Houve algum problema na solicitação")</script>'; 
        }
      }  
    }

    email_sender($email, $body, $subject );
    
    if ($pid) {
      foreach ($new_post as $field=>$value) {
        update_post_meta($pid, $field, $value);
      }
    }
  }
  include_once(dirname(__FILE__).'/views/form.php');
 
  function my_load_scripts() {
 
    $my_js_ver  = (filemtime( plugin_dir_path( __FILE__ ) . 'scripts/form-script.js' ));
    $my_css_ver = (filemtime( plugin_dir_path( __FILE__ ) . 'styles/main.css' ));
    
    wp_enqueue_script( 'custom_js', plugins_url( 'scripts/form-script.js', __FILE__ ), array(), $my_js_ver );
    wp_register_style( 'my_css',    plugins_url( 'styles/main.css',    __FILE__ ), false,   $my_css_ver );
    wp_enqueue_style ( 'my_css' );
}
my_load_scripts();

}
add_shortcode('formulario', 'form_pedidos_e_missoes');

// ----------------------- Teste para checagem de email ----------------------
// add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
// function log_mailer_errors( $wp_error ){
//   $fn = dirname(__FILE__) . '/mail.log'; // say you've got a mail.log file in your server root
//   $fp = fopen($fn, 'a');
//   var_dump($fp, "Mailer Error: " . $wp_error->get_error_message() ."\n");
//   fclose($fp);

// }

add_action( 'admin_menu', 'mt_add_pages' );

function mt_add_pages() {
    add_submenu_page(
      'edit.php?post_type=mission_request',
      __( 'Configurações do Administrador', 'menu-test' ),
      __( 'Configurações do Administrador', 'menu-test' ),
      'manage_options',
      'emailconfigs',
      'admin_config', 
      1
    );

    function admin_config() {
      include_once(dirname(__FILE__).'/views/adminConfig.php');
    }
}

function mission_request_custom_post_type() {
  register_post_type('mission_request',
      array(
          'labels'            => array(
              'name'          => __('Solicitações de Missão', 'textdomain'),
              'singular_name' => __('Solicitação de Missão', 'textdomain'),
          ),
              'public'        => true,
              'has_archive'   => true,
              'map_meta_cap'  => true
      )

  );
  add_post_type_support( 'mission_request',['author', 'excerpt', 'custom-fields']);
}
add_action('init', 'mission_request_custom_post_type');
?>