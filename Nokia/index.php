<?php

class mobile
{
    public $image;
    public $name;
    public $price;
}

$m1 = new mobile;
$m1->image = "1.png";
$m1->name = "Nokia 7.2";
$m1->price = 42000;

$m2 = new mobile;
$m2->image = "2.png";
$m2->name = "Nokia 7.0";
$m2->price = 35000;

$m3 = new mobile;
$m3->image = "3.png";
$m3->name = "Nokia 6.2";
$m3->price = 29000;

$m4 = new mobile;
$m4->image = "4.png";
$m4->name = "Nokia 5.6";
$m4->price = 24000;

$m5 = new mobile;
$m5->image = "5.png";
$m5->name = "Nokia 4.5";
$m5->price = 21000;

$m6 = new mobile;
$m6->image = "6.png";
$m6->name = "Nokia 3.9";
$m6->price = 18000;

$m7 = new mobile;
$m7->image = "7.png";
$m7->name = "Nokia 3.0";
$m7->price = 15000;

$m8 = new mobile;
$m8->image = "8.png";
$m8->name = "Nokia 2.5";
$m8->price = 12000;



$mobiles = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];

class camera
{
    public $image;
    public $name;
    public $price;
}

$c1 = new camera;
$c1->image = "1.jpg";
$c1->name = "Cannon 7.2";
$c1->price = 42000;

$c2 = new camera;
$c2->image = "2.jpg";
$c2->name = "Cannon 7.0";
$c2->price = 35000;

$c3 = new camera;
$c3->image = "3.jpg";
$c3->name = "Cannon 6.2";
$c3->price = 29000;

$c4 = new camera;
$c4->image = "4.jpg";
$c4->name = "Cannon 5.6";
$c4->price = 24000;

$c5 = new camera;
$c5->image = "5.jpg";
$c5->name = "Cannon 4.5";
$c5->price = 21000;

$c6 = new camera;
$c6->image = "6.jpg";
$c6->name = "Cannon 3.9";
$c6->price = 18000;

$c7 = new camera;
$c7->image = "7.jpg";
$c7->name = "Cannon 3.0";
$c7->price = 15000;

$c8 = new camera;
$c8->image = "8.jpg";
$c8->name = "Cannon 2.5";
$c8->price = 12000;



$cameras = [$c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8];

class watch
{
    public $image;
    public $name;
    public $price;
}

$w1 = new watch;
$w1->image = "a.jpg";
$w1->name = "Watch 7.2";
$w1->price = 42000;

$w2 = new watch;
$w2->image = "b.jpg";
$w2->name = "Watch 7.0";
$w2->price = 35000;

$w3 = new watch;
$w3->image = "c.jpg";
$w3->name = "Watch 6.2";
$w3->price = 29000;

$w4 = new watch;
$w4->image = "d.jpg";
$w4->name = "Watch 5.6";
$w4->price = 24000;

$w5 = new watch;
$w5->image = "e.jpg";
$w5->name = "Watch 4.5";
$w5->price = 21000;

$w6 = new watch;
$w6->image = "f.jpg";
$w6->name = "Watch 3.9";
$w6->price = 18000;

$w7 = new watch;
$w7->image = "g.jpg";
$w7->name = "Watch 3.0";
$w7->price = 15000;

$w8 = new watch;
$w8->image = "h.jpg";
$w8->name = "Watch 2.5";
$w8->price = 12000;



$watches = [$w1, $w2, $w3, $w4, $w5, $w6, $w7, $w8];


?>


<!doctype html>
<html lang="en">

<head>
    <title>Mobiles</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col-12">
        <div class="row">
            <div class="col-2">
                <a href="index.php" onclick="">Mobiles</a>
                <a href="index.php">Cameras</a>
                <a href="index.php">Watches</a>
            </div>
            <div class="col-10">
                <div class="row">
                    <?php
                    foreach ($mobiles as $item) {
                    ?>
                        <div class="col-4 py-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid" src="image/<?php echo $item->image; ?>" alt="">
                                </div>
                                <div class="card-footer">
                                    <h3><?php echo $item->name ?></h3>
                                    <h4><?php echo $item->price ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <?php
                    foreach ($watches as $cc) {
                    ?>
                        <div class="col-4 py-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid" src="image/<?php echo $cc->image; ?>" alt="">
                                </div>
                                <div class="card-footer">
                                    <h3><?php echo $cc->name ?></h3>
                                    <h4><?php echo $cc->price ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <?php
                    foreach ($cameras as $cam) {
                    ?>
                        <div class="col-4 py-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid" src="image/<?php echo $cam->image; ?>" alt="">
                                </div>
                                <div class="card-footer">
                                    <h3><?php echo $cam->name ?></h3>
                                    <h4><?php echo $cam->price ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>