$(document).ready(function() {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 25) {

      $("header").addClass('HeaderFixed');
      $(".FiltroReserva-Interna").addClass('FiltroReserva-InternaNoFixed');


    } else {
      $("header").removeClass('HeaderFixed');
      $(".FiltroReserva-Interna").removeClass('FiltroReserva-InternaNoFixed');


    }

    if ($(this).scrollTop() > 500) {

      $(".FiltroReservaHome").addClass('FiltroFixed');

    } else {
      $(".FiltroReservaHome").removeClass('FiltroFixed');

    }

  });


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


