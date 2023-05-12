<?php

if(!isset($_POST['btn'])){
    header('Location: error.php?e=1'); 
    exit;
    //if no button was clicked then go to error page
}

$totalMarks = 0; // Do not edit, initialisation of variable
$totalQues = 10; //Enter total number of questions here

//first value can be anything as array initialise with 0
$ans = array('undef',
             'C',
            'D',
            'A',
            'A',
            'B',
            'D',
            'B',
            'A',
            'C',
            'B',
        );

for ($i=1; $i<= $totalQues; $i++){
if(isset($_POST['answer-'.$i])){
    if($_POST['answer-'.$i] == $ans[$i] ){
        $totalMarks++;
    }    
}
}

?>
<body>
        <header><h1>Quiz</h1></header>
        <hr>
            <div id="result">
        <p>Result:
        <strong style="font-size:1.5em;" ><?= $totalMarks; ?></strong>/<?= $totalQues; ?></p>
                </div>
    
    </body>