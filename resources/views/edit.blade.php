<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>locale</title>
</head>
<body>

    <style>
        .block{
            background-color: black;
            color: white;
            width: 30%;
            padding: 0.5rem;
            margin-bottom: 0.1rem;
        }
        .Edit{
            text-decoration: none;
            background-color: yellow;
            color: black;
            padding: 0.2rem 0.6rem;
        }
        .delete{
            text-decoration: none;
            background-color: red;
            color: white;
            padding: 0.2rem 0.6rem;
        }
    </style>
  
    @if($errors->any())
     @foreach($errors->all() as $error)
       <p>{{$error}}</p>
     @endforeach
    @endif
    <div>
        <form action="{{url('form-update')}}" method="POST">
        @csrf
        <input type="text" name="id" value="{{$user->id}}">
        <div>
            <label for="name"> name</label>
            <input type="text" name="name" id="name" value="{{$user->name}}">
        </div>
        <button type="submit">Update</button>
        </form>
    </div>
    <div class="items">
        
    </div>
</body>
</html>