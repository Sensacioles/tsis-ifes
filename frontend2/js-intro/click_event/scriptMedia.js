let botao = document.getElementById('botaoMedia');
botao.addEventListener('click',function(){
    let n1 = parseInt(document.getElementById('inputUm').value, 10);
    let n2 = parseInt(document.getElementById('inputDois').value, 10);
    let resultado = document.getElementById('resultado');
    resultado.innerHTML = "A média é igual a " + (n1+n2)/2;
});
