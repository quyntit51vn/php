<?php 
    include_once('header.php');
    include_once('nav.php');
?>
<?php
    include_once('model/book.php');
    $book = new Book(50,"OOP in PHP","nguyenthanhquy",2019);
    $book->display();
?>
<?php 
    include_once('footer.php');
?>