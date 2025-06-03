import { Controller, Get, Post, Put, Delete, Body, Query, Param } from '@nestjs/common';
import { AppService } from './app.service';
import Produto from 'modelo/produto';

@Controller()
export class AppController {
  constructor(private readonly appService: AppService) {}

  //Listar todos os produtos
  @Get("/produtos")
  listarTodos(): Array<Produto> {
    console.log(new Date() + "Listando todos os produtos... ");
    return this.appService.listarTodos();
  }
  //Incluir livro
  @Post()
  salvar(@Body()produto:Produto):Produto{
    console.log(new Date() + "Adicionando novo livro... ");
    return this.appService.salvar(produto);
  }
  //Consultar por código
  @Get("/produto")
  buscaPorId(@Query("codigo")codigo:number):Produto{
    console.log(new Date() + "Consultando produto " + codigo + " ...");
    return this.appService.buscaPorId(codigo);
  }

  //Alterar livro
  @Put(":codigo")
  atualizar(@Param("codigo")codigo:number, @Body()produto:Produto):Produto{
    console.log(new Date() + "Alterando produto " + codigo + " ...");
    return this.appService.atualizar(codigo,produto);
  }

  //Excluir
  @Delete(":codigo")
  excluir(@Param("codigo")codigo:number){
    console.log(new Date() + "Deletando produto " + codigo + " ...");
    this.appService.excluir(codigo);
  }
  
  //Retornar texto funcionamento Node
  @Get()
  getStatus(): string {
    return this.appService.getStatus();
  }
}