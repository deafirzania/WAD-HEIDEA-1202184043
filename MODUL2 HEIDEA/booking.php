<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>
            EAD HOTEL - Booking
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

        <br>
        <form action="mybooking.php" method="get">
            <fieldset class="from-group">

                <div class="from-group row">
                    <div class="col-md-3 ml-md-auto">
                        <div class="form-group row">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="form-group row">
                            <label for="tanggal">Date</label>
                            <input type="date" class="form-control" name="tgl">
                        </div>

                        <div class="form-group row">
                            <label for="durasi">Duration</label>
                            <input type="text" class="form-control" name="duration">
                            <p style="font-size: small;">Day(s)</p>
                        </div>
                        

                        <div class="form-group row">
                            <label for="roomtype">Room Type</label>
                            <select class="form-control" id="">
                                <option>Standard</option>
                                <option>Superior</option>
                                <option>Luxury</option>
                            </select>
                        </div>
                        Add Service(s)
                        <div class="form-check row">
                        <p style="font-size: small;">$ 20/Service</p>
                            <input class="form-check-input" 
                            type="checkbox" value="room-service" name="service1">
                            <label class="form-check-label">Room Service</label>
                        </div>

                        <div class="form-check row">
                            <input class="form-check-input" 
                            type="checkbox" value="breakfast" name="service2">
                            <label class="form-check-label">Breakfast</label>
                        </div>

                        <div class="form-group row">
                            <label for="hp">Phone Number</label>
                            <input type="tel" class="form-control" name="nohp">
                        </div>

                        <a href="mybooking.php" class="btn btn-primary btn-lg btn-block">
                            Book
                        </a>

                    </div>
                    <div class="col-md-3 ml-md-auto">
                        
                    </div>
                </div>
            </fieldset>
        </form>

    </body>
</html>