<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <title>Document</title>
</head>
<body style="margin: 20px">
   <p>Locale : {{App::getLocale()}} </p>
   @if (Auth::check())
   <p>
      Name : {{ $user->name }} <br>
      Email : {{ $user->email }} <br>
      Role : {{ $user->role }} <br>
      Id : {{ $user->id }}
   </p>
      <form action="{{route('logout')}}" method="POST">
      @csrf
      <div class="row">
         <div class="col-1">
            <button class="btn btn-outline-danger" type="submit">Log Out</button>
         </div>
         <div class="col-2">
            <a class="btn btn-outline-secondary" href="{{route('update_password')}}">Ubah Password</a>
         </div>
      </div>
      
      </form>
   @else
   <div class="row">
      <div class="col-1">
         <a class="btn btn-outline-primary" href="{{route('login')}}">Masuk</a> 
      </div>
      <div class="col-1">
         <a class="btn btn-outline-secondary" href="{{route('register')}}">Registrasi</a>
      </div>      
   </div>   
   @endif
 
   <br>
   <div class="container card">
      <div style="margin-top: 10px; text-decoration: none">
         <a href="{{route('create')}}" class="btn btn-outline-primary">Buat Baru</a>        
      </div>
      <table class="table table-striped">
         <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Nilai</th>
              <th scope="col">Kode Guru</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($students as $student)
            <tr>
               <td> {{$student->id}} </td>
               <td> <a href="{{route('edit', $student->id) }}">{{$student->name}}</a>  </td>
               <td> {{$student->score}} </td>
               <td> {{$student->teacher_id}} </td>
            </tr>             
            @endforeach
            
         </tbody>           
      </table>
      <div style="float: right">
         {!! $students->links('') !!}
      </div>      
   </div>
   
   
</body>
</html>