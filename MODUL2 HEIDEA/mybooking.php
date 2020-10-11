<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
        <?php
        $bookingnumber = [rand()];
        $name = $_GET['nama'];
        $checkin = $_GET['checkin'];
        $checkout = $_GET['checkout'];
        $roomtype = $_GET['roomtype'];
        $nohp = $_GET['nohp'];
        $service = $_GET['service'];
        $total = $_GET['total']
        ?>
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
                                <td><?= $name ?></td>
                                <td><?= $checkin ?></td>
                                <td><?= $checkout ?></td>
                                <td><?= $roomtype ?></td>
                                <td><?= $nohp ?></td>
                                <td><?= $service ?></td>
                                <td><?= $total ?></td>
                            </tr>
                        
                    </fieldset>
                </div>
            </div>
            
        </div>
        
    </body>
</html>