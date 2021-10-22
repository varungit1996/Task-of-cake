<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ '/css/edit.css' }}">
    <title>Edit data</title>
</head>
<body>
    <div class="div">
        <h1>Edit cake details</h1>
    <form action="/update" method="POST">
               @csrf
<input type="hidden"name="id"value="{{ $data['id'] }}">
<input type="text"name="Name"id="Name"value="{{ $data['Name'] }}"><br><br>
<input type="text"name="Flavour"id="Flavour"value="{{ $data['Flavour'] }}"><br><br>
<input type="text"name="Bakeddate"id="Bakeddate"value="{{ $data['Bakeddate'] }}"><br><br>
<button type="submit" class="button">Update</button>
    </form>
    </div>
</body>
</html>