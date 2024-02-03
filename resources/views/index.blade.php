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
   <h1> {{__('message.welcome')}} </h1>
   <h4> {{__('This is a page to show student data')}} </h4>
   <p>Locale : {{App::getLocale()}} </p>
   <a href="{{route('set_locale','en')}}">English</a>
   <a href="{{route('set_locale','id')}}">Indonesia</a>

   @if (Auth::check())
   <p>
      {{__('Name')}} : {{ $user->name }} <br>
      {{__('Email')}} : {{ $user->email }} <br>
      {{__('Role')}} : {{ $user->role }} <br>
      ID : {{ $user->id }}
   </p>
      <form action="{{route('logout')}}" method="POST">
      @csrf
      <div class="row">
         <div class="col-2">
            <button class="btn btn-outline-danger" type="submit">{{__('Log Out')}}</button>
         </div>
         <div class="col-2">
            <a class="btn btn-outline-secondary" href="{{route('update_password')}}"> {{__('Change Password')}} </a>
         </div>
      </div>
      
      </form>
   @else
   <div class="row">
      <div class="col-1">
         <a class="btn btn-outline-primary" href="{{route('login')}}">{{__('Login')}}</a> 
      </div>
      <div class="col-1">
         <a class="btn btn-outline-secondary" href="{{route('register')}}">{{__('Register')}}</a>
      </div>      
   </div>   
   @endif
 
   <br>
   <div class="container card">
      <div style="margin-top: 10px; text-decoration: none">
         <a href="{{route('create')}}" class="btn btn-outline-primary">{{__('Add New')}}</a>        
      </div>
      <table class="table table-striped">
         <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">{{__('Name')}}</th>
              <th scope="col">{{__('Score')}}</th>
              <th scope="col">{{__('Teacher ID')}}</th>
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