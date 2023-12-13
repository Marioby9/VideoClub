<?php
    require_once "./Product.php";

    class Disc extends Product{
        
        private string $artist;
        private int $duration;
        private string $ISWC;

        //

        public function __construct(string $pTitle = null, string $pArtist = null, int $pYear = null, string $pPublisher = null, int $pDuration = null, string $pISWC = null, string $pGenre = null) : void {
            parent::__construct($pTitle, $pYear, $pPublisher, $pGenre);
            $this->artist = $pArtist;
            $this->duration = $pDuration;
            $this->ISWC = $pISWC;
        }

        //

        public function setArtist(string $pArtist) : void {
            $this->artist = $pArtist;
        }
        public function setDuration(string $pDuration) : void {
            $this->duration = $pDuration;
        }
        public function setISWC(string $pISWC) : void {
            $this->ISWC = $pISWC;
        }

        //

        public function getArtist() : string {
            return $this->artist;
        }
        public function getDuration() : int {
            return $this->duration;
        }
        public function getISWC() : string {
            return $this->ISWC;
        }
    }
?>