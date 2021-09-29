<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP :3</title>
</head>
<body>
    <?php
    /**
     *
     * G, PG, PG-13, R, NR (valid ratings for movies)
     * Visibility modifiers, it's a keyword (public or private)
     * public and var means, it's open to all the code, we can modify and access
     * private means "only code inside that it's declared, is able to use it"
     * Getters and Setters are special functions to set and get attributes
     */
    class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this->title = $title;
            $this->setRating($rating);
        }

        function getRating(){
            return $this->rating;
        }

        function setRating($rating){
            if($rating == "G" || $rating == "PG" ||
            $rating == "PG-13" || $rating == "R" ||
            $rating = "NR"){
                $this->rating = $rating;
            }else{
                $this->rating = "NR";
            }
        }
    }

    $avengers = new Movie("Avengers", "DOG");

    //$avengers->setRating("PG");

    echo $avengers->getRating();
    ?>
</body>
</html>