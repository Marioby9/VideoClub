<?php
    include_once "./src/Model/Regex.inc.php";

    $oldMovie = $ORM->findByID("Movie", $_GET["id"]);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateMovie"])) {

        //variables
        
        $title = $_POST["title"];
        $director = $_POST["director"];
        $year = intval($_POST["year"]);
        $publisher = $_POST["publisher"];
        $duration = intval($_POST["duration"]);
        $ISAN = $_POST["ISAN"];
        $genre = $_POST["genre"];
        $cast = $_POST["cast"];

        //errors

        $updated = false;
        $errorInsert = false;
        $errorYear = false;
        $errorDuration = false;
        $errorISAN = false;
        $anyEmptyField = empty($title) || empty($director) || empty($year) || empty($publisher) || empty($duration) || empty($ISAN) || empty($genre) || empty($cast);


        //code 


        if(!$anyEmptyField){
            if(is_int($year)){
                if(is_int($duration)){
                    if(Regex::validateISAN($ISAN)){
                        $movie = new Movie($title, $director, $year, $publisher, $duration, $ISAN, $genre, $cast);
                        $movie->setId($oldMovie->getId());
                        $ORM->flush($movie);
                        $updated = true;
                    }
                    else{
                        $errorISAN = true;
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
    include_once "./src/View/UpdateProduct/UpdateMovieView.php";
?>