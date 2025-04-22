import Produto from "./modelo/produto";
import RepositorioProdutoImpl from "./repositorio/impl/repo_produto_impl";

const repositorio = new RepositorioProdutoImpl();

//Lista todos produtos
console.log("<~ Listando produtos ~>");
console.log(repositorio.getAll_Produto());

//Inclui um registro novo
console.log("<~ Incluindo novo produto ~>");
const novoProduto = new Produto(
                    repositorio.getNextId(),
                    "chocolate em barra",
                    "ifesedu",
                    12.02
);
console.log("<~ Salva o novo produto e printa lista atualizada ~>");
repositorio.setProduto(novoProduto);
console.log(repositorio.getAll_Produto());

//Consulta produto por código
console.log("<~ Busca produto por código ~>");
const buscaProduto = repositorio.getProduto(3);
if (!buscaProduto){
    throw new Error("Produto não encontrado.");
}
console.log(buscaProduto);

//Atualiza um registro existente
console.log("<~ Busca produto por código ~>");
buscaProduto.descricao = "detergente";
buscaProduto.valor = 3.59;
repositorio.updateProduto(buscaProduto.codigo,buscaProduto);
console.log(repositorio.getAll_Produto());

//Remove um registro existente
console.log("<~ Remove produto ~>");
repositorio.rmProduto(3);
console.log(repositorio.getAll_Produto());