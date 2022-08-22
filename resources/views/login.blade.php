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
        <form action="{{url('form-save')}}" method="POST">
        @csrf
        <div>
            <label for="name"> name</label>
            <input type="text" name="name" id="name">
        </div>
        <button type="submit">submit</button>
        </form>
    </div>
    <div class="items">
        @foreach($customers as $customer)
        <div class="block">
            <p>{{$customer->name}}</p>
            <a href="{{url('user')}}/{{$customer->id}}" class="Edit">Edit</a>
            <a href="{{url('delete')}}/{{$customer->id}}" class="delete">Delete</a>
        </div>
        @endforeach  
    </div>
</body>
</html>