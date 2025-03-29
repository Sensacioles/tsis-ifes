const numerosorteado = Math.floor(Math.random()*6)+1;
const numeroinformado = 2;

if(numerosorteado==numeroinformado){
    console.log("O número "+numeroinformado+" foi sorteado e escolhido ao mesmo tempo!");
}
else{
    console.log("O número sorteado "+numerosorteado+" e o número selecionado "+numeroinformado+" são diferentes.");
}