<?php

    abstract class Product {

        protected int $id;
        protected string $title;
        protected int $year;
        protected string $publisher;
        protected string $genre;

        //

        public function __construct(string $pTitle = null, int $pYear = null, string $pPublisher = null, string $pGenre = null) {
            $this->title = $pTitle;
            $this->year = $pYear;
            $this->publisher = $pPublisher;
            $this->genre = $pGenre;
        }

        //

        final public function setTitle(string $pTitle) : void {
            $this->title = $pTitle;
        }
        final public function setYear(int $pYear) : void {
            $this->year = $pYear;
        }
        final public function setPublisher(string $pPublisher) : void {
            $this->publisher = $pPublisher;
        }
        final public function setGenre(string $pGenre) : void {
            $this->genre = $pGenre;
        }

        //

        final public function getTitle() : string {
            return $this->title;
        }
        final public function getYear() : int {
            return $this->year;
        }
        final public function getPublisher() : string {
            return $this->publisher;
        }
        final public function getGenre() : string {
            return $this->genre;
        }

    }

?>