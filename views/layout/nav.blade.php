
    {{-- Menu Nav --}}

    <div class="row" style="padding:10px;">

            <div class="col-md-12" style="padding: 10px 0px">


                    <a href="home" class="btn btn-info" role="button"><span class="glyphicon glyphicon-home"> </span>
                    Home
                    </a>
                    {{--botao cadastro usuario--}}
                    <a href="usurio" class="btn btn-info" role="button"><span class="glyphicon glyphicon-home"> </span>
                        Cadastro Funcionario
                    </a>
        
                      {{--botao Home--}}
                      <a href="produto" class="btn btn-info" role="button"><span class="glyphicon glyphicon-home"> </span>
                        Cadastro Produto
                    </a>
        
                      {{--botao Home--}}
                      <a href="controle" class="btn btn-info" role="button"><span class="glyphicon glyphicon-home"> </span>
                        Controle Vendas
                      </a>
                      
                    <p class="text-right" style="color:teal"><strong>Bem Vindo:</strong> {{session('email_usuario')}} &nbsp &nbsp<a href="#>">sair</a></p>
                      

                   {{-- <p class="text text-right">{{$sessao}}</p> --}}

                    <hr style="background-color:teal">
                </div>
    </div>




