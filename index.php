<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Guardar Imagen</title>
</head>

<body>

    <?php

    include 'conexion.php';
    if (isset($_POST['save'])) {
        $DBImagen->uploadImage($_FILES, $_POST['descripcion']);
        header('Location: index.php');
    }

    ?>

    <div class="container pt-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <p>GUARDAR IMAGEN PHP</p>
                </div>
            </div>

            <div class="panel-body">
                <form method="POST" enctype="multipart/form-data" action="index.php">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Ingresar Descripcion</label>
                        <input type="text" class="form-control-file" id="descripcion" name="descripcion" required>
                    </div>
                    <button type="submit" class="btn btn-block btn-info" name="save">Guardar</button>
                </form>
            </div>
        </div>
    </div>


    <?php

    $consulta = 'SELECT * FROM imagen';
    $sql_image = $pdo->prepare($consulta);
    $sql_image->execute();
    $result_img = $sql_image->fetchAll();
    ?>

    <div class="container">
        <?php if ($result_img) : ?>
            <div class="row pt-5">
                <?php foreach ($result_img as $item_imagen) : ?>
                    <div class="col-md-4 pb-3">
                        <div class="card ">
                            <img src="<?php echo $item_imagen['urlphoto']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><?php echo $item_imagen['descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php else : ?>
            <div>
                <hr>
                <p class="lead">No hay imagenes por mostrar</p>
            </div>
        <?php endif ?>

    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>