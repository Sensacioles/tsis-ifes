import { Injectable } from '@nestjs/common';
import Produto from 'modelo/produto';
import DadosProduto from 'util/dados_produto';

@Injectable()
export class AppService {
  getStatus(): string {
    return 'Node está rodando com êxito! Data: '+ new Date();
  }
  private listaProdutos:Array<Produto>=DadosProduto.dados();
  public listarTodos():Array<Produto>{
    return this.listaProdutos;
  }
  public buscaPorId(codigo:number):Produto{
    return this.listaProdutos.find(produto => produto.codigo==codigo)!;
  }
  public salvar(produto:Produto): Produto{
    const incluirProduto = new Produto(
      this.obterProximoId(),
      produto.descricao,
      produto.marca,
      produto.valor
    );
    return incluirProduto;
  }
  public atualizar(codigo:number,produto:Produto): Produto{
    let indice = this.listaProdutos.findIndex(livro => livro.codigo==codigo);
    this.listaProdutos[indice] = produto;
    return produto;
  }
  public excluir(codigo:number): void{
    let indice = this.listaProdutos.findIndex(livro => livro.codigo==codigo);
    this.listaProdutos.splice(indice,1);
  }
  public obterProximoId():number{
    if(this.listaProdutos.length==0){
      return 1;
    }
    else{
      let ultimoRegistro=this.listaProdutos[this.listaProdutos.length-1];
      return ultimoRegistro.codigo+1;
    }
  }
}
