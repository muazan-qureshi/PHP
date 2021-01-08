<?php
// PHP Stop WORDS


?>

<!doctype html>
<html lang="en">

<head>
    <title>Word Frequency</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <div class="col-12">
            <h1 class="text-center py-3">
                Word Frequency
            </h1>
            <form action="word.php" method="post">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Enter Text Here" name="input_text" id="" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-warning">
                    Summarize
                </button>
            </form>
        </div>
        <!-- Output Print Here -->
        <div class="col-12 py-3">
            <?php

            if (isset($_POST['input_text'])) {
                $get = strtolower($_POST['input_text']);
                //echo $get;
                // STOP WORDS
                $extra = [
                    'a',
                    'about',
                    'above',
                    'after',
                    'again',
                    'against',
                    'all',
                    'am',
                    'an',
                    'and',
                    'any',
                    'are',
                    "aren't",
                    'as',
                    'at',
                    'be',
                    'because',
                    'been',
                    'before',
                    'being',
                    'below',
                    'between',
                    'both',
                    'but',
                    'by',
                    "can't",
                    'cannot',
                    'could',
                    "couldn't",
                    'did',
                    "didn't",
                    'do',
                    'does',
                    "doesn't",
                    'doing',
                    "don't",
                    'down',
                    'during',
                    'each',
                    'few',
                    'for',
                    'from',
                    'further',
                    'had',
                    "hadn't",
                    'has',
                    "hasn't",
                    'have',
                    "haven't",
                    'having',
                    'he',
                    "he'd",
                    "he'll",
                    "he's",
                    'her',
                    'here',
                    "here's",
                    'hers',
                    'herself',
                    'him',
                    'himself',
                    'his',
                    'how',
                    "how's",
                    'i',
                    "i'd",
                    "i'll",
                    "i'm",
                    "i've",
                    'if',
                    'in',
                    'into',
                    'is',
                    "isn't",
                    'it',
                    "it's",
                    'its',
                    'itself',
                    "let's",
                    'me',
                    'more',
                    'most',
                    "mustn't",
                    'my',
                    'myself',
                    'no',
                    'nor',
                    'not',
                    'of',
                    'off',
                    'on',
                    'once',
                    'only',
                    'or',
                    'other',
                    'ought',
                    'our',
                    'ours',
                    'ourselves',
                    'out',
                    'over',
                    'own',
                    'same',
                    "shan't",
                    'she',
                    "she'd",
                    "she'll",
                    "she's",
                    'should',
                    "shouldn't",
                    'so',
                    'some',
                    'such',
                    'than',
                    'that',
                    "that's",
                    'the',
                    'their',
                    'theirs',
                    'them',
                    'themselves',
                    'then',
                    'there',
                    "there's",
                    'these',
                    'they',
                    "they'd",
                    "they'll",
                    "they're",
                    "they've",
                    'this',
                    'those',
                    'through',
                    'to',
                    'too',
                    'under',
                    'until',
                    'up',
                    'very',
                    'was',
                    "wasn't",
                    'we',
                    "we'd",
                    "we'll",
                    "we're",
                    "we've",
                    'were',
                    "weren't",
                    'what',
                    "what's",
                    'when',
                    "when's",
                    'where',
                    "where's",
                    'which',
                    'while',
                    'who',
                    "who's",
                    'whom',
                    'why',
                    "why's",
                    'with',
                    "won't",
                    'would',
                    "wouldn't",
                    'you',
                    "you'd",
                    "you'll",
                    "you're",
                    "you've",
                    'your',
                    'yours',
                    'yourself',
                    'yourselves',
                    'zero'
                ];

                // Smame text
                echo $_POST['input_text'];

                // Same text end here
                $a = explode(" ", $get);
                $aa = str_replace(array( '\'', '"',',' ,")","(",';','<', '>' ),"",$a);
                // var_dump($a);
                //print_r($a);
                $pp = array_count_values(array_diff($aa, $extra));
                // echo "<pre>";
                // print_r($pp);
                // echo "</pre>";

                // $po = join(" ",$pp);
                // print_r($po);
                $as = str_replace(",", "", $pp);
                (arsort($as));


                print "<hr>";
                echo "<h3>Important Key Words</h3>";

                if (count($as) > 1) {
                    foreach ($as as $key => $value) {
                        if ($value <= 1) {
                            echo "";
                        } elseif ($value >= 2) {
                            //echo $key;
                            //echo str_replace(","," ",$key);
                            echo $key . ' : ' . $value . " times" . '<br />';
                        }
                    }
                }

                
                
                echo "<hr>";
               
              
               



                
            }

            ?>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>