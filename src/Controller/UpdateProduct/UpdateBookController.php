<?php
    include_once "./src/Model/Regex.inc.php";

    $oldBook = $ORM->findByID("Book", $_GET["id"]);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateBook"])) {

        //variables

        $title = $_POST["title"];
        $author = $_POST["author"];
        $year = intval($_POST["year"]);
        $publisher = $_POST["publisher"];
        $pages = intval($_POST["pages"]);
        $ISBN = $_POST["ISBN"];
        $genre = $_POST["genre"];

        //errors

        $updated = false;
        $errorInsert = false;
        $errorYear = false;
        $errorPages = false;
        $errorISBN = false;
        $anyEmptyField = empty($title) || empty($author) || empty($year) || empty($publisher) || empty($pages) || empty($ISBN) || empty($genre);


        //code 


        if(!$anyEmptyField){
            if(is_int($year)){
                if(is_int($pages)){
                    if(Regex::validateISBN($ISBN)){
                        $book = new Book($title, $author, $year, $publisher, $pages, $ISBN, $genre);
                        $book->setId($oldBook->getId());
                        $ORM->flush($book);
                        $updated = true;
                    }
                    else{
                        $errorISBN = true;
                    }
                }
                else{
                    $errorPages = true;
                }
            }
            else{
                $errorYear = true;
            }
        }
        
    }
    include_once "./src/View/UpdateProduct/UpdateBookView.php";
?>