/*a) Seleciona o elemento cujo ID é header-nav*/
function selecionaNav(){
    return document.getElementById('header-nav');
}

/*b) Selecione todos os elementos que contenha a classe bg-color-dark. Posterior a isso, modifique
todos os elementos inserindo um novo texto. A descrição do texto é livre e deverá ser definida pelo
aluno.*/
function selecionaModifica(){
    let bgs = document.getElementsByClassName('bg-color-dark');
    for(let i=0;i<bgs.length;i++){
        bgs[i].innerHTML = 'pizza mozzarella';
    }
}

/*c) Explique com suas palavras, o quê aconteceria se você executasse o seguinte comando em
javascript?
    <script>
        let navs = document.querySelectorAll('nav');
        for(let k=0;k<navs.length;k++) {
            navs[k].innerHTML = "Novo texto";
        }
    </script>
    
RESPOSTA: O script irá gerar uma lista 'navs', incrementando-a com qualquer seletor com uma tag nav. Em seguida,
          no loop, cada elemento é acessado e seu texto interno é alterado para "Novo texto". O resultado vira uma
          lista ordenada somente com elementos "Novo texto" e um footer com "Novo texto" escrito. O main não tem
          seu conteúdo alterado pois não possui tag nav, somente div.
*/

/*c.2) Script para testes*/
function modificaQuery(){
    let navs = document.querySelectorAll('nav');
    for(let k=0;k<navs.length;k++) {
        navs[k].innerHTML = "Novo texto";
    }
}