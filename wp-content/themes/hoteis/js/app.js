$(document).ready(function() {
    $("#Entrada").datepicker({
      changeMonth: true,
      changeYear: true
    });
        $("#Saida").datepicker({
      changeMonth: true,
      changeYear: true
    });


var arrows = $(".ui-corner-all").text('');

arrows = arrows;


  // $(".container2 button:nth-child(1)").attr("onclick", "DateB(this,0)");
  // $(".container2 button:nth-child(2)").attr("onclick", "DateB(this,2)");

  $(".ui-datepicker-holder").find('button').attr('type', 'button');

  // Default dropdown action to show/hide dropdown content
  $('.js-dropp-action').click(function(e) {
    e.preventDefault();
    $(this).toggleClass('js-open');
    $(this).parent().next('.dropp-body').toggleClass('js-open');
  });

  // Using as fake input select dropdown
  $('label').click(function() {
    $(this).addClass('js-open').siblings().removeClass('js-open');
    $('.dropp-body,.js-dropp-action').removeClass('js-open');
  });
  // get the value of checked input radio and display as dropp title
  $('input[name="qtdquartos"]').change(function() {
    var value = $("input[name='qtdquartos']:checked").val();
    $('.js-value-quartos').text(value);
  });
    $('input[name="qtdadultos"]').change(function() {
    var value = $("input[name='qtdadultos']:checked").val();
    $('.js-value-adultos').text(value);
  });
    $('input[name="qtdCriancas"]').change(function() {
    var value = $("input[name='qtdCriancas']:checked").val();
    $('.js-value-criancas').text(value);
  });

});





// $('<div class="ui-datepicker-icon" onclick="DateD(this,1)">date_range</div><div class="ui-datepicker-holder"><div class="ui-datepicker-result"><div class="ui-datepicker-result-year"></div><div class="ui-datepicker-result-date"></div></div><button onclick="DateB(this,0)">OK</button><button onclick="DateB(this,2)">CANCEL</button></div>').insertAfter('.ui-datepicker-input');
// $('<div class="ui-datepicker-icon" onclick="DateD(this,1)">date_range</div><div class="ui-datepicker-holder"><div class="ui-datepicker-result"><div class="ui-datepicker-result-year2"></div><div class="ui-datepicker-result-date2"></div></div><button onclick="DateB(this,0)">OK</button><button onclick="DateB(this,2)">CANCEL</button></div>').insertAfter('.ui-datepicker-input2');
// $('.ui-datepicker-input').datepicker({
//   dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
//   prevText: "keyboard_arrow_left",
//   nextText: "keyboard_arrow_right",
//   onSelect: function(dateText) {
//     dateF(new Date(dateText))
//   }
// });
// $('.ui-datepicker-input2').datepicker({
//   dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
//   prevText: "keyboard_arrow_left",
//   nextText: "keyboard_arrow_right",
//   onSelect: function(dateText) {
//     dataR(new Date(dateText))
//   }
// });

// $('.ui-datepicker-input2').focus().off();
// $('.ui-datepicker-input').focus().off();

// var da = document.getElementById("ui-datepicker-div");

// da.style = "";

// $(da).insertBefore('.ui-datepicker-holder > button:first-of-type');

// function dateF(d) {
//   var w = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"];
//   var m = ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];

//     document.getElementsByClassName('ui-datepicker-result-date2')[0].innerHTML = w[d.getDay()] + ', ' + m[d.getMonth()] + ' ' + d.getDate();
//   document.getElementsByClassName('ui-datepicker-result-year2')[0].innerHTML = d.getFullYear()
// }
// function dataR(d) {
//   var w = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"];
//   var m = ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];

//     document.getElementsByClassName('ui-datepicker-result-date2')[0].innerHTML = w[d.getDay()] + ', ' + m[d.getMonth()] + ' ' + d.getDate();
//   document.getElementsByClassName('ui-datepicker-result-year2')[0].innerHTML = d.getFullYear()
// }


// dateF(new Date())

// function DateD(t, a) {
//   if (a === 0) {
//     t.parentNode.classList.toggle('ui-datepicker-holder-open');
//     document.getElementsByClassName('ui-datepicker-input')[0].value = (document.getElementsByClassName('ui-datepicker-result-date')[0].innerHTML + ' ' + document.getElementsByClassName('ui-datepicker-result-year')[0].innerHTML)
//   } else if (a === 1) {
//     t.nextSibling.classList.toggle('ui-datepicker-holder-open')
//   } else if (a === 2) {
//     t.parentNode.classList.toggle('ui-datepicker-holder-open');
//     document.getElementsByClassName('ui-datepicker-input')[0].value = ""
//   }
// }

// function DateB(t, a) { 
//   if (a === 0) {
//     t.parentNode.classList.toggle('ui-datepicker-holder-open');
//     document.getElementsByClassName('ui-datepicker-input2')[0].value = (document.getElementsByClassName('ui-datepicker-result-date2')[0].innerHTML + ' ' + document.getElementsByClassName('ui-datepicker-result-year2')[0].innerHTML)
//   } else if (a === 1) {
//     t.nextSibling.classList.toggle('ui-datepicker-holder-open')
//   } else if (a === 2) {
//     t.parentNode.classList.toggle('ui-datepicker-holder-open');
//     document.getElementsByClassName('ui-datepicker-input2')[0].value = ""
//   }
// }