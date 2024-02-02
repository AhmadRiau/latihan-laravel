<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <title>Document</title>
</head>
<body>
   <br>
   <div class="container card">
      <div style="margin-top: 10px; text-decoration: none">
         <a href="{{route('create')}}" class="btn btn-outline-primary">Create</a>        
      </div>
      <table class="table table-striped">
         <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Score</th>
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