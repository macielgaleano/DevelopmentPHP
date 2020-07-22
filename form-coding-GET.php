<?php

//require 'coding.php'

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form coding</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 m-3">
                    <form method="get" action="shipping.php" id=""> 
                        <input type="text" placeholder="Name:" name="Name" id="" class="form-control mt-3">
                        <input type="text" placeholder="Surname:" name="Surname" id="" class="form-control mt-3">
                        <input type="text" placeholder="Mail:" name="Mail" id="" class="form-control mt-3">
                        <P class="mt-3">Gender:</P>
                        <label for="male">Male</label> 
                        <input type="radio" class="" name="gender" id="male">  
                        <br>
                        <label for="female">Female</label> 
                        <input type="radio" class="" name="gender" id="female"> 
                        <br>
                        <input type="submit" class="btn btn-primary mt-3"></input>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>


<?php

/*-----Meadata

When use the forms in php usually need the name
The tag method able recibe

-------*/
?>