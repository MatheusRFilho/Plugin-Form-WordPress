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
      $("#logradouro").focus();
      $("#bairro").focus();
      $("#cidade").focus();
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
      $("#logradouro-event").focus();
      $("#bairro-event").focus();
      $("#cidade-event").focus();
      $("#num-event").focus();
      
    }
  });
});


$('select[name = activity]').on('change', function () {
  if (this.value == 0) {
    document.getElementById("activity_text").style.display = "block";
    document.getElementById("activity_text_label").style.display = "block";
    document.getElementById("activity_text_label").style.marginTop = "16px";
  } else {
    document.getElementById("activity_text").style.display = "none";
    document.getElementById("activity_text_label").style.display = "none";
    document.getElementById("activity_text_label").style.marginTop = "0px";
  }
});

function showEventAdress() {
  document.getElementById("form-adress").style.display = "block";
}

function hideEventAdress() {
  document.getElementById("form-adress").style.display = "none";
}

function showTicketPrice() {
  document.getElementById("ticket-price").style.display = "block";
  document.getElementsByClassName("radio-container")[0].style.marginTop = "0px";
}

function hideTicketPrice() {
  document.getElementById("ticket-price").style.display = "none";
  document.getElementsByClassName("radio-container")[0].style.marginTop = "10px";
}

var currentTab = 0;

var step_one = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var step_two = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var step_three = [0, 0, 0, 0, 0, 0];

var nome = document.getElementById('nome');
var email = document.getElementById('email');
var phone_cel = document.getElementById('phone-cel');
var diocese = document.getElementById('diocesse');
var paroquia = document.getElementById('paroquia');
var logradouro = document.getElementById('logradouro');
var cep = document.getElementById('cep');
var num = document.getElementById('num');
var cidade = document.getElementById('cidade');
var bairro = document.getElementById('bairro');
var uf = document.getElementsByClassName('uf-validation');
var already_event = document.getElementsByName('event');

var step_one_position = [nome, email, phone_cel, diocese, paroquia, logradouro, cep, num, cidade, bairro, uf,
  already_event
];

var name_event = document.getElementById('event-name');
var date_begin = document.getElementById('initial-date');
var date_end = document.getElementById('ending-date');
var local = document.getElementById('local');
var type = document.getElementById('event-type');
var price = document.getElementById('ingresso-valor');
var logradouro_event = document.getElementById('logradouro-event');
var cep_event = document.getElementById('cep-event');
var num_event = document.getElementById('num-event');
var cidade_event = document.getElementById('cidade-event');
var bairro_event = document.getElementById('bairro-event');
var uf_event = document.getElementsByClassName('uf-validation-event');
var validate_price = document.getElementsByName('ingresso');
var validate_event = document.getElementsByName('endereco-solicitante');

var step_two_position = [name_event, date_begin, date_end, local, type, validate_price, price, validate_event,
  logradouro_event, cep_event,
  num_event, cidade_event, bairro_event, uf_event
];

var name_priest = document.getElementById('name-priest');
var date_participation = document.getElementById('date-participation');
var hour_initial = document.getElementById('hour-initial');
var hour_final = document.getElementById('hour-final');
var activity = document.getElementsByClassName('activity-validation');
var activity_text = document.getElementById('activity_text');

var step_three_position = [name_priest, date_participation, hour_initial, hour_final, activity, activity_text];

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

  validateFields(n);
}

function validateFields(currentTab) {
  if (currentTab == 0) {
    nome.addEventListener("focusout", function (event) {
      if (nome.validity.valid) {
        nome.classList.remove('input-invalid');
        step_one[0] = 1;
      } else {
        nome.classList.add('input-invalid');
        step_one[0] = 0;
      }
    }, false);

    email.addEventListener("input", function (event) {
      if (email.validity.valid) {
        email.classList.remove('input-invalid');
        step_one[1] = 1;
      } else {
        email.classList.add('input-invalid');
        step_one[1] = 0;
      }
    }, false);

    email.addEventListener("focusout", function (event) {
      if (email.validity.valid) {
        email.classList.remove('input-invalid');
        step_one[1] = 1;
      } else {
        email.classList.add('input-invalid');
        step_one[1] = 0;
      }
    }, false);

    phone_cel.addEventListener("focusout", function (event) {
      if (phone_cel.validity.valid) {
        phone_cel.classList.remove('input-invalid');
        step_one[2] = 1;
      } else {
        phone_cel.classList.add('input-invalid');
        step_one[2] = 0;
      }
    }, false);

    diocese.addEventListener("focusout", function (event) {
      if (diocese.validity.valid) {
        diocese.classList.remove('input-invalid');
        step_one[3] = 1;
      } else {
        diocese.classList.add('input-invalid');
        step_one[3] = 0;
      }
    }, false);

    paroquia.addEventListener("focusout", function (event) {
      if (paroquia.validity.valid) {
        paroquia.classList.remove('input-invalid');
        step_one[4] = 1;
      } else {
        paroquia.classList.add('input-invalid');
        step_one[4] = 0;
      }
    }, false);

    logradouro.addEventListener("focusout", function (event) {
      if (logradouro.validity.valid) {
        logradouro.classList.remove('input-invalid');
        step_one[5] = 1;
      } else {
        logradouro.classList.add('input-invalid');
        step_one[5] = 0;
      }
    }, false);

    logradouro.addEventListener("input", function (event) {
      if (logradouro.validity.valid) {
        logradouro.classList.remove('input-invalid');
        step_one[5] = 1;
      } else {
        logradouro.classList.add('input-invalid');
        step_one[5] = 0;
      }
    }, false);

    cep.addEventListener("focusout", function (event) {
      if (cep.validity.valid) {
        cep.classList.remove('input-invalid');
        step_one[6] = 1;
        uf[0].classList.remove('input-invalid');
        step_one[10] = 1;
      } else {
        cep.classList.add('input-invalid');
        step_one[6] = 0;
        uf[0].classList.add('input-invalid');
        step_one[10] = 0;
      }
    }, false);

    cep.addEventListener("input", function (event) {
      if (cep != '') {
        cep.classList.remove('input-invalid');
        step_one[6] = 1;
        uf[0].classList.remove('input-invalid');
        step_one[10] = 1;
      } else {
        cep.classList.add('input-invalid');
        step_one[6] = 0;
        uf[0].classList.add('input-invalid');
        step_one[10] = 0;
      }
    }, false);

    num.addEventListener("focusout", function (event) {
      if (num.validity.valid) {
        num.classList.remove('input-invalid');
        step_one[7] = 1;
      } else {
        num.classList.add('input-invalid');
        step_one[7] = 0;
      }
    }, false);

    cidade.addEventListener("focusout", function (event) {
      if (cidade.validity.valid) {
        cidade.classList.remove('input-invalid');
        step_one[8] = 1;
      } else {
        cidade.classList.add('input-invalid');
        step_one[8] = 0;
      }
    }, false);

    cidade.addEventListener("input", function (event) {
      if (cidade.validity.valid) {
        cidade.classList.remove('input-invalid');
        step_one[8] = 1;
      } else {
        cidade.classList.add('input-invalid');
        step_one[8] = 0;
      }
    }, false);

    bairro.addEventListener("focusout", function (event) {
      if (bairro.validity.valid) {
        bairro.classList.remove('input-invalid');
        step_one[9] = 1;
      } else {
        bairro.classList.add('input-invalid');
        step_one[9] = 0;
      }
    }, false);

    bairro.addEventListener("input", function (event) {
      if (bairro.validity.valid) {
        bairro.classList.remove('input-invalid');
        step_one[9] = 1;
      } else {
        bairro.classList.add('input-invalid');
        step_one[9] = 0;
      }
    }, false);

    uf[0].addEventListener("input", function (event) {
      if (uf[0].value != "") {
        uf[0].classList.remove('input-invalid');
        step_one[10] = 1;
      } else {
        uf[0].classList.add('input-invalid');
        step_one[10] = 0;
      }
    }, false);

    uf[0].addEventListener("focusout", function (event) {
      if (uf[0].value != "") {
        uf[0].classList.remove('input-invalid');
        step_one[10] = 1;
      } else {
        uf[0].classList.add('input-invalid');
        step_one[10] = 0;
      }
    }, false);

  } else if (currentTab == 1) {
    name_event.addEventListener("focusout", function (event) {
      if (name_event.validity.valid) {
        name_event.classList.remove('input-invalid');
        step_two[0] = 1;

      } else {
        name_event.classList.add('input-invalid');
        step_two[0] = 0;
      }
    }, false);

    date_begin.addEventListener("focusout", function (event) {
      if (date_begin.validity.valid) {
        date_begin.classList.remove('input-invalid');
        step_two[1] = 1;
      } else {
        date_begin.classList.add('input-invalid');
        step_two[1] = 0;
      }
    }, false);

    date_end.addEventListener("focusout", function (event) {
      if (date_end.validity.valid) {
        date_end.classList.remove('input-invalid');
        step_two[2] = 1;
      } else {
        date_end.classList.add('input-invalid');
        step_two[2] = 0;
      }
    }, false);

    local.addEventListener("focusout", function (event) {
      if (local.validity.valid) {
        local.classList.remove('input-invalid');
        step_two[3] = 1;
      } else {
        local.classList.add('input-invalid');
        step_two[3] = 0;
      }
    }, false);

    type.addEventListener("focusout", function (event) {
      if (type.validity.valid) {
        type.classList.remove('input-invalid');
        step_two[4] = 1;
      } else {
        type.classList.add('input-invalid');
        step_two[4] = 0;
      }
    }, false);

    price.addEventListener("focusout", function (event) {
      if (price.validity.valid) {
        price.classList.remove('input-invalid');
        step_two[6] = 1;
      } else {
        price.classList.add('input-invalid');
        step_two[6] = 0;
      }
    }, false);

    logradouro_event.addEventListener("focusout", function (event) {
      if (logradouro_event.validity.valid) {
        logradouro_event.classList.remove('input-invalid');
        step_two[8] = 1;
      } else {
        logradouro_event.classList.add('input-invalid');
        step_two[8] = 0;
      }
    }, false);

    logradouro_event.addEventListener("input", function (event) {
      if (logradouro_event.validity.valid) {
        logradouro_event.classList.remove('input-invalid');
        step_two[8] = 1;
      } else {
        logradouro_event.classList.add('input-invalid');
        step_two[8] = 0;
      }
    }, false);

    cep_event.addEventListener("focusout", function (event) {
      if (cep_event.validity.valid) {
        cep_event.classList.remove('input-invalid');
        step_two[9] = 1;
        uf_event[0].classList.remove('input-invalid');
        step_two[13] = 1;
      } else {
        cep_event.classList.add('input-invalid');
        step_two[9] = 0;
        uf_event[0].classList.add('input-invalid');
        step_two[13] = 0;
      }
    }, false);

    cep_event.addEventListener("input", function (event) {
      if (cep_event != '') {
        cep_event.classList.remove('input-invalid');
        step_two[9] = 1;
        uf_event[0].classList.remove('input-invalid');
        step_two[13] = 1;
      } else {
        cep_event.classList.add('input-invalid');
        step_two[9] = 0;
        uf_event[0].classList.add('input-invalid');
        step_two[13] = 0;
      }
    }, false);

    num_event.addEventListener("focusout", function (event) {
      if (num_event.validity.valid) {
        num_event.classList.remove('input-invalid');
        step_two[10] = 1;
      } else {
        num_event.classList.add('input-invalid');
        step_two[10] = 0;
      }
    }, false);

    cidade_event.addEventListener("focusout", function (event) {
      if (cidade_event.validity.valid) {
        cidade_event.classList.remove('input-invalid');
        step_two[11] = 1;
      } else {
        cidade_event.classList.add('input-invalid');
        step_two[11] = 0;
      }
    }, false);

    cidade_event.addEventListener("input", function (event) {
      if (cidade_event.validity.valid) {
        cidade_event.classList.remove('input-invalid');
        step_two[11] = 1;
      } else {
        cidade_event.classList.add('input-invalid');
        step_two[11] = 0;
      }
    }, false);

    bairro_event.addEventListener("focusout", function (event) {
      if (bairro_event.validity.valid) {
        bairro_event.classList.remove('input-invalid');
        step_two[12] = 1;
      } else {
        bairro_event.classList.add('input-invalid');
        step_two[12] = 0;
      }
    }, false);

    bairro_event.addEventListener("input", function (event) {
      if (bairro_event.validity.valid) {
        bairro_event.classList.remove('input-invalid');
        step_two[12] = 1;
      } else {
        bairro_event.classList.add('input-invalid');
        step_two[12] = 0;
      }
    }, false);

    uf_event[0].addEventListener("input", function (event) {
      if (uf_event[0].value != "") {
        uf_event[0].classList.remove('input-invalid');
        step_two[13] = 1;
      } else {
        uf_event[0].classList.add('input-invalid');
        step_two[13] = 0;
      }
    }, false);

    uf_event[0].addEventListener("focusout", function (event) {
      if (uf_event[0].value != "") {
        uf_event[0].classList.remove('input-invalid');
        step_two[13] = 1;
      } else {
        uf_event[0].classList.add('input-invalid');
        step_two[13] = 0;
      }
    }, false);



  } else if (currentTab == 2) {
    // Nome Missionario/padre solicitado, hora final/inicio, data da participação, tipo de atividade
    name_priest.addEventListener("focusout", function (event) {
      if (name_priest.validity.valid) {
        name_priest.classList.remove('input-invalid');
        step_three[0] = 1;
      } else {
        name_priest.classList.add('input-invalid');
        step_three[0] = 0;
      }
    }, false);

    date_participation.addEventListener("focusout", function (event) {
      if (date_participation.validity.valid) {
        date_participation.classList.remove('input-invalid');
        step_three[1] = 1;
      } else {
        date_participation.classList.add('input-invalid');
        step_three[1] = 0;
      }
    }, false);

    hour_initial.addEventListener("focusout", function (event) {
      if (hour_initial.validity.valid) {
        hour_initial.classList.remove('input-invalid');
        step_three[2] = 1;
      } else {
        hour_initial.classList.add('input-invalid');
        step_three[2] = 0;
      }
    }, false);

    hour_final.addEventListener("focusout", function (event) {
      if (hour_final.validity.valid) {
        hour_final.classList.remove('input-invalid');
        step_three[3] = 1;
      } else {
        hour_final.classList.add('input-invalid');
        step_three[3] = 0;
      }
    }, false);

    activity[0].addEventListener("focusout", function (event) {
      if (activity[0].value != "") {
        activity[0].classList.remove('input-invalid');
        step_three[4] = 1;
      } else {
        activity[0].classList.add('input-invalid');
        step_three[4] = 0;
      }
    }, false);

    activity[0].addEventListener("input", function (event) {
      if (activity[0].value != "") {
        activity[0].classList.remove('input-invalid');
        step_three[4] = 1;

        if (activity[0].value == '0') {
          step_three[5] = 0;
        } else {
          step_three[5] = 1;
        }
      } else {
        activity[0].classList.add('input-invalid');
        step_three[4] = 0;
      }
    }, false);

    activity_text.addEventListener("focusout", function (event) {
      if (activity_text.value != "") {
        activity_text.classList.remove('input-invalid');
        step_three[5] = 1;
      } else {
        activity_text.classList.add('input-invalid');
        step_three[5] = 0;
      }
    }, false);
  }
}

function validate_step(currentTab) {
  if (currentTab == 0) {
    var checked_event = false;
    var i = 0;
    while (!checked_event && i < already_event.length) {
      if (already_event[i].checked) checked_event = true;
      i++;
    }
    if (checked_event) {
      step_one[11] = 1;
    } else {
      step_one[11] = 0;
    }

    var valid = 0;
    for (let i = 0; i < step_one.length; i++) {
      if (step_one[i] == 1) {
        if (i == 10) {
          uf[0].classList.remove('input-invalid');
        } else if (i == 11) {
          //TODO deixar em vermelho (Já realizou um evento na igreja)
        } else {
          step_one_position[i].classList.remove('input-invalid');
        }
        valid++;
      } else {
        if (i == 10) {
          uf[0].classList.add('input-invalid');
        } else if (i == 11) {
          //TODO deixar normal (Já realizou um evento na igreja)
        } else {
          step_one_position[i].classList.add('input-invalid');
        }
      }
    }
    //trocar aqui
    if (valid == 12) {
      return true;
    }

  } else if (currentTab == 1) {
    valid = 0;
    var price_event = false;
    var j = 0;
    while (!price_event && j < validate_price.length) {
      if (validate_price[j].checked) {
        price_event = true;
        step_two[5] = validate_price[j].value;
      }

      j++;
    }

    if (step_two[5] == 'no') {
      if (step_two[6] == 0) {
        step_two[6] = 2;
      }
    } else {
      if (step_two[6] == 2) {
        step_two[6] = 0;
      }
    }

    var validate_address = false;
    var k = 0;
    while (!validate_address && k < validate_event.length) {
      if (validate_event[k].checked) {
        validate_address = true;
        step_two[7] = validate_event[k].value;
      }
      k++;
    }

    if (step_two[7] == 'yes') {
      for (let i = 8; i < step_two.length; i++) {
        if (step_two[i] == 0) {
          step_two[i] = 2;
        }
      }
    } else {
      for (let i = 8; i < step_two.length; i++) {
        if (step_two[i] == 2) {
          step_two[i] = 0;
        }
      }
    }

    for (let m = 0; m < step_two.length; m++) {
      if (step_two[m] >= 1 || step_two[m] == 'yes' || step_two[m] == 'no') {
        valid++;
        if (m == 5 || m == 7) {
          //TODO pintar de vermelho (cobrar igresso e mesmo endereço)
        } else if (m != 13) {
          step_two_position[m].classList.remove('input-invalid');
        }
      } else {
        if (m == 5 || m == 7) {
          //TODO pintar de vermelho (cobrar igresso e mesmo endereço)
        } else if (m != 13) {
          step_two_position[m].classList.add('input-invalid');
        }
      }
    }
    //trocar aqui
    if (valid == 14) {
      return true;
    }

  } else if (currentTab == 2) {
    valid = 0;
    for (let i = 0; i < step_three.length; i++) {
      if (step_three[i] == 1) {
        if (i != 4) {
          step_three_position[i].classList.remove('input-invalid');
        } else {
          activity[0].classList.remove('input-invalid');
        }

        valid++;
      } else {
        if (i != 4) {
          step_three_position[i].classList.add('input-invalid');
        } else {
          activity[0].classList.add('input-invalid');
        }
      }
    }

    if (activity[0].value == '0' && activity_text.value == '') {
      step_three[5] = 0;
    } else {
      step_three[5] = 1;
    }

    if (valid == 6) {
      return true;
    }

  }
  return false;
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  var ball = document.getElementsByClassName("ball");

  if (n == -1) {
    ball[currentTab].classList.remove('ball-active');
  }
  x[currentTab].style.display = "none";

  validation = validate_step(currentTab);

  if (n == 1) {
    if (validation == true) {
      currentTab = currentTab + n;
    } else {
      alert('Preencha os campos obrigatórios.');
    }
  } else {
    currentTab = currentTab + n;
  } 
  
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