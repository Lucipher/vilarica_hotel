function response(data) {
    clear();
    $('#resposta-simulador').collapse();
    $('#simulador').collapse().toggle();
    
    $('#resp_name').html(data.nome);
    $('#resp_city').html(data.cidade);
    $('#resp_renda').html('R$ '+data.renda);

    $('#resp_subs').html(data.subsidio);
    $('#resp_valor').html(data.valor);
    $('#resp_valor_final').html(data.total);
}

function clear(){
    $('#cidade').val($('#cidade option:first').val());
    $('#nome').val('');
    $('#email').val('');
    $('#telefone').val('');
    $('#idade').val('');
    $('#renda').val('');
}