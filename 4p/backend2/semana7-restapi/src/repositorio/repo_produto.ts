import Produto from '../modelo/produto';

export default interface IRepositorioProduto{
    getAll_Produto():Array<Produto>;
    getProduto(codigo:number):Produto | undefined;
    setProduto(produto:Produto): void;
    updateProduto(codigo:number,produto:Produto): void;
    rmProduto(codigo:number): void;
}