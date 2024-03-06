//Limita a somente integers
function int_js(){

    if(event.key === "." || event.key === ","){
        event.preventDefault();
        event.target.value = event.target.value.replace(/[^0-9]*/g,'');
    }

}

//Permite apenas letras
function letters_js(valor, input){

    valor = valor.toString();
    valor = valor.replace(/\d/g,"");

    document.getElementById(input.id).value = valor;

}