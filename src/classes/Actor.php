<?php
    class Actor {

        private $name;
        private $filmId;

        //

        public function __construct(string $pName = null, int $pFilmId) : void {
            $this->name = $pName;
            $this->filmId = $pFilmId;
        }

        //

        public function setName(string $pName) : void {
            $this->name = $pName;
        }
        public function setFilmId(string $pFilmId) : void {
            $this->filmId = $pFilmId;
        }

        //

        public function getName() : string {
            return $this->name;
        }
        public function getFilmId() : string {
            return $this->filmId;
        }
    }
?>