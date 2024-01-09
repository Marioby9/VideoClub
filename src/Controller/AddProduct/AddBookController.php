<?php
    include_once "./src/Model/Regex.inc.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addBook"])) {

        //variables
        
        $title = $_POST["title"];
        $author = $_POST["author"];
        $year = intval($_POST["year"]);
        $publisher = $_POST["publisher"];
        $pages = intval($_POST["pages"]);
        $ISBN = $_POST["ISBN"];
        $genre = $_POST["genre"];

        //errors

        $inserted = false;
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
                        $ORM->persist($book);
                        $inserted = true;
                        //VACIAMOS EL POST PORQUE AL INSERTAR CORRECTAMENTE, QUEREMOS VACIAR LOS INPUTS
                        $_POST = array(); 
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
    include_once "./src/View/AddProduct/AddBookView.php";
?>