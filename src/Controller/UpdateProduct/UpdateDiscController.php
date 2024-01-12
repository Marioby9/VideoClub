<?php
    include_once "./src/Model/Regex.inc.php";

    $oldDisc = $ORM->findByID("Disc", $_GET["id"]);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateDisc"])) {

        //variables
        
        $title = $_POST["title"];
        $artist = $_POST["artist"];
        $year = intval($_POST["year"]);
        $publisher = $_POST["publisher"];
        $duration = intval($_POST["duration"]);
        $ISWC = $_POST["ISWC"];
        $genre = $_POST["genre"];

        //errors

        $updated = false;
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
                        $disc->setId($oldDisc->getId());
                        $ORM->flush($disc);
                        $updated = true;
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
    include_once "./src/View/UpdateProduct/UpdateDiscView.php";
?>