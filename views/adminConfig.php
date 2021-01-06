<?php
  $terms = '';
  $body = '';
  $subject = '';

  if(get_option('terms_mission')){
    $terms = get_option('terms_mission');
  } else {
    add_option( 'terms_mission', 'COLOQUE O LINK DOS TERMOS AQUI');
    $terms = get_option('terms_mission');
  }
  
  if(get_option('body_mail_mission')){
    $body = get_option('body_mail_mission');
  } else {
    add_option( 'body_mail_mission', 'COLOQUE O CORPO DO EMAIL AQUI');
    $body = get_option('body_mail_mission');
  }

  if(get_option('subject_mail_mission')){
    $subject = get_option('subject_mail_mission');
  } else {
    add_option( 'subject_mail_mission', 'COLOQUE O ASSUNTO DO EMAIL AQUI');
    $subject = get_option('subject_mail_mission');
  }

  include_once('form-admin.php');
  function my_load_scripts() {
 
    
    $my_css_ver = (filemtime( plugin_dir_path( __FILE__ ) . '../styles/adminStyle.css' ));
    
    wp_register_style( 'admin_css', plugins_url( '../styles/adminStyle.css', __FILE__ ), false, $my_css_ver );
    wp_enqueue_style ( 'admin_css' );
}
my_load_scripts();
  function update() {
    $terms = $_POST['terms'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    update_option( 'terms_mission', $terms);
    update_option( 'body_mail_mission', $body);
    update_option( 'subject_mail_mission', $subject);

  ?>
<script>
  window.location.reload();
</script>
<?php
    }
    
    if(array_key_exists('save-button',$_POST)){
      update();
   }
?>