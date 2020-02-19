<html>
    <head>
        <title>Ian Book Store</title>
    </head>

    <body>
        <h1>Below Is a list of Books, Authors and the Quantity</h1>
        <ul>
            <?php


            $books = array("Freedom in Exile", "Country Life", "Faces and Places", "The Red sari", "Super Economies");
            $authors = array('Abbott Acevedo','Acosta Adams','Adkins Aguilar','Aguirre Albert','Alexander Alford');
            $quantity  = array(300, 78, 67, 39, 233);


            // foreach($books as $book){
            //     echo "<li>$book</li>";

            // }

            for ($x = 0; $x <= 4; $x++) {

                $index = $x;
                echo "<p><strong>Title:</strong> $books[$index], <strong>Author</strong>: $authors[$index], <strong>Quantity</strong> $quantity[$index]</p> <br>";

            }

            ?>
        </ul>
    </body>
</html>
