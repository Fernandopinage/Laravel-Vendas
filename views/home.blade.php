@extends('layout.app')



@section('conteudo')
    
    <div class="row">
        <h1 style="color:teal">Home</h1><hr>
    </div>

    <br><br>
   
    <div class="row" style="color:teal">
      <div>
        <h5>Produtos</h5>
      </div>
            <table class="table">
                    <thead class=" table-secondary" style="color:teal">
                      <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Produto</th>
                        <th scope="col">R$</th>
                        <th scope="col">Qtd</th>
                        <th scope="col">Editar Produto</th>
                        <th scope="col">Excluir</th>
                        <th scope="col">Comprar</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                          @if(isset($dados))

                          @foreach ($dados as $dados)
                          <tr>
                          <th scope="row"style="color:teal">{{$dados->id_produto}}</th>
                          <td style="color:teal">{{$dados->nome_produto}}</td>
                          <td style="color:teal">{{$dados->preco_produto}}</td>
                          <td style="color:teal">{{$dados->quantidade_produto}}</td>
                          
                          <td style="color:teal"><a href="#" class="btn btn-primary">Editar</a></td>
                          <td style="color:teal"><a href="deletaProduto/{{$dados->id_produto}}"class="btn btn-danger">Excluir</a></td>
                          <td style="color:teal"><a href="#"class="btn btn-success">Comprar</a></td>
                          </tr>
                          @endforeach
  
                          @endif
                      
                     
                    </tbody>
            </table>
                  
         
    </div>
    <hr>
    <br><br><br>
    <div class="row" style="color:teal">
        <div>
            <h5>Tabela de Funcionario</h5>
        </div>
        <table class="table">
            <thead class=" table-secondary" style="color:teal">
              <tr>
                <th scope="col">Codigo Usuario</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
              </tr>
            </thead>
            <tbody>
              
                  @if(isset($usuario))

                  @foreach ($usuario as $usuario)
                          <tr>
                          <th scope="row"style="color:teal">{{$usuario->id_usuario}}</th>
                          <td style="color:teal">{{$usuario->nome_usuario}}</td>
                          <td style="color:teal">{{$usuario->email_usuario}}</td>                         
                          <td style="color:teal"><a href="#" class="btn btn-primary">Editar</a></td>
                          <td style="color:teal"><a href="delete/{{$usuario->id_usuario}}" class="btn btn-danger">Excluir</a></td>
                          </tr>
                          @endforeach

                  @endif
              
             
            </tbody>
    </table>

    </div>
    


@endsection