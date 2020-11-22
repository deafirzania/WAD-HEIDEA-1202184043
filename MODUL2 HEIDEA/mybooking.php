<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <?php
        
        $bookingnumber = rand();
        $nama = $_POST['name'];
        $checkin = $_POST['checkin'];
        $duration = $_POST['duration'];
        $checkout =  date('m/d/y', strtotime($check . ' + ' .$duration . 'days'));
        $roomtype = $_POST['roomtype'];
        $nohp = $_POST['nohp'];
        $service1 = $_POST['roomservice'];
        
        $total;
        if($roomtype == "standard") {
            $total = (90*$duration)+$servicebill;
         } elseif($roomtype == "superior"){
             $total = (150*$duration)+$servicebill;   
         }
         else{
             $total = (200*$duration)+$servicebill;
         }
        ?>
        
        <title>
            EAD HOTEL - My Booking
        </title>
        
    </head>


    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-primary">
            <div class="collapse navbar-collapse d-flex justify-content-center">
            <div class="navbar-nav">
                <a class="nav-link active" href="home.php">Home</a>
                <a class="nav-link active" href="booking.php">Booking</a>
            </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <fieldset>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Booking Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Check in</th>
                                <th scope="col">Check out</th>
                                <th scope="col">Room Type</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Service</th>
                                <th scope="col">Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><? $bookingnumber ?></th>
                                <td><?= $nama ?></td>
                                <td><?= date('d/m/Y', strtotime($checkin)) ?></td>
                                <td><?= date('d/m/Y', strtotime($checkout)) ?></td>
                                <td><?= $roomtype ?></td>
                                <td><?= $nohp ?></td>
                                <td><ul><li><?= $service1?></li></ul></td>
                                <td><?= $total ?></td>
                            </tr>
                        
                    </fieldset>
                </div>
            </div>
            
        </div>
        
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>