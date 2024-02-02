<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

   <title>Edit</title>
</head>
<body>
   <div class="card" style="margin: 30px; width: 600px; padding: 10px" >      
      <form action="{{route('update', $student)}}" method="post">
         @method('PATCH')
         @csrf
         <div class="row">   
            <div class="row">
               <div class="col-10">
                  <h3>Data Siswa</h3>
               </div>
               <div class="col-2">
                  <a href="{{route('index')}}" class="btn btn-outline-danger">Back</a>
               </div>
            </div>         
            
            <hr>
            <div class="col-8">
               <table>
                  <tr>
                     <td><label for="name">Nama</label></td>
                     <td>: <input type="text" name="name" value="{{$student->name}}"></td>
                  </tr>
                  <tr>
                     <td><label for="score">Score</label></td>
                     <td>: <input type="text" name="score" value="{{$student->score}}"></td>               
                  </tr>
                  <tr>
                     <td><label for="teacher_id">Kode Guru</label></td>
                     <td>: <input type="number" name="teacher_id" value="{{$student->teacher_id}}"></td>               
                  </tr>
               </table>
            </div>
            <div class="col-4">
               <button class="btn btn-outline-primary" type="submit">Update</button>     
      </form>
            <form action="{{route('delete', $student)}}" method="post">
               @method('DELETE')
               @csrf
               <button class="btn btn-outline-danger" type="submit">Delete</button>
            </form>               
            </div>
            <p></p>
            <hr>
            <div>
               <h5>Aktivitas Siswa</h5>
               @if (count($student->activities) == 0)
                  <li>Tidak ada aktivitas</li>
               @else
                  @foreach ($student->activities as $activity)
                     <li>{{ $activity->name }}</li>
                  @endforeach
               @endif
            </div>
         </div>                         
        

      <br>
      @if (count($errors) > 0)
         <div class="alert alert-danger">
            <ul>
               @foreach ($errors->all() as $err)
                  <li>{{$err}}</li>
               @endforeach
            </ul>
         </div>
      @endif
   </div>   
</body>
</html>