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
        <form action="mybooking.php" method="POST">
            <fieldset class="from-group">

                <div class="from-group row">
                    <div class="col-md-3 ml-md-auto">
                        <div class="form-group row">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group row">
                            <label for="checkin">Date</label>
                            <input type="date" class="form-control" name="checkin">
                        </div>

                        <div class="form-group row">
                            <label for="duration">Duration</label>
                            <input type="number" class="form-control" name="duration">
                            <p style="font-size: small;">Day(s)</p>
                        </div>
                        

                        <div class="form-group row">
                            <label for="roomtype">Room Type</label>
                            <select class="form-control" id="" name="roomtype">
                                <option value="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQz-87ki60ycOwyo1b-3Us3GT1kwIsxZ3jesA&usqp=CAU">
                                Standard</option>
                                <option value="https://www.watermark-bali.com/wp-content/uploads/2017/09/superior-room2.jpg">
                                Superior</option>
                                <option value="https://flh.ca/media/44731/executive-luxury_1170x650.jpg?width=848&maxwidth=848">
                                Luxury</option>
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
                    <div class="col-md-5 ml-md-auto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQz-87ki60ycOwyo1b-3Us3GT1kwIsxZ3jesA&usqp=CAU">
                    </div>
                </div>
            </fieldset>
        </form>

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>