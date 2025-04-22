import DadosProduto from "../../util/dados_produto";
import IRepositorioProduto from "../repo_produto";
import Produto from "../../modelo/produto";

export default class RepositorioProdutoImpl implements IRepositorioProduto{
    private listaProdutos:Array<Produto>=[];
    constructor(){
        this.listaProdutos=DadosProduto.dados();
    }
    public getAll_Produto():Array<Produto>{
        return this.listaProdutos;
    }
    public getProduto(codigo:number):Produto | undefined{ 
        return this.listaProdutos.find(produto => produto.codigo==codigo);
    }
    public setProduto(produto:Produto):void{
        this.listaProdutos.push(produto);
    }
    public updateProduto(codigo:number,produto:Produto):void{
        let i=this.listaProdutos.findIndex(produto => produto.codigo==codigo);
        this.listaProdutos[i]=produto;
    }
    public rmProduto(codigo:number):void{
        let i=this.listaProdutos.findIndex(produto => produto.codigo==codigo);
        this.listaProdutos.splice(i,1);
    }
    public getNextId():number{
        if(this.listaProdutos.length==0){
            return 1;
        }
        else{
            let ultimoRegistro=this.listaProdutos[this.listaProdutos.length-1];
            return ultimoRegistro.codigo+1;
        }
    }
}