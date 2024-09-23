<?php include("db.php"); ?>
<?php include("components/header.php"); ?>

<div class="container p-5">
    <div>
        <?php
        $query = "SELECT * FROM Ejercicios";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='menu-item'>
                    <span class='item-title'> <span class='px-4'>{$row['id']}.</span> Ejercicio {$row['id']} - {$row['titulo']}</span>
                    <a href='ejercicio.php?id={$row['id']}' class='btn btn-custom'>
                        <i class='bi bi-eye'></i> Ver
                    </a>
                </div>
            ";
        }
        ?>
    </div>
</div>

<?php include("components/footer.php"); ?>