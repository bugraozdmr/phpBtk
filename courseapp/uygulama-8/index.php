
<?php

    include "libs/variables.php";

    include "libs/functions.php";


    include "partials/_header.php";
?>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $ltitle = $_POST['ltitle'];
        $image = $_POST['image'];
        $date = $_POST['date'];

        kurs_ekle($kurslar,$title,$ltitle,$image,$date);
    }
?>

<?php include "partials/_navbar.php" ?>

    <div class="text-center display-6">
        <?php echo title; ?>
    </div>
    <?php include "partials/_title.php" ?>
    
    
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <?php include "partials/_menu.php" ?>

            </div>
            <div class="col-9">
            
            <?php include "partials/_course-list.php" ?>
            </div>
        </div>
    </div>

<?php "partials/_footer.php" ?>