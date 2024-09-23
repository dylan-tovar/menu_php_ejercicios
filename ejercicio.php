<?php 
include("db.php"); 
include("components/header.php"); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "SELECT * FROM Ejercicios WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $titulo = $row['titulo'];
        $nota = $row['Nota'];
    }
}

?>
<div class="container p-5">
    <h1 class="mb-3"><?php echo "Ejercicio $id - $titulo"; ?></h1>
    <p><?php echo "Nota: $nota"; ?></p>
    
    <hr>

    <div>
        <?php
        $exerciseFile = "exercises/ejercicio_" . $id . ".php";
        if (file_exists($exerciseFile)) {
            echo "<p class='text-center'> Resultado </p>";
            include($exerciseFile);
        } else {
            echo "<p>El ejercicio no está disponible.</p>";
        }
        ?>
    </div>
</div>

<?php include("components/footer.php"); ?>