console.log("Running...")

//Limita a somente integers
function int_js(valor, input){

    valor = valor.toString().replace(/\D/g,"");

    document.getElementById(input.id).value = valor;

}

//Permite apenas letras
function letters_js(valor, input){

    valor = valor.toString().replace(/\d/g,"");

    document.getElementById(input.id).value = valor;

}