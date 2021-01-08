<?php

function circle()
{
    if ($_POST['name'] == "circle") {
        echo "50%";
    }
    // else
    // {

    // }
}

?>
<!-- HTML COSE START HERE -->
<!doctype html>
<html lang="en">

<head>
    <title>Shape Builder</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        section
        {
            height: <?php echo $_POST['height'].$_POST['unit_height']; ?>;
            width: <?php echo $_POST['width'].$_POST['unit_width']; ?>;
            background-color: <?php echo $_POST['bg']; ?>;
             border-radius: ; 
            border: <?php echo $_POST['border_size'].$_POST['border_unit']." ". $_POST['border_style']." ". $_POST['border_color']?>;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center text-danger py-3">
            Shape Builder
        </h2>
        <form action="shape1.php" method="POST">
            <div class="row">
                <div class="form-group col-12 col-lg-4">
                    <input type="text" class="form-control" name="shapename" id="" aria-describedby="helpId" placeholder="Shape Name">
                </div>
                <div class="form-group col-12 col-lg-4">
                    <select class="form-control" placeholder="Select Color" name="bg" id="">
                        <option>Select Color</option>
                        <option>red</option>
                        <option>green</option>
                        <option>blue</option>
                        <option>yellow</option>
                        <option>cyan</option>
                        <option>royalblue</option>
                        <option>orange</option>
                        <option>purple</option>
                        <option>black</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-7 col-lg-4">
                    <input type="text" class="form-control" name="width" id="" aria-describedby="helpId" placeholder="Width (max width 1000px)">
                </div>
                <div class="form-group col-5 col-lg-2">
                    <select class="form-control" placeholder="Select Color" name="unit_width" id="">
                        <option>Select Unit</option>
                        <option>px</option>
                        <option>%</option>
                        <option>vw</option>
                        <option>in</option>
                    </select>
                </div>
                <div class="form-group col-7 col-lg-4">
                    <input type="text" class="form-control" name="height" id="" aria-describedby="helpId" placeholder="Height (max height 1000px)">
                </div>
                <div class="form-group col-5 col-lg-2">
                    <select class="form-control" placeholder="Select Color" name="unit_height" id="">
                        <option>Select Unit</option>
                        <option>px</option>
                        <option>%</option>
                        <option>vh</option>
                        <option>in</option>
                    </select>
                </div>
            </div>
            <!-- <div class="form-group">
                <input type="text" class="form-control" name="bg" id="" aria-describedby="helpId" placeholder="Color">
            </div> -->
            <div class="row">
                <div class="form-group col-12 col-lg-4">
                    <input id="my-input" placeholder="Border Size" class="form-control" type="text" name="border_size">
                </div>
                <div class="form-group col-5 col-lg-2">
                    <select class="form-control" placeholder="border_unit" name="border_unit">
                        <option>Border Unit</option>
                        <option>px</option>
                        <option>%</option>
                        <option>vh</option>
                        <option>in</option>
                    </select>
                </div>

                <div class="form-group col-12 col-lg-4">
                    <select class="form-control" placeholder="Select Color" name="border_color" id="">
                        <option>Select Border Color</option>
                        <option>red</option>
                        <option>green</option>
                        <option>blue</option>
                        <option>yellow</option>
                        <option>cyan</option>
                        <option>royalblue</option>
                        <option>orange</option>
                        <option>purple</option>
                        <option>black</option>
                    </select>
                </div>
                <div class="form-group col-5 col-lg-2">
                    <select class="form-control" placeholder="Select Color" name="border_style" id="">
                        <option>Border Style</option>
                        <option>solid</option>
                        <option>dashed</option>
                        <option>dotted</option>
                        <option>double</option>
                    </select>
                </div>
            </div>
            <button value="submit" class="btn btn-danger">
                Create
            </button>
        </form>

        <!-- Shape draw here -->
        <section class="my-5">
           <div>

           </div>
        </section>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>