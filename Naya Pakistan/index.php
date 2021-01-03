<!-- PHP Code Here -->
<?php

// $name = $_POST['user_name'];
// $age = $_POST['user_age'];

function validate()
{
    if ($_POST['user_age'] <= 24) {
        echo "Sorry You Can Not Apply because you are Under 25";
    }
    elseif($_POST['user_age'] >= 25 && $_POST['user_age'] <= 60)
    {
        echo "Congrats Your are Able to Apply In Naya Pakistan Housing Scheme.";
    }
    else
    {
        echo "Your are too Much Old";
    }
}
// $salary = $_POST['user_salary'];
function low_salary()
{
    if ($_POST['user_salary'] < 25000) {
        echo "Sorry " . $_POST['user_name'] . ", Your Salary is not enough to Apply in Naya Pakistan Housing Scheme";
    }
}
// $name = $_POST['user_name'];
// Detection
function home_price()
{
    $limit = $_POST['user_limit'];
    $advance = $_POST['user_advance'];
    if ($limit == 3000000) {
        echo ((((3000000 / 100) * 5) + 3000000 - $advance) / 240);
    } elseif ($limit == 3500000) {
        echo ((((3500000 / 100) * 5) + 3500000 - $advance) / 240);
    } elseif ($limit == 4000000) {
        echo ((((4000000 / 100) * 5) + 4000000 - $advance) / 240);
    } elseif ($limit == 4500000) {
        echo ((((4500000 / 100) * 5) + 4500000 - $advance) / 240);
    } elseif ($limit == 5000000) {
        echo ((((5000000 / 100) * 5) + 5000000 - $advance) / 240);
    } elseif ($limit == 5500000) {
        echo ((((5500000 / 100) * 5) + 5500000 - $advance) / 240);
    }
}



?>

<!doctype html>
<html lang="en">

<head>
    <title>Naya Pakistan Housing scheme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 class="py-2 text-center">
        <b>
            نیا پاکستان ہاؤسنگ پروگرام
        </b>
    </h1>
    <!-- <p>نیا پاکستان ہاؤسنگ سکیم </p> -->
    <div class="col-12">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modelId">
            Read Instructions
        </button>
        <button download="" class="btn btn-success">
            <a class="text-white" href="meraghar.pdf" download>
                Download PDF
            </a>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Terms & Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Key Features</h3>
                        <ul>
                            <li>
                                Free Life Insurance
                            </li>
                            <li>
                                Subsidised Markup Rate
                            </li>
                            <li>
                                Financing up to PKR 5 Million
                            </li>
                            <li>
                                Available for up to 20 years
                            </li>
                            <li>
                                Available for up to 20 years
                            </li>
                            <li>
                                Easy Documentation
                            </li>
                            <li>
                                Quick Processing
                            </li>
                            <li>
                                No restrictions and no charges on early repayment
                            </li>
                        </ul>
                        <hr>
                        <h3>Eligibility Criteria</h3>
                        <ul>
                            <li>
                                All men / women holding valid CNIC (including Non Resident Pakistani).
                            </li>
                            <li>
                                First time home owner, one unit per household.
                            </li>
                            <li>
                                One individual can have subsidized house loan facility under this scheme only once.
                            </li>
                            <li>
                                Minimum Monthly Income Required: PKR 25,000/-
                            </li>
                            <li>
                                Minimum 3 years proof of business for business individuals and 2 years proof of business for SEP (self employee professional).
                            </li>
                            <li>
                                Minimum 2 years employment period for Salaried.
                            </li>
                        </ul>
                        <hr>
                        <h3>Product Variants</h3>
                        <ul>
                            <li>Construction</li>
                            <li>
                                First purchase of newly constructed housing unit i.e. first transfer of title documents.
                                (Not more than 1 year old from the date of application as established by completion certificate. In such areas where completion certificate is not available, valuation certificate issued by external valuers may be considered)
                            </li>
                            <li>
                                Purchase of plot and construction thereupon
                            </li>
                            <li>
                                Expansion / Extension of existing housing unit
                            </li>
                        </ul>

                        <button class="btn btn-success">
                            <a class="text-white" href="https://www.bankalhabib.com/mera-pakistan-mera-ghar">
                                Read More
                            </a>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Calculator -->
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-lg-6 py-5 m-auto">
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_name" id="" aria-describedby="helpId" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_age" id="uage" aria-describedby="helpId" placeholder="Enter Your Age">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_salary" id="" aria-describedby="helpId" placeholder="Enter Salary">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Enter Your Home Amount
                        </label>
                        <input type="text" class="form-control" name="user_limit" id="" aria-describedby="helpId" placeholder="Enter Price Limit from 30 Lac to 55 Lac">
                        <!-- <select name="" id="" class="w-100">
                            <!-- <option name="lac30" value="">3000000</option>
                            <option name="lac35" value="">3500000</option>
                            <option name="lac40" value="">4000000</option>
                            <option name="lac45" value="">4500000</option>
                            <option name="lac50" value="">5000000</option>
                            <option name="lac55" value="">5500000</option>
                        </select> -->
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_advance" id="" aria-describedby="helpId" placeholder="Enter Advance Amount">
                    </div>
                    <div class="text-center">
                        <button value="submit" class="btn btn-success">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Details -->
    <p class="text-center" style="font-size: 36px;">
        <?php
        echo "Dear " . $_POST['user_name'] . "<br>";
        validate();
        echo "<br>";
        low_salary();
        echo "<br>";
        echo   home_price() . " Rupees You will pay Everymonth for 20 Years";

        ?>
    </p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script>
        function validate() {
            var agecal = document.querySelector("uage").value;
            if (agecal <= 24) {
                alert("Sorry! You are not able to Apply");
            }
        }
    </script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>