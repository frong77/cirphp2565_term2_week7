<?php
    function add(){
        $a = 10;
        $b = 5;
        $add = $a + $b;
        print("<h1>$a +  $b = $add . </h1>");
    }

     function sub() {
       $a = 10;
       $b = 5;
       $sub = $a - $b;
       print("<h1>$a - $b = $sub</h1>");
    }
 
    function mod(){
    $a = 10;
    $b = 5;
    $mod =$a / $b;
    print("<h1>$a / $b = $mod</h1>");
    }

    function divison(){
    $a = 10;
    $b = 5;
    $divison= $a * $b;
    print("<h1>$a * $b = divison</h1>")
    }

    add(); //call  function
    print("<br/>");
    sub();//call function
    print("<br/>");
    mod(); //call function
    print("<br/>");
    divison(); //call function
    print("<br/>");
    ?> 