
<!DOCTYPE html>
<html>
<body>

<h2>Prueba</h2>

<form action="prueba.php" method="post">

    <p>
        <strong>Bienvenido!, Ingresa un número para comenzar</strong>
    </p>


    <br>
    <input type="number" name="number" placeholder="Ingresa el número">
    <br>
    <br>
    <input type="submit" value="CALCULAR">
</form>

<p>
    <?php
    if( isset($_GET['msg']) ){
        $msg = $_GET['msg'];
        echo $msg;
    }
    ?>
</p>

</body>
</html>