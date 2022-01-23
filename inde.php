<?php
// redeclare variables to use it 
$todos = []; # assume = array tto save data inside it 

if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    $todos = json_decode($json); #convert from string to array  for loop or any thing i want it 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <section class="todo-list">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-6 col-sm-6 col-md-6  image"><img src="images.png" /> </div>
                <div class="col-lg-6 col-sm-6 col-md-6 todo-list-form">

                    <form action="todo.php" method="post">
                        <h5>start your daily tasks with us </h5>
                        <input type="text" name="todotext" placeholder="daily tasks " />
                        <button type="submit" name="submit" title="add task">+ </button>
                    </form>
                    <div>
                        <!-- syntax of input values -->
                        <?php foreach ($todos as $todotext => $todos) : ?>
                            <ul>
                                <li> <?php echo $todotext  ?>
                                    <!--result of input-->
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="todotext2" value="<?php echo $todotext; ?>" />
                                        <button class="delete-btn" title="delete task"> x </button>
                                    </form>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>

<!-- style -->
<style>
    <?php include "style.css"  ?>
</style>