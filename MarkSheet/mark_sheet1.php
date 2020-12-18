<?php
    // echo ($_POST);
    // $sr_num = print $_POST['sr_no'];
    // $name = print $_POST['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    .border_a
    {
        border: 1px solid grey;
    }
</style>
</head>

<body style="width: 8.5in; height: 11in;">
    <div>
        <a>Serial No:<?php $srno =  $_POST['sr_no']; echo $srno ?></a>
        <h2 class="text-center">
            Board of Secondary Education<br>
            Karachi
        </h2>
        <h5 class="text-center">
            Statement Of Marks
        </h5>
        <h5 class="text-center">
            S.S.C Examination
        </h5>
        <h5 class="text-center">
            (For Successful Candidates Only)
        </h5>
    </div>
    <div class="row py-3 px-4">
        <div class="col-lg-6">
            <h6>Name: <?php $stdname =  $_POST['std_name']; echo $stdname ?>  </h6>
            <h6>Father Name:<?php $fname =  $_POST['f_name']; echo $fname ?></h6>
            <h6>School:<?php $schname =  $_POST['sch_name']; echo $schname ?></h6>
        </div>
        <div class="col-lg-6">
            <h6>Roll No:<?php $r_no =  $_POST['roll_no']; echo $r_no ?> </h6>
            <h6>Group:<?php $grp =  $_POST['group']; echo $grp ?></h6>
            <h6>Group:<?php $exms =  $_POST['exams']; echo $exms ?>,<?php $yr =  $_POST['year']; echo $yr ?></h6>
        </div>
    </div>

    <!-- Marks Area -->
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-center border_a">
                    Subject
                </div>
                <div class="col-4 border_a">
                    Component I
                </div>
                <div class="col-2 border_a">
                    Marks
                </div>
                <div class="col-4 border_a">
                    Component II
                </div>
                <div class="col-2 border_a">
                    Marks
                </div>
                <div class="col-4 py-2 border_a">
                    <a>Sindhi Salees</a>
                    <br>
                    <a>Urdu</a>
                </div>
                <div class="col-2 py-2 border_a">
                    <a><?php $sin =  $_POST['sind']; echo $sin ?>/75</a>
                    <br>
                    <a><?php $ur =  $_POST['urdu']; echo $ur ?>/75</a>
                </div>
                <div class="col-4 py-2 border_a">
                    <a>Mathematics</a>
                    
                </div>
                <div class="col-2 py-2 border_a">
                    <a><?php $math =  $_POST['mth']; echo $math ?>/100</a>
                    
                </div>
                <div class="col-4 py-2 border_a">
                    <a>English Paper I</a>
                    <br>
                    <a>English Paper II</a>
                </div>
                <div class="col-2 py-2 border_a">
                    <a><?php $eng1 =  $_POST['eng_one']; echo $eng1 ?>/75</a>
                    <br>
                    <a><?php $eng2 =  $_POST['eng_two']; echo $eng2 ?>/75</a>
                </div>
                <div class="col-4 py-2 border_a">
                    <a>Biology (TH)</a>
                    <br>
                    <a>Biology (PR)</a>
                </div>
                <div class="col-2 py-2 border_a">
                    <a><?php $bioth =  $_POST['bio_th']; echo $bioth ?>/85</a>
                    <br>
                    <a><?php $biopr =  $_POST['bio_pr']; echo $biopr ?>/15</a>
                </div>
                <div class="col-4 py-2 border_a">
                    <a>Pakistan Studies</a>
                    
                </div>
                <div class="col-2 py-2 border_a">
                    <a><?php $pst =  $_POST['pak_study']; echo $pst ?>/75</a>
                </div>
                <div class="col-4 py-2 border_a">
                    <a>Physics (TH)</a>
                    <br>
                    <a>Physics (PR)</a>
                </div>
                <div class="col-2 py-2 border_a">
                    <a><?php $phyth =  $_POST['phy_th']; echo $phyth ?>/85</a>
                    <br>
                    <a><?php $phypr =  $_POST['phy_pr']; echo $phypr ?>/15</a>
                </div>
                <div class="col-4 py-2 border_a">
                    <a>Islamiat</a>
                    
                </div>
                <div class="col-2 py-2 border_a">
                <a><?php $islam =  $_POST['isl']; echo $islam ?>/75</a>
                </div>
                <div class="col-4 py-2 border_a">
                    <a>Chemistry (TH)</a>
                    <br>
                    <a>Chemistry (PR)</a>
                </div>
                <div class="col-2 py-2 border_a">
                    <a><?php $chemth =  $_POST['chem_th']; echo $chemth ?>/85</a>
                    <br>
                    <a><?php $chempr =  $_POST['chem_pr']; echo $chempr ?>/15</a>
                </div>
            </div>
            <div class="text-center py-3">
                Grand <?php $totalnum = $chempr + $chemth + $eng1 +$eng2 + $islam + $phypr + $phyth +$biopr + $bioth + $pst + $sin + $math +$ur; echo $totalnum ; ?> Total Out of 850
            </div>
            <div class="text-center py-3">
                Grade :<?php
                    $p = ($totalnum * 100)/850;
                    if($p >= 80 && $p <= 100)
                    {
                        $grade = "A+";
                    }
                    elseif($p > 70 && $p < 80)
                    {
                        $grade = "A";
                    }
                    elseif($p > 60 && $p < 70)
                    {
                        $grade = "B";
                    }
                    elseif($p > 50 && $p < 60)
                    {
                        $grade = "C";
                    }
                    elseif($p > 40 && $p < 50)
                    {
                        $grade = "D";
                    }
                    elseif($p < 40 && $p < 50)
                    {
                        $grade = "fail";
                    }
                    else
                    {
                        $grade = "Invaild_Format";
                    }
                    echo $grade;
                ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap Tags -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

</body>

</html>