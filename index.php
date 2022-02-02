<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact Us Form In PHP</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card  mt-5">

                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr>
                        <?php 
                            $Msg="";
                            if(isset($_GET['error'])){
                                $Msg="Please Fill in the Blanks";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            if(isset($_GET['success'])){
                                $Msg="Your Message Has Been Sent";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        ?>
                    </div>
                    
                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" placeholder="Write Your Message Here" class="form-control" ></textarea>
                            <button class="btn btn-success mt-2" name="btn-send">Sends</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>