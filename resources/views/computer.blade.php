<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/computer">
    @csrf
<h1>First number:</h1><input type="number" name="num1">
<h1>Second number: </h1><input type="number" name="num2"><br><br>
Choose One: <select name="calculate">
    <option value="+"> + </option>
    <option value="-"> - </option>
    <option value="x"> x </option>
    <option value="/"> / </option>
</select>
    <input type="submit" value="Submit">
</form>
</body>
</html>
