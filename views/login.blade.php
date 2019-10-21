@extends('layout.templat')

@section('conteudo')
    

          



    <div class="row"  style="margin:280px 400px;">

        <!-- ----------------------------------codigo para validar ------------------------->
        @if (count($errors)!=0)
          
        <div class="alert alert-danger">

             <p class="text text-center">Preencher todos os campos</p>

        </div>

        @endif
        
        <!-- --------------------------------------------------------------------------- -->

            <form method="POST" action="validandologin">

                    {{ csrf_field() }}
                    
                          <div class="form-group row">
          
                                <label for="text" class="col-sm-4">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="text" placeholder="Email">
                            </div>
          
                          </div>
          
          
                          <div class="form-group row">
                            <label for="password" class="col-sm-4">Password:</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                          </div>
                          
                              <input type="submit" class="btn btn-primary" value="Enviar">
                          </div>
                  </form>
    </div>

@endsection