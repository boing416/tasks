<?php

class TasksController {
    public function index() {

        $tasks = Task::all();
        require_once('views/tasks/index.php');
    }

    public function show() {

        if (!isset($_GET['id']))
            return call('pages', 'error');


        $task = Task::find($_GET['id']);
        require_once('views/tasks/show.php');
    }

    public function edit(){
        $authAdmin = true;
        if (isset($_GET['id'])){
            Task::edit($_GET['id']);
            $tasks = Task::all();
            require_once('views/tasks/index.php');
        }
        $tasks = Task::all();
        require_once('views/tasks/index.php');

    }

    public function create() {


        
        if($_POST['title']) {
//            print_r($_POST); exit();
            $target_dir = "web/uploads/";
            $num = rand(0,1000);
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
// Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
// Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
// Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                    $filename = basename( $_FILES["fileToUpload"]["name"]);
                    Task::create($_POST['title'],$_POST['username'],$_POST['text'],$filename,$_POST['email']);

                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            require_once('views/tasks/index.php');
        }
        else {
            require_once('views/tasks/create.php');
        }
        

    }
}