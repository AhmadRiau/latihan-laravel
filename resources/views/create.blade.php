<!DOCTYPE html>
<html lang="en">
<head> 
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <title>Create</title>
</head>
<body>   
   <div class="card" style="margin: 30px; width: 500px; padding: 10px" >      
      <form action="{{route('store')}}" method="post">
         @csrf
         <div class="row">
            <div class="col-8">
               <table>
                  <tr>
                     <td><label for="name">{{__('Name')}}</label></td>
                     <td>: <input type="text" name="name" placeholder="name"></td>
                  </tr>
                  <tr>
                     <td><label for="score">{{__('Score')}}</label></td>
                     <td>: <input type="text" name="score" placeholder="score"></td>               
                  </tr>
                  <tr>
                     <td><label for="teacher_id">{{__('Teacher ID')}}</label></td>
                     <td>: <input type="number" name="teacher_id" placeholder="teacher_id"></td>               
                  </tr>
               </table>
            </div>
            <div class="col-4">
               <button class="btn btn-outline-primary" type="submit">{{__("Add New")}}</button>
            </div>
         </div>                  
      </form>
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