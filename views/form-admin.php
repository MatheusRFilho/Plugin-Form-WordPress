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