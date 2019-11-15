<!DOCTYPE html>
<html>
    @extends('layout.head')
    
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Login</h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="POST" action="{{ action('RedirectUserController@validateRequest', $_POST) }}" >
    {{ csrf_field() }}
    <div class="form-group">
     <label>Usuário</label>
     <input type="text" name="user" class="form-control" />
    </div>
    <div class="form-group">
     <label>Senha</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  </div>
 </body>
</html>
