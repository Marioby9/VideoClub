<?php
    include_once "./src/Model/Regex.inc.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addDisc"])) {

        //variables
        
        $title = $_POST["title"];
        $artist = $_POST["artist"];
        $year = intval($_POST["year"]);
        $publisher = $_POST["publisher"];
        $duration = intval($_POST["duration"]);
        $ISWC = $_POST["ISWC"];
        $genre = $_POST["genre"];

        //errors

        $inserted = false;
        $errorInsert = false;
        $errorYear = false;
        $errorDuration = false;
        $errorISWC = false;
        $anyEmptyField = empty($title) || empty($artist) || empty($year) || empty($publisher) || empty($duration) || empty($ISWC) || empty($genre);


        //code 


        if(!$anyEmptyField){
            if(is_int($year)){
                if(is_int($duration)){
                    if(Regex::validateISWC($ISWC)){
                        $disc = new Disc($title, $artist, $year, $publisher, $duration, $ISWC, $genre);
                        $ORM->persist($disc);
                        $inserted = true;
                        //VACIAMOS EL POST PORQUE AL INSERTAR CORRECTAMENTE, QUEREMOS VACIAR LOS INPUTS
                        $_POST = array(); 
                    }
                    else{
                        $errorISWC = true;
                    }
                }
                else{
                    $errorDuration = true;
                }
            }
            else{
                $errorYear = true;
            }
        }
        
    }
    include_once "./src/View/AddProduct/AddDiscView.php";
?>