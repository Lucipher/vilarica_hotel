$(document).ready(function() {
	$('.phone').mask('+55 (00) 000000000');
});


$('#form_simulador')
.formValidation({
	framework: 'bootstrap',
 	icon: {
        valid: 'material-icons valid-icon',
        invalid: 'material-icons invalid-icon',
        validating: 'material-icons validating-icon'
    },
    err: {
        container: 'tooltip'
    }
})
.on("success.form.fv", function(e){
	e.preventDefault();
    $.post('https://www.vlconstrutora.com.br/wp-content/themes/vlconstrutora/calculo/api.php', $('#form_simulador').serialize(),
        function(data, textStatus, jqXHR) {
            textStatus == 'success' ? response(data) : console.log(textStatus);
        },
    );
});
