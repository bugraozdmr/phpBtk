
<?php

    include "libs/variables.php";

    include "libs/functions.php";


    include "partials/_header.php";
?>

<?php include "partials/_navbar.php" ?>

    <?php

        $usernameErr = $passwordErr = $repassErr = $emailErr = $cityErr = $hobiesErr = $notmatchErr = "";
        $username = $password = $reppassword = $email = $city = $hobies = '';


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            
            
            if(empty($_POST['username'])){
                $usernameErr = '<span>username is required</span>';
            }
            else{
                $username = $_POST['username'];
            }

            if(empty($_POST['password'])){
                $passwordErr = '<span>password is required</span>';
            }
            else{
                $password = $_POST['password'];
            }

            if(empty($_POST['email'])){
                $emailErr = '<span>email is required</span>';
            }
            else{
                $email = $_POST['email'];
            }

            if(empty($_POST['reppassword'])){ 
                $repassErr = '<span>reppassword is required</span>';
            }
            else{
                $reppassword = $_POST['reppassword'];
            }

            if(!isset($_POST['hobies'])){
                $hobiesErr = '<span>hobies is required</span>';
            }
            else{
                $hobies = $_POST['hobies'];
            }

            if($_POST['city'] == -1){
                $cityErr =  '<span>Select City !</span>';
            }


            if($_POST['password'] != $_POST['reppassword']){
                $notmatchErr = '<span>Passwords doesnt match</span>';
            }

            if($_POST['city'] == -1){
                $cityErr =  '<span>Select City !</span>';
            }
            else{
                $city = $_POST['city'];
            }



            /*echo $username.'<br>';
            echo $password.'<br>';
            echo $email.'<br>';
            echo $reppassword.'<br>';
            echo $city.'<br>';
            
            foreach($hobies as $hobby){
                echo $hobby.'<br>';
            }*/
        }
    ?>
    
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <form action="register.php" method="post">
                    
                    <h2 class="display-5">Register</h2>

                    <div class="mb-3" style="display: flex;flex-direction:column">
                        <label for="username">Username</label>
                        <input type="text" placeholder="username" name="username" value=<?php echo $username  ?>>
                        <div class="text-danger"><?php echo $usernameErr ?></div>
                    </div>
                    <div class="mb-3" style="display: flex;flex-direction:column">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email" name="email" value=<?php echo $email  ?>>
                        <div class="text-danger"><?php echo $emailErr ?></div>
                    </div>
                    <div class="mb-3" style="display: flex;flex-direction:column">
                        <label for="password">Password</label>
                        <input type="password" placeholder="password" name="password">
                        <div class="text-danger"><?php echo $passwordErr ?></div>
                        <div class="text-danger"><?php echo $notmatchErr ?></div>
                    </div>
                    <div class="mb-3" style="display: flex;flex-direction:column">
                        <label for="reppassword">Repeat Password</label>
                        <input type="password" placeholder="repeat password" name="reppassword">
                        <div class="text-danger"><?php echo $repassErr ?></div>
                        <div class="text-danger"><?php echo $notmatchErr ?></div>
                    </div>
                    <div class="mb-3" style="display: flex;flex-direction:column">
                        <label for="city">City</label>

                        <select class="form-select" name="city" value=<?php echo $city  ?>>
                        <option value='-1'  name="city" 
                        <?php echo $city == '-1' or $city == '' ? 'selected' : '' ?>></option>>Select City</option>    
                            <?php foreach($cities as $plate => $city1) : ?>
                                <option value=<?php echo $plate ?>
                                <?php echo $city == (string)$plate ? 'selected' : '' ?>>
                                <?php echo $city1 ?>
                            </option>
                            <?php endforeach; ?>
                        </select>

                        <div class="text-danger"><?php echo $cityErr ?></div>
                    </div>
                    <div class="mb-3" style="display: flex;flex-direction:column">
                        <label for="hobies">Hobies</label>
                        <div class="form-check">
                            <input type="checkbox" name="hobies[]" value="gaming" id="hobie_1">
                            <label for="hobie_1" class='form-check-label'>Gaming</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="hobies[]" value="sleeping" id="hobie_2">
                            <label for="hobie_2" class='form-check-label'>Sleeping</label>
                        </div>
                        <div class="text-danger"><?php echo $hobiesErr ?></div>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Submit</button>
                </form>

            </div>
        </div>
    </div>

<?php "partials/_footer.php" ?>