<style>
  .form {
    display: flex;
    flex: 1;
    flex-direction: column;
    width: 90%;
    margin: 0 auto;
  }

  .title {
    text-align: center;
    margin-top: 18px;
  }

  .input-container {
    display: flex;
    flex-direction: column;
  }

  .textarea-container {
    display: flex;
    flex-direction: column;
  }

  .label {
    color: #718A96;
    font-size: 14px;
    font-weight: 700;
    margin-left: 5px;
    text-align: left;
    margin-bottom: 8px;
  }

  .input {
    padding: 10px 10px;
    border: 2px solid #EBEEF1;
    border-radius: 4px !important;
    width: 100%;
    height: 40px;
    perspective: 1px;
    color: #718A96;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 16px;
  }

  .input:focus {
    border: 2px solid #0079BF;
    outline: none;
  }

  .line {
    border-bottom: 1px solid #718A96;
  }

  .save-button {
    padding: 15px 20px;
    border: none;
    background-color: #0079BF;
    color: white;
    border-radius: 5px;
    font-weight: bold;
    box-shadow: 0.5px 2px 0.5px rgba(0, 121, 191, 0.2);
    cursor: pointer;
    font-family: 'Lato', sans-serif;

    margin-top: 20px;
    align-self: flex-end;
    width: 10%;
  }

  .save-button:focus {
    outline: none;
  }
</style>
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
?>

<form method="post" class="form" id="settings">
  <h1 class="title">Configuração de Email</h1>
  <hr class="line" />
  <input type="hidden" name="email_configs_new_form" value="1" />
  <div class="input-container">
    <label class="label" for="subject">Assunto</label>
    <input type="text" name="subject" id="subject" class="input" value="<?php echo $subject ?>"></input>
  </div>
  <div class="textarea-container">
    <label class="label" for="body">Corpo do Email</label>
    <textarea name="body" id="body" class="textarea" rows="6" maxlength="254"><?php echo $body ?></textarea>
  </div>
  <h1 class="title">Configuração dos Termos de Uso</h1>
  <hr class="line" />
  <div class="input-container">
    <label class="label" for="terms">Link para os termos</label>
    <input type="text" name="terms" id="terms" class="input" value="<?php echo $terms ?>"></input>
  </div>
  <input type="submit" class="save-button" name="save-button" id="save-button" value="Salvar" />
</form>
<?php
    
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