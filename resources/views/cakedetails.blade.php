<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="{{ '/css/cake.css' }}">
    <title>List of cakes</title>
</head>
<body>

    {{-- heading --}}

    <div class="d1">
        <h1>List of available cakes</h1>
    </div>

    {{--dashboard  --}}

<div class="d2">
    <div class="d3"><a href="dashboard"title="Profile and logout options" class="db">Dashboard</a>
    </div><br>
</div>

    {{-- search --}}

 <div class="d2">
    <div class="row">
         <form action="{{ url('list') }}">
         <input type="text" placeholder="Search your cake" id="search"name="search" class="search">
         <button type="submit" class="btn1">
         <span><i class="fa fa-search" aria-hidden="true"></i></span>
         </button>
         </form>
         &nbsp;
    </div>
 </div>

      {{-- table --}}

<div>
    <table class="table">
    <tr>
        <th>Name</th>
        <th>Flavour</th>
        <th>Baked date</th>
        <th>Operation</th>
        <th>Operation</th>
    </tr>
  @foreach ($details as $detail)
    <tr>
       <td>{{$detail['Name']}}</td>
       <td>{{$detail['Flavour']}}</td>
       <td>{{$detail['Bakeddate']}}</td>
       <td><a href="{{"delete/".$detail['id']}}">Delete</a></td>
       <td><a href="{{"edit/".$detail['id']}}">Edit</a></td>
    </tr>
  @endforeach
    </table><br>

    {{-- add button --}}

    <div class="d4">
        <button class="btn2">
        <a href="go"title="Add new cake details here"style="color: white;"><B>Add</B></a>
         </button>
    </div><br> 

     {{-- pagination --}}

    <div class="d4">
     <span>
        {{ $details->links() }}
    </span>
    </div>

</body>
</html>