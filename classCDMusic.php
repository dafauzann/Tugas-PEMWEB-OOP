<?php 
class CDMusic extends Product {
    private $artist;
    private $genre;

    public function __construct($name, $price, $discount, $artist, $genre) {
        parent::__construct($name, $price, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getGenre() {
        return $this->genre;
    }
}
?>