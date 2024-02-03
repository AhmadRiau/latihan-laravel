<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Update Password</title>
</head>
<body>
   <a href="{{route('index')}}"><input type="button" value="Kembali"></a>
   @if (count($errors) > 0)
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $err)
               <li>{{$err}}</li>
            @endforeach
         </ul>
      </div>
   @endif

   @if (Session::has('message'))
      <p>{{Session::get('message')}}</p>
   @endif

   <form action="{{route('store_password')}}" method="POST">
      @method('PATCH')
      @csrf
      <table>
         <tr>
            <td><label for="new_password">Masukan password baru</label></td>
            <td>: <input type="password" name="new_password"> <br></td>
         </tr>
         <tr>
            <td><label for="new_password_confirmation">Konfirmasi password</label></td>
            <td>: <input type="password" name="new_password_confirmation"></td>
         </tr>
      </table>               
      <button type="submit">Perbarui</button>
   </form>   
</body>
</html>