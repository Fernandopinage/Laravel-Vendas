@extends('layout.app')



@section('conteudo')
    
    <div class="row">
        <h1 style="color:teal">Produto</h1><hr>
    </div>
    <div>

    
            <div class="form-group" style="color:teal">
    
                <form action="adicinarProduto" method="POST">
                    {{ csrf_field() }}
                    
                        <div class="row">
                          
                                
                                <div class="col">
                                  <label>Produto:</label>  
                                  <input type="text" name="nome" class="form-control" placeholder="Produto">
                                </div>
                                <div class="col">
                                  <label>R$:</label>
                                  <input type="text" name="preco" class="form-control" placeholder="Valor" >
                                </div>
                                <div class="col">
                                    <label>Quantidade:</label>
                                    <input type="text" name="quantidade" class="form-control" placeholder="Valor" >
                                </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col">
                                  <label>Data:</label>  
                                  <input type="date" name="dataCriacao" class="form-control">
                                </div>
                                <div class="col">
                                  <label>Data atualizada:</label>
                                  <input type="date"  class="form-control" disabled="disabled">
                                </div>
                        </div>
                        <br>
    
                        <input type="submit" class="btn btn-outline-primary" value="Enviar">
    
                </form>
    
            </div>
    
        </div>

@endsection