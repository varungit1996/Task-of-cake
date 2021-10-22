<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ '/css/add.css' }}">
    <title>Add cakes</title>

    </head>
<body>
 <div class="box">   
           <h1>Add cakes</h1>
    <form action="add"method="POST">
             @csrf
<input type="text"name="Name"placeholder="Enter cake name"id="Name"><br><br>
<input type="text"name="Flavour"placeholder="Enter cake Flavour"id="Flavour"><br><br>
<input type="text"name="Bakeddate"placeholder="Enter Bakeddate"id="Bakeddate"><br><br>
<button type="submit"button class="button">Add </button>
     </form>
</div>
</body>
</html>