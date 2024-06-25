
<?php

    include "libs/variables.php";

    include "libs/functions.php";


    include "partials/_header.php";
?>

<?php include "partials/_navbar.php" ?>

    
    
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name='title' id='title' class='form-control'>
                    </div>
                    <div class="mb-3">
                        <label for="title">Little Title</label>
                        <input type="text" name='ltitle' id='ltitle' class='form-control'>
                    </div>
                    <div class="mb-3">
                        <label for="title">Image</label>
                        <input type="text" name='image' id='image' class='form-control'>
                    </div>
                    <div class="mb-3">
                        <label for="title">Date</label>
                        <input type="text" name='date' id='date' class='form-control'>
                    </div>
                    <button class="btn btn-outline-success">Submit</button>
                </form>

            </div>
        </div>
    </div>

<?php "partials/_footer.php" ?>