

<!DOCTYPE html> 

<html>
  
  @extends('layout.head')
  
  <body>
  <div class="container-fluid">
    <div class="row align-items-center justify-content-center">
      <form method="post" action="{{route('todo.create',$_POST)}}" >
      {{ csrf_field() }}
      <div class="form-group">
        <label for="text">Descricao:</label>
        <input name="descricao"required type="text" class="form-control" id="text">
      </div>
      <div class="form-group">
        <label for="criacao">Data inicio:</label>
        <input name="data_de_criacao"required placeholder="Ex: 03-03-2000" type="text" class="form-control" id="pwd">
      </div>
      <div class="form-group">
        <label for="termino">Data finalizacao:</label>
        <input required name="data_de_termino" placeholder="Ex: 03-08-2010"type="text" class="form-control" id="pwd">
      </div>
      
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
  </div>
    
    
  </body>

</html>


