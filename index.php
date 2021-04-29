<?php
    $conexion = mysqli_connect('localhost','root','','insertar');
    $sql = "SELECT id, nombre from t_paises";
    $result = mysqli_query($conexion,$sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="select2/select2.min.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    
    <script src="select2/select2.min.js"></script>
</head>
<body>

    <section style="text-aling: center;">
        <select id="controlBuscador">
            <?php while($ver=mysqli_fetch_row($result)){

            ?>
            <option value="<?php echo $ver[0] ?>">
                <?php echo $ver[1] ?>
            </option>
            <?php 
            }
            ?>
        
        </select>
    </section>
    
</body>
</html>

<script>
    $(document).ready(function(){
        $('#controlBuscador').select2();
    })

</script>