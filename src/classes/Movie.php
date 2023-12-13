<?php
    require_once "./Product.php";

    class Movie extends Product{

        private string $director;
        private array $cast;
        private int $duration;
        private string $ISAN;

        //

        public function __construct(string $pTitle = null, string $pDirector = null, array $pCast = null, int $pYear = null, string $pPublisher = null, int $pDuration = null, string $pISAN = null, string $pGenre = null) {
            parent::__construct($pTitle, $pYear, $pPublisher, $pGenre);
            $this->director = $pDirector;
            $this->cast = $pCast;
            $this->duration = $pDuration;
            $this->ISAN = $pISAN;
        }

        //

        public function setDirector(string $pDirector) : void {
            $this->director = $pDirector;
        }
        public function setCast(string $pCast) : void {
            $this->cast = $pCast;
        }
        public function setDuration(int $pDuration) : void {
            $this->duration = $pDuration;
        }
        public function setISAN(string $pISAN) : void {
            $this->ISAN = $pISAN;
        }

        //

        public function getDirector() : string {
            return $this->director;
        }
        public function getCast() : array {
            return $this->cast;
        }
        public function getDuration() : int {
            return $this->duration;
        }
        public function getISAN() : string {
            return $this->ISAN;
        }
    }
?>