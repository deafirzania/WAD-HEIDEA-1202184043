<?php include 'connect.php';

        $nama = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $date= $_POST['date'];
        $start = $_POST['start'];
        $finisih = $_POST['finish'];
        $place = $_POST['place'];
        $price = $_POST['price'];
        $benefit = implode(",",$_POST['benefit']);

        $random = rand();
        $ekstention =  array('png','jpg','jpeg','gif');
        $picsname = $_FILES['pics']['name'];
        $picssize = $_FILES['pics']['size'];
        $pathInfo = pathinfo($picsname, PATHINFO_EXTENSION);

            $path = $random.'_'.$picsname;
        move_uploaded_file($_FILES['pics']['tmp_name'], 'images/'.
        $random.'_'.$picsname);

        $postEvent = mysqli_query($connect, "INSERT INTO event_table 
        VALUES ('', '$name', '$description', '$path', '$category', 
        '$date', '$start', '$finish', '$place', '$price', '$benefit')");

        header("location:home.php");
         
    ?>