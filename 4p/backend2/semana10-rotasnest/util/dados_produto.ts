import produtos from '../dados/produtos.json';
import Produto from '../modelo/produto';

export default class DadosProduto{
    public static dados():Array<Produto>{
        const json_to_string=JSON.stringify(produtos);
        const json_to_object=JSON.parse(json_to_string);
        const listaProdutos:Array<Produto>=[];
        json_to_object.forEach((element:{codigo: number; descricao: string; marca: string; valor: number;}) => {
            let produto = new Produto(element.codigo,element.descricao,element.marca,element.valor);
            listaProdutos.push(produto);
        });
        return listaProdutos;
    }
}