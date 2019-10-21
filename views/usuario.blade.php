@extends('layout.app')



@section('conteudo')
    
    <div class="row">
        <h1 style="color:teal">Usuário</h1><hr>

    </div><br><br>

    <div>


        <!-- ----------------------------------codigo para validar ------------------------->

      @if (count($errors)!=0)
          
         <div class="alert alert-danger">

              <p class="text text-center">Preencher todos os campos</p>

         </div>

      @endif
         <!-- --------------------------------------------------------------------------- -->


       <form method="POST" action="adcionarUsuario">
        <div class="form-group" style="color:teal">

           
                {{ csrf_field() }}

                    <div class="row">
                            <div class="col">
                              <label>Nome:</label>  
                              <input type="text" name="nome_usuario" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col">
                              <label>Senha:</label>
                              <input type="password" name="senha_usuario" class="form-control" placeholder="Senha">
                            </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col">
                              <label>Email:</label>  
                              <input type="text" name="email_usuario" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                              <label>Confirmar Email:</label>
                              <input type="email" name="email2_usuario" class="form-control" placeholder="Confimar Email">
                            </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col">
                              <label>Cep:</label>  
                              <input name="cep" type="text" id="cep" value="" class="form-control" placeholder="Cep" />
                            </div>
                            <div class="col">
                              <label>Rua:</label>
                              <input name="rua"  type="text" id="rua" class="form-control" placeholder="Rua" /></label><br />
                            </div>
                    </div>
                    <div class="row">
                            <div class="col">
                              <label>Bairro:</label>  
                              <input name="bairro" type="text" id="bairro"  class="form-control" placeholder="Bairro" />
                            </div>
                            <div class="col">
                              <label>Cidade:</label>
                              <input name="cidade"  type="text" id="cidade" class="form-control" placeholder="Cidade" /></label><br />
                            </div>
                            <div class="col">
                                <label>Estado:</label>  
                                <input name="uf"  type="text" id="uf" class="form-control" placeholder="Estado"/></label><br />
                              </div>
                    </div>
                    
                    <input type="submit" class="btn btn-outline-primary" value="Enviar">

            </form>

        </div>

    </div>

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
   


@endsection