<?php
 $name = $_GET['name'];
 $mail = $_GET['email'];
 $age = $_GET['age'];

 if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
    if(strlen($_GET['name'])> 3){
        if(filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
            if(is_numeric($_GET['age'])) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        } else {
            echo "Accesso negato";
        }
    } else {
        echo "Accesso negato";
    }
} else {
    echo "Accesso negato";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
    <form class="d-flex flex-column mb-3 .justify-content-center" action="" method="get">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Inserisci email">
        <label for="name">Nome</label>
        <input type="text" name="name" placeholder="Inserisci nome">
        <label for="age">Eta'</label>
        <input type="text" name="age" placeholder="Inserisci eta'">
        <button class="my-3" type="submit">Submit</button>
    </form>
    </div>
</body>
</html>