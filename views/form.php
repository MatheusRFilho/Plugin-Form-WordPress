<div>
<h1 class="title-header">Agende uma missão Canção Nova</h1>

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
  <div class="form-30-50-20">
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
      <input type="text" name="uf" id="uf" class="input" required>
    </div>  
  </div>
  <div class="event-line">
    <h4 class="sub-title">Dados de reconhecimento</h4>
  </div>
  <label class="label" for="event" >Já realizou algum evento na igreja?</label>
  <div class="option-container">
    <input type="radio" name="event"  value="yes" required>
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
      <label class="label" for="ingresso" >Cobra ingresso?</label>
      <div class="option-container">
        <input type="radio" name="ingresso" value="yes"  onclick="showTicketPrice()" required>
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
      <label class="label" for="endereco-solicitante" >Mesmo endereço do solicitante?</label>
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
      <div class="form-30-50-20">
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
          <input type="text" name="uf-event" id="uf-event" class="input" required>
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
      <input type="text" name="activity" id="activity" class="input" required>
    </div>
  </div>

  <div class="button-container">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar a pagina anterior</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


</div>