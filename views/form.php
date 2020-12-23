<div>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

    * {
      margin: 0;
      padding: 0;
    }

    body {
      width: 100%;
      font-family: 'Lato', sans-serif;
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
    }

    .input:focus {
      border: 2px solid #0079BF;
      outline: none;
    }

    .select {
      padding: 10px 10px;
      border: 1px solid #EBEEF1;
      border-radius: 4px !important;
      width: 100%;
      height: 40px;
      perspective: 1px;
      color: #718A96;
      background-color: #fff;
      font-family: 'Lato', sans-serif;
      font-size: 14px;
      font-weight: 700;
    }

    .select:focus {
      border: 2px solid #0079BF;
      outline: none;
    }

    .input-container {
      display: flex;
      flex: 1;
      flex-direction: column;
      margin-bottom: 10px;
      margin-top: 10px;
    }

    .form-50-50 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      column-gap: 50px;
    }

    .form-40 {
      display: grid;
      grid-template-columns: 0.475fr;
      column-gap: 50px;
    }

    .form-80-20 {
      display: grid;
      grid-template-columns: 1fr 0.2fr;
      column-gap: 50px;
    }

    .form-30-50-20 {
      display: grid;
      grid-template-columns: 0.3fr 0.6fr 0.2fr;
      column-gap: 50px;
    }

    .form-30-40-30 {
      display: grid;
      grid-template-columns: 0.33fr 0.6fr 0.15fr;
      column-gap: 50px;
    }

    .form-20-20 {
      display: grid;
      grid-template-columns: 0.17fr 0.2fr;
      column-gap: 10px;
    }

    .form-30-30-30 {
      display: grid;
      grid-template-columns: 0.33fr 0.34fr 0.33fr;
      column-gap: 50px;
    }

    .label {
      color: #718A96;
      font-size: 14px;
      font-weight: 700;
      margin-left: 5px;
    }

    .option-container .option-label {
      color: #88a6b4;
      font-size: 12px;
      font-weight: 700;
      margin-left: 5px;
      margin-right: 5px;
      margin-top: -4px
    }

    .line {
      border-bottom: 1.2px solid #ccc;
      margin-top: 16px;
    }

    .event-line {
      border-bottom: 1.2px solid #ccc;
      margin-top: 16px;
      margin-bottom: 16px;
    }

    .sub-title {
      font-size: 16px;
      color: #718A96;
      font-family: 'Lato', sans-serif;
      font-weight: 700;
    }

    .title {
      font-size: 18px;
      color: #0079BF;
      margin-bottom: 20px;
      font-family: 'Lato', sans-serif;
      font-weight: 700;
    }

    .title-header {
      font-size: 22px;
      font-weight: 600;
      color: #0079BF;
      margin-bottom: 20px;
      font-weight: 700;
      margin: 38px 0;
    }

    .radio-container {
      display: flex;
      flex-direction: column;
      align-self: center;
    }

    .option-container {
      display: flex;
      flex: 1;
      flex-direction: row;
      width: 15%;
      margin-top: 8px;
      margin-left: 10px;
    }

    .option {
      display: flex;
      flex: 1;
      flex-direction: row;
    }

    #prevBtn {
      background-color: white;
      border: none;
      color: #0079BF;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-right: 30px;
      font-family: 'Lato', sans-serif;
    }

    #prevBtn:focus {
      outline: none;
    }

    #nextBtn {
      padding: 15px 20px;
      border: none;
      background-color: #0079BF;
      color: white;
      border-radius: 5px;
      font-weight: bold;
      box-shadow: 0.5px 2px 0.5px rgba(0, 121, 191, 0.2);
      cursor: pointer;
      font-family: 'Lato', sans-serif;
    }

    #nextBtn:focus {
      outline: none;
    }

    .button-container {
      display: flex;
      flex: 1;
      justify-content: flex-end;
      margin-bottom: 10px;
    }

    .ball-container {
      display: flex;
      flex: 1;
      flex-direction: row;
      align-items: center;
      margin-bottom: 30px
    }

    .ball-active {
      background-color: #0079BF;
      border: none;
      border-radius: 100%;


      min-width: 50px;
      min-height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .ball {
      border: 1px solid #0079BF;
      border-radius: 100%;

      min-width: 50px;
      min-height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .ball-active p {
      color: white !important;
      font-size: 20px;
      font-weight: bold;
      margin-top: 1.5px;
    }

    .ball p {
      color: #0079BF;
      font-size: 20px;
      font-weight: bold;
    }

    .progress-line {
      width: 40%;
      height: 1px;
      background-color: #0079BF;

    }

    .tab {
      display: none
    }

    @media (max-width: 768px) {
      .form-50-50 {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 50px;
      }

      .form-40 {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 50px;
      }

      .form-80-20 {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 50px;
      }

      .form-30-50-20 {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 50px;
      }

      .form-20-20 {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 10px;
      }

      .form-30-30-30 {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 50px;
      }

      .form-30-40-30 {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 50px;
      }

      .button-container {
        display: flex;
        height: 30px;
        justify-content: flex-end;
        align-content: center;

        margin-top: 12px;
      }

      #prevBtn {
        background-color: white;
        border: none;
        color: #0079BF;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        margin-right: 5px;
        height: 40px;
        font-size: 14px;
        display: flex;
        align-items: center;
      }

      #prevBtn:focus {
        outline: none;
      }

      #nextBtn {
        padding: 10px 10px;
        border: none;
        background-color: #0079BF;
        color: white;
        border-radius: 5px;
        font-weight: bold;
        box-shadow: 0.5px 2px 0.5px rgba(0, 121, 191, 0.2);
        cursor: pointer;
        height: 40px;
        font-size: 14px;
      }

      #nextBtn:focus {
        outline: none;
      }
    }
  </style>
  <div class="ball-container">
    <div class="ball">
      <p>1</p>
    </div>
    <div class="progress-line"></div>
    <div class="ball">
      <p>2</p>
    </div>
    <div class="progress-line"></div>
    <div class="ball">
      <p>3</p>
    </div>
  </div>
  <form action="" id="new_post" method="post" name="new_post">
    <input type="hidden" name="mission_request_new_form" value="1" />
    <div class="tab">
      <h3 class="title">Dados de identificação</h3>
      <div class="line">
        <h4 class="sub-title">Dados de contato</h4>
      </div>
      <div class="form-50-50">
        <div class="input-container">
          <label class="label" for="nome">Nome</label>
          <input type="text" name="nome" id="nome" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="email">Email</label>
          <input type="email" name="email" id="email" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="phone-res">Telefone residencial</label>
          <input type="text" name="phone-res" id="phone-res" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="phone-cel">Telefone celular</label>
          <input type="text" name="phone-cel" id="phone-cel" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="diocesse">Diocesse</label>
          <input type="text" name="diocesse" id="diocesse" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="paroquia">Paróquia</label>
          <input type="text" name="paroquia" id="paroquia" class="input" required>
        </div>
      </div>
      <div class="line">
        <h4 class="sub-title">Dados de endereço</h4>
      </div>
      <div class="form-40">
        <div class="input-container">
          <label class="label" for="cep">CEP</label>
          <input type="text" name="cep" id="cep" class="input" required>
        </div>
      </div>
      <div class="form-80-20">
        <div class="input-container">
          <label class="label" for="logradouro">Logradouro</label>
          <input type="text" name="logradouro" id="logradouro" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="num">Número</label>
          <input type="text" name="num" id="num" class="input" required>
        </div>
      </div>
      <div class="form-30-40-30">
        <div class="input-container">
          <label class="label" for="bairro">Bairro</label>
          <input type="text" name="bairro" id="bairro" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="cidade">Cidade</label>
          <input type="text" name="cidade" id="cidade" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="uf">UF</label>
          <select name="uf" class="select">
            <option value="" disabled selected></option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
          </select>
        </div>
      </div>
      <div class="event-line">
        <h4 class="sub-title">Dados de reconhecimento</h4>
      </div>
      <label class="label" for="event">Já realizou algum evento na igreja?</label>
      <div class="option-container">
        <input type="radio" name="event" value="yes" required>
        <label for="yes" class="option-label">Sim</label>
        <input type="radio" name="event" value="no" required>
        <label for="no" class="option-label">Não</label>
      </div>
    </div>
    <div class="tab">
      <h3 class="title">Dados do evento</h3>
      <div class="line">
        <h4 class="sub-title">Dados do evento</h4>
      </div>
      <div class="form-50-50">
        <div class="input-container">
          <label class="label" for="event-name">Nome do evento</label>
          <input type="text" name="event-name" id="event-name" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="local">Local do evento</label>
          <input type="text" name="local" id="local" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="initial-date">Data do evento</label>
          <input type="text" name="initial-date" id="initial-date" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="ending-date">Data final do evento</label>
          <input type="text" name="ending-date" id="ending-date" class="input" required>
        </div>
      </div>
      <div class="form-30-50-20">
        <div class="input-container">
          <label class="label" for="event-type">Tipo do evento</label>
          <input type="text" name="event-type" id="event-type" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="est-public">Estimativa de público</label>
          <input type="text" name="est-public" id="est-public" class="input" required>
        </div>
        <div class="radio-container">
          <label class="label" for="patrocinador">Patrocinador?</label>
          <div class="option-container">
            <input type="radio" name="patrocinador" value="yes" required>
            <label for="yes" class="option-label">Sim</label>
            <input type="radio" name="patrocinador" value="no" required>
            <label for="no" class="option-label">Não</label>
          </div>
        </div>
      </div>
      <div class="form-20-20">
        <div class="radio-container">
          <label class="label" for="ingresso">Cobra ingresso?</label>
          <div class="option-container">
            <input type="radio" name="ingresso" value="yes" onclick="showTicketPrice()" required>
            <label for="yes" class="option-label">Sim</label>
            <input type="radio" name="ingresso" value="no" onclick="hideTicketPrice()" required>
            <label for="no" class="option-label">Não</label>
          </div>
        </div>
        <div class="input-container">
          <div id="ticket-price" style="display: none;">
            <label class="label" for="ingresso-valor">Valor</label>
            <input type="text" name="ingresso-valor" id="ingresso-valor" class="input" required>
          </div>
        </div>
      </div>
      <div class="event-line">
        <h4 class="sub-title">Dados do endereço</h4>
      </div>
      <div id="same-adress">
        <label class="label" for="endereco-solicitante">Mesmo endereço do solicitante?</label>
        <div class="option-container">
          <input type="radio" name="endereco-solicitante" value="yes" onclick="hideEventAdress()" required>
          <label for="yes" class="option-label">Sim</label>
          <input type="radio" name="endereco-solicitante" value="no" onclick="showEventAdress()" required>
          <label for="no" class="option-label">Não</label>
        </div>
      </div>
      <div id="form-adress" style="display: none;">
        <div class="form-40">
          <div class="input-container">
            <label class="label" for="cep-event">CEP</label>
            <input type="text" name="cep-event" id="cep-event" class="input" required>
          </div>
        </div>
        <div class="form-80-20">
          <div class="input-container">
            <label class="label" for="logradouro-event">Logradouro</label>
            <input type="text" name="logradouro-event" id="logradouro-event" class="input" required>
          </div>
          <div class="input-container">
            <label class="label" for="num-event">Número</label>
            <input type="text" name="num-event" id="num-event" class="input" required>
          </div>
        </div>
        <div class="form-30-40-30">
          <div class="input-container">
            <label class="label" for="bairro-event">Bairro</label>
            <input type="text" name="bairro-event" id="bairro-event" class="input" required>
          </div>
          <div class="input-container">
            <label class="label" for="cidade-event">Cidade</label>
            <input type="text" name="cidade-event" id="cidade-event" class="input" required>
          </div>
          <div class="input-container">
            <label class="label" for="uf-event">UF</label>
            <select name="uf-event" class="select">
              <option value="" disabled selected></option>
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AP">AP</option>
              <option value="AM">AM</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA">MA</option>
              <option value="MT">MT</option>
              <option value="MS">MS</option>
              <option value="MG">MG</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PR">PR</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RS">RS</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="SC">SC</option>
              <option value="SP">SP</option>
              <option value="SE">SE</option>
              <option value="TO">TO</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="tab">
      <h3 class="title">Dados de Missionários</h3>
      <div class="line">
        <h4 class="sub-title">Dados do solicitado</h4>
      </div>
      <div class="input-container">
        <label class="label" for="name-priest">Nome missionário/padre solicitado</label>
        <input type="text" name="name-priest" id="name-priest" class="input" required>
      </div>

      <div class="form-30-30-30">
        <div class="input-container">
          <label class="label" for="date-participation">Data da participação</label>
          <input type="text" name="date-participation" id="date-participation" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="hour-initial">Hora início da participação</label>
          <input type="email" name="hour-initial" id="hour-initial" class="input" required>
        </div>
        <div class="input-container">
          <label class="label" for="hour-final">Hora final da participação</label>
          <input type="text" name="hour-final" id="hour-final" class="input" required>
        </div>
      </div>
      <div class="input-container">
        <label class="label" for="activity">Tipo de atividade</label>
        <select name="activity" class="select">
          <option value="" disabled selected></option>
          <option value="Missas">Missas</option>
          <option value="Show">Show</option>
          <option value="Evento">Evento</option>
          <option value="Aprofundamento">Aprofundamento</option>
          <option value="0">Outro</option>
        </select>
        <label class="label" for="activity_text" name="activity_text_label" id="activity_text_label" style="display: none;">Descreva a atividade</label>
        <input type="text" name="activity_text" id="activity_text" class="input" style="display: none;">
      </div>
      <div class="check-container">
        <input type="checkbox" name="terms" id="terms" required>
        <label class="label" for="terms"><a>Li e aceito o termo</a></label>
      </div>
    </div>

    <div class="button-container">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar a pagina anterior</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $("#phone-res").mask("(00) 0000-0000");
    $("#phone-cel").mask("(00) 000000009");
    $("#cep").mask("00000-000");
    $("#cep-event").mask("00000-000");
    $("#uf").mask("SS");
    $("#uf-event").mask("SS");
    $("#date-participation").mask("00/00/0000");
    $("#ending-date").mask("00/00/0000");
    $("#initial-date").mask("00/00/0000");
    $("#hour-initial").mask("00:00");
    $("#hour-final").mask("00:00");
    $("#ingresso-valor").mask("R$099999");

    $("#cep").focusout(function () {
      $.ajax({
        url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
        dataType: 'json',

        success: function (resposta) {
          $("#logradouro").val(resposta.logradouro);
          $("#complemento").val(resposta.complemento);
          $("#bairro").val(resposta.bairro);
          $("#cidade").val(resposta.localidade);
          $("select[name = uf] option[value = " + resposta.uf + " ]").attr("selected", true);
          $("#num").focus();
        }
      });
    });

    $("#cep-event").focusout(function () {
      $.ajax({
        url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
        dataType: 'json',

        success: function (resposta) {
          $("#logradouro-event").val(resposta.logradouro);
          $("#complemento-event").val(resposta.complemento);
          $("#bairro-event").val(resposta.bairro);
          $("#cidade-event").val(resposta.localidade);
          $("select[name = uf-event] option[value = " + resposta.uf + " ]").attr("selected", true);
          $("#num-event").focus();
        }
      });
    });


    $('select[name = activity]').on('change', function() {
      if(this.value == 0) {
        document.getElementById("activity_text").style.display = "block";
        document.getElementById("activity_text_label").style.display = "block";
        document.getElementById("activity_text_label").style.marginTop = "16px";
      } else {
        document.getElementById("activity_text").style.display = "none";
        document.getElementById("activity_text_label").style.display = "none";
        document.getElementById("activity_text_label").style.marginTop = "0px";
      }
    });
  </script>

  <script>
    function showEventAdress() {
      document.getElementById("form-adress").style.display = "block";
    }

    function hideEventAdress() {
      document.getElementById("form-adress").style.display = "none";
    }

    function showTicketPrice() {
      document.getElementById("ticket-price").style.display = "block";
      document.getElementByClass("radio-container").style.marginTop = "0px";
    }

    function hideTicketPrice() {
      document.getElementById("ticket-price").style.display = "none";
      document.getElementByClass("radio-container").style.marginTop = "10px";
    }

    function handleActivity() {
      console.log($( "#activity option:selected" ).text());
      
    }

    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";

      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "flex";
      }

      var ball = document.getElementsByClassName("ball");

      for (var i = 0; i < ball.length; i++) {
        if (currentTab == i) {
          ball[currentTab].classList.add('ball-active');
        } else {
          ball[i].classList.remove('ball-active')
        }
      }

      if (currentTab == x.length - 1) {
        $('#nextBtn').text("Salvar");
      } else {
        $('#nextBtn').text("Continuar");
      }
    }

    function nextPrev(n) {
      var x = document.getElementsByClassName("tab");
      var ball = document.getElementsByClassName("ball");

      if (n == -1) {
        ball[currentTab].classList.remove('ball-active');
      }
      x[currentTab].style.display = "none";
      currentTab = currentTab + n;

      if (currentTab >= x.length) {
        if (document.getElementById("terms").checked) {
          document.getElementById("new_post").submit();

          return false;
        } else {
          document.getElementById("terms").focus();
          alert("Aceite os termos para continuar");
          currentTab = 2;
        }
      }
      showTab(currentTab);
    }
  </script>
</div>