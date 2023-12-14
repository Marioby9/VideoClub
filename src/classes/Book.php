<?php
    require_once "./Product.php";

    class Book extends Product{
        
        private ?string $author;
        private ?int $pages;
        private ?string $ISBN;

        //

        public function __construct(string $pTitle = null, string $pAuthor = null, int $pYear = null, string $pPublisher = null, int $pPages = null, string $pISBN = null, string $pGenre = null) {
            parent::__construct($pTitle, $pYear, $pPublisher, $pGenre);
            $this->author = $pAuthor;
            $this->pages = $pPages;
            $this->ISBN = $pISBN;
        }

        //

        public function setAuthor(?string $pAuthor) : void {
            $this->author = $pAuthor;
        }
        public function setPages(?string $pPages) : void {
            $this->pages = $pPages;
        }
        public function setISBN(?string $pISBN) : void {
            $this->ISBN = $pISBN;
        }

        //

        public function getAuthor() : string {
            return $this->author;
        }
        public function getPages() : int {
            return $this->pages;
        }
        public function getISBN() : string {
            return $this->ISBN;
        }
    }
?>