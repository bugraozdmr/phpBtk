<?php

function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>


<?php 

    $accepted_type = ['jpg','jpeg','png','webp'];

    if(isset($_POST['btn-file-upload'])){
        if($_POST['btn-file-upload'] == 'upload'){
            echo '<pre>';
            print_r($_FILES['fileToUpload']);
            print_r($_POST);
            echo '</pre>';

            $file_count = count($_FILES['fileToUpload']['name']);

            echo $file_count;
            if($file_count == 0){
                echo 'upload File !';
            }
            else{
                for($i = 0; $i < $file_count; $i++){
                    echo $_FILES['fileToUpload']['name'][$i];
                
                    $dest_path = "./uploadedFiles/";
                    $filename = $_FILES['fileToUpload']['name'][$i];
                    $fileSourcePath = $_FILES['fileToUpload']['tmp_name'][$i];
    
                    $size = $_FILES['fileToUpload']['size'][$i];
    
    
                    
    
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    
                    $basename = pathinfo($filename, PATHINFO_FILENAME);
    
                    $randomString = generateRandomString(4);
    
                    if(in_array($extension,$accepted_type)){
                        
                        if($size > 1024 * 1024){
                            echo 'size can not be larger than 1mb'.'<br>';
                        }
                        else{
                            $new_name = $basename.'_'.$randomString.'.'.$extension;
    
                            $file_dest_path = $dest_path.$new_name;
    
                            if(move_uploaded_file($fileSourcePath,$file_dest_path)){
                                echo 'file uploaded'.'<br>';
                            }
                            else{
                                echo 'file could not upload'.'<br>';
                            }
                        }
                    }
                    else{
                        echo 'only image files are allowed'.'<br>';
                    }
                }
            }
            
            
        }
    }
?>