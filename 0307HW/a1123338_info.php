<?php

    $uName=$_GET["uName"];
    $uGender=$_GET["uGender"];
    $uBD=$_GET["uBD"];
    $uPhone=$_GET["uPhone"];
    $uEmail=$_GET["uEmail"];
    $uEvent=$_GET["uEvent"];
    $uLike=$_GET["uLike"];
    $uComment=$_GET["uComment"];

    echo "你的名字是：".$uName."<br>";
    echo "你的性別是：".$uGender."<br>";
    echo "你的生日是：".$uBD."<br>";
    echo "你的手機是：".$uPhone."<br>";
    echo "你的信箱是：".$uEmail."<br>";

    $j="";
    foreach ($uEvent as $i) {
        $j=$j.$i." ";
    }
    echo "你要參加的活動是：".$j."<br>";

    echo "你的期待程度是：".$uLike."<br>";
    echo "你的建議是："."<br>".nl2br($uComment)."<br>";

