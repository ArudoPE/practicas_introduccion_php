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
     * A constructor is gonna be called when we create
     * a new object
     */
    class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($name, $aTitle, $aAuthor, $aPages){
            echo "Hello $name, you have added a new book :)<br>";
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    $book1 = new Book("Mike", "Harry Potter", "JK Rowling", 400);
    $book1->title = "Hunger Games";
    $book2 = new Book("Tom", "Lord Of the Rings", "Tolkien", 700);

    echo $book1->title;

    ?>
</body>
</html>