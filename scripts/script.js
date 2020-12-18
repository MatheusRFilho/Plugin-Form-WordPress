 

  
    $("#phone-res").mask("(00) 0000-0000");
    $("#phone-cel").mask("(00) 000000009");
    $("#cep").mask("00000-000");
    $("#uf").mask("SS");
    $("#uf-event").mask("SS");
    $("#date-participation").mask("00/00/0000");
    $("#ending-date").mask("00/00/0000");
    $("#initial-date").mask("00/00/0000");
    $("#hour-initial").mask("00:00");
    $("#hour-final").mask("00:00");
    $("#ingresso-valor").mask("R$099999");


    $("#cep").focusout(function(){
      $.ajax({
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			dataType: 'json',

			success: function(resposta){
				$("#logradouro").val(resposta.logradouro);
				$("#complemento").val(resposta.complemento);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
				$("#num").focus();
			}
		});
    });

    $("#cep-event").focusout(function(){
      $.ajax({
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			dataType: 'json',

			success: function(resposta){
				$("#logradouro-event").val(resposta.logradouro);
				$("#complemento-event").val(resposta.complemento);
				$("#bairro-event").val(resposta.bairro);
				$("#cidade-event").val(resposta.localidade);
				$("#uf-event").val(resposta.uf);
				$("#num-event").focus();
			}
		});
    });
 
 
 

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

  var currentTab = 0; 
  showTab(currentTab);

  function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    
    if(n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display ="inline";
    }

    var ball = document.getElementsByClassName("ball");
    
    for (var i = 0; i < ball.length; i++){
      if(currentTab == i) {
        ball[currentTab].classList.add('ball-active');
      } else {
        ball[i].classList.remove('ball-active')
      }     
    } 
   }

  function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    var ball = document.getElementsByClassName("ball");

    if(n == -1) {
      ball[currentTab].classList.remove('ball-active');
    }
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    
    if (currentTab >= x.length) {      
      document.getElementById("new_post").submit();
      return false;
    }
    showTab(currentTab);
  } 
