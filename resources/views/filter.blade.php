<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <title>Filter</title>
</head>
<body>
   <div class="container">
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
               <td> {{$student->name}} </td>
               <td> {{$student->score}} </td>
               <td> {{$student->teacher_id}} </td>
            </tr>             
            @endforeach
            
         </tbody>           
      </table>
   </div>
</body>
</html>