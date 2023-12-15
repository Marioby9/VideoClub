<?php
    require_once "./src/Class/Product.php";

    class Movie extends Product{

        private ?string $director;
        private ?int $duration;
        private ?string $ISAN;

        //

        public function __construct(string $pTitle = null, string $pDirector = null, int $pYear = null, string $pPublisher = null, int $pDuration = null, string $pISAN = null, string $pGenre = null) {
            parent::__construct($pTitle, $pYear, $pPublisher, $pGenre);
            $this->director = $pDirector;
            $this->duration = $pDuration;
            $this->ISAN = $pISAN;
        }

        //

        public function setDirector(?string $pDirector) : void {
            $this->director = $pDirector;
        }
        public function setDuration(?int $pDuration) : void {
            $this->duration = $pDuration;
        }
        public function setISAN(?string $pISAN) : void {
            $this->ISAN = $pISAN;
        }

        //

        public function getDirector() : string {
            return $this->director;
        }
        public function getDuration() : int {
            return $this->duration;
        }
        public function getISAN() : string {
            return $this->ISAN;
        }
    }
?>