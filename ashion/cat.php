<?php

class category
{
    public $id;
    public $name;
}

$cat0 = new category;
$cat0->id = 1;
$cat0->name = "All";

$cat1 = new category;
$cat1->id = 2;
$cat1->name = "Shirts";

$cat2 = new category;
$cat2->id = 3;
$cat2->name = "Watches";

$cat3 = new category;
$cat3->id = 4;
$cat3->name = "Shoes";

$cat4 = new category;
$cat4->id = 5;
$cat4->name = "Pants";

$categories = [$cat0, $cat1, $cat2, $cat3, $cat4];

class all
{
    public $name;
    public $price;
    public $image;
}

$all1 = new all;
$all1->name = "Product";
$all1->price = "PKR.500";
$all1->image = "image/1.jpg";

$all2 = new all;
$all2->name = "Product";
$all2->price = "PKR.500";
$all2->image = "image/2.jpg";

$all3 = new all;
$all3->name = "Product";
$all3->price = "PKR.500";
$all3->image = "image/3.jpg";

$all4 = new all;
$all4->name = "Product";
$all4->price = "PKR.500";
$all4->image = "image/4.jpg";

$all5 = new all;
$all5->name = "Product";
$all5->price = "PKR.500";
$all5->image = "image/5.jpg";

$all6 = new all;
$all6->name = "Product";
$all6->price = "PKR.500";
$all6->image = "image/6.jpg";

$all7 = new all;
$all7->name = "Product";
$all7->price = "PKR.500";
$all7->image = "image/7.jpg";

$all8 = new all;
$all8->name = "Product";
$all8->price = "PKR.500";
$all8->image = "image/8.jpg";

$all9 = new all;
$all9->name = "Product";
$all9->price = "PKR.500";
$all9->image = "image/9.jpg";

$all11 = new all;
$all11->name = "Product";
$all11->price = "PKR.500";
$all11->image = "image/10.jpg";

$all12 = new all;
$all12->name = "Product";
$all12->price = "PKR.500";
$all12->image = "image/11.jpg";

$all13 = new all;
$all13->name = "Product";
$all13->price = "PKR.500";
$all13->image = "image/12.jpg";

$all14 = new all;
$all14->name = "Product";
$all14->price = "PKR.500";
$all14->image = "image/13.jpg";

$all15 = new all;
$all15->name = "Product";
$all15->price = "PKR.500";
$all15->image = "image/14.jpg";

$all16 = new all;
$all16->name = "Product";
$all16->price = "PKR.500";
$all16->image = "image/15.jpg";

$all16 = new all;
$all16->name = "Product";
$all16->price = "PKR.500";
$all16->image = "image/16.jpg";

$all17 = new all;
$all17->name = "Product";
$all17->price = "PKR.500";
$all17->image = "image/17.jpg";

$alls = [$all1, $all2, $all3, $all4, $all5, $all6, $all7, $all8, $all9, $all10, $all11, $all12, $all13, $all14, $all15, $all16, $all7,]
?>



<!doctype html>
<html lang="en">

<head>
    <title>CATEG0RIES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center py-3">
            Products
        </h1>
        <ul class="list-unstyled d-flex mr-auto">
            <?php
            foreach ($categories as $item) {

            ?>
                <li class="px-5 mx-3">
                    <a href="cat.php?cid=<?php echo $item->id ?>"><?php echo $item->name  ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
        <div class="col-12">
            <div class="row">
                <?php

                if ($_GET['cid'] == 1) {
                    foreach ($alls as $item) {

                ?>
                        <div class="col-12 col-lg-3 py-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img class="img-fluid" src="<?php echo $item->image ?>" alt="">
                                </div>
                                <div class="card-footer">
                                    <h3 class="text-center">
                                        <?php
                                        echo $item->name;
                                        ?>
                                    </h3>
                                    <h4>
                                        <?php
                                        echo $item->price;
                                        ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                <?php

                    }
                }
                ?>
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