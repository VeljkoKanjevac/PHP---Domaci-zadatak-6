<?php

    $imena = ["toma", "petar", "marko"];

    $imeProsledjeno = isset($_POST["ime"]);

    if(!$imeProsledjeno)
    {
        die("Ime nije prosledjeno.");
    }

    $ime = trim($_POST["ime"]);

    if(strlen($ime) < 3)
    {
        die("Ime mora sadrzati bar 3 karatera.");
    }

    if(in_array(strtolower($ime), $imena))
    {
        echo "Ime $ime je pronadjeno u listi imena.";
    }
    else
    {
        echo "Ime $ime nije u listi.";
    }

?>