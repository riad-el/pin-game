<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('submit')}}" method="post">
    @csrf
    <input type="number" name="v1" min="1" max="9" required>
    <input type="number" name="v2" min="1" max="9" required>
    <input type="number" name="v3" min="1" max="9" required>
    <input type="number" name="v4" min="1" max="9" required>
    <input type="submit" value="valier">
    </form>
    <div>
        <?php
        $x=session()->get("Nombre correcte");
        $y=session()->get("Nombreenplace");

    echo "Nombre correcte est :".$x;
    echo "Nombreenplace est :".$y;

     ?>
    </div>
</body>
</html>
