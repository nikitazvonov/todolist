<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Список дел</title>
</head>
<body>
    <section>
        <h1>Список дел</h1>
        <div>
            <form action="addTodo.php" method="POST">
                <input type="text" name="content" placeholder="Что нужно сделать?">
                <input type="submit" name="submit" value="+">
            </form>
        </div>
    </section>
</body>
</html>