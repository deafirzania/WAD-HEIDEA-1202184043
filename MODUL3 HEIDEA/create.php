<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>
            EAD EVENTS - Home
        </title>
    </head>


    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="col-sm-10">
                EAD EVENTS
            </div>
            <div class="col-sm-2 navbar-nav">
                <a class="nav-link active" href="home.php">Home</a>
                <a class="navbar navbar-dark bg-light my-2 my-sm-0" href="create.php">Create Event</a>
            </div>
        </nav>


        <br>
        <h4 style="text-align: left; color: #1b97da;">
            &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; Create Event
        </h4>
        <br>
        <div class="container">
        <form action="detailbooking.php" method="POST">
            <fieldset class="from-group">
                <div class="row">
                    <div class="col">
                        <div class="card bg-danger mb-3" style="width: 33rem; height: 2rem;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="Name">Name</label>
                                            <br>
                                            <input type="text" class="form-control" name="name">
                                        </div>

                                        <div class="form-group row">
                                            <br>
                                            <label for="description">Description</label>
                                            <br>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <div class="form-group row">
                                            <br>
                                            <label for="upload">Upload Picture</label>
                                            <br>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                    id="inputGroupFile01" aria-describedby="pics">
                                                    <label class="custom-file-label" for="pics">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kategori">Category &nbsp;&nbsp;</label>
                                            <input type="radio" name="categori"
                                            <?php if (isset($categori) && $categori=="online") echo "checked";?>
                                            value="online">Online &nbsp;
                                            <input type="radio" name="categori"
                                            <?php if (isset($categori) && $categori=="offline") echo "checked";?>
                                            value="male">Offline
                                        </div>
                                    </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary mb-3" style="width: 33rem; height: 2rem;">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="start">Start</label>
                                    <select class="form-control" name="start">
                                        <option value="sembilan">09:00</option>
                                        <option value="sepuluh">10:00</option>
                                        <option value="sebelas">11:00</option>
                                        <option value="tigabelas">13:00</option>
                                        <option value="empatbelas">14:00</option>
                                        <option value="limabelas">15:00</option>
                                        <option value="enambelas">16:00</option>
                                        <option value="tujuhbelas">17:00</option>
                                        <option value="sembilanbelas">19:00</option>
                                        <option value="duapuluh">20:00</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="Finish">Finish</label>
                                    <select class="form-control" name="finish">
                                        <option value="sepuluh">10:00</option>
                                        <option value="sebelas">11:00</option>
                                        <option value="tigabelas">13:00</option>
                                        <option value="empatbelas">14:00</option>
                                        <option value="limabelas">15:00</option>
                                        <option value="enambelas">16:00</option>
                                        <option value="tujuhbelas">17:00</option>
                                        <option value="sembilanbelas">19:00</option>
                                        <option value="duapuluh">20:00</option>
                                        <option value="duasatu">21:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Place">Place</label>
                                <input type="text" class="form-control" name="place">
                            </div>
                            <div class="form-group row">
                                <label for="Price">Price</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div class="form-check row">
                            <label for="benefit">Benefit</label><br>
                            <input class="form-check-input"
                            type="checkbox" value="Snacks" name="Snacks">
                            <label for="snacks">Snacks &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input class="form-check-input"
                            type="checkbox" value="certificate" name="certificate">
                            <label for="snacks">Certificate &nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input class="form-check-input"
                            type="checkbox" value="souvenir" name="souvenir">
                            <label for="snacks">Souvenir</label>
                        </div>
                        <div class="card-footer text-right">
                            <a href="details.php" class="btn btn-primary btn-lg active" role="button" 
                            aria-pressed="true">Submit</a>
                            <a href="create.php" class="btn btn-danger btn-lg active" role="button" 
                            aria-pressed="true">Cancel</a>   
                    </div>
                    </div>
                
                
                
            </fieldset>
        </form>
        
        </div>

    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
