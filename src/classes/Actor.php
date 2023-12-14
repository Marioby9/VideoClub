<?php
    class Actor {

        private ?string $name;
        private ?int $filmId;

        //

        public function __construct(string $pName = null, int $pFilmId) {
            $this->name = $pName;
            $this->filmId = $pFilmId;
        }

        //

        public function setName(?string $pName) : void {
            $this->name = $pName;
        }
        public function setFilmId(?int $pFilmId) : void {
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