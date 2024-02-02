<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <title>Detail</title>
</head>
<body>
   <div class="container container-primary">      
      <div class="row">
         <h1 style="text-align: center">Detail</h1>
         <div class="col-4"> 
            <h5>Detail Siswa</h5> 
            <table>
               <tr>
                  <td>Nama Siswa</td>
                  <td>: {{$students->name}}</td>
               </tr>
               <tr>
                  <td>Score</td>
                  <td>: {{$students->score}}</td>
               </tr>
               <tr>
                  <td>Kode Guru</td>
                  <td>: {{$students->teacher_id}}</td>
               </tr>
            </table>                        
         </div>
         <div class="col-8">
            <h5>Aktivitas Siswa</h5>      
            @if (count($students->activities) == 0)
               <li>Tidak ada aktivitas</li>
            @else
               @foreach ($students->activities as $activity)
                  <li>{{ $activity->name }}</li>
               @endforeach
            @endif      
            
         </div>
      </div>
      
   </div>
   
   
</body>
</html>