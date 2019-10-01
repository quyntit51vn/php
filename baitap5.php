<?php 
    include_once('header.php');
    include_once('nav.php');
    include_once('model/book.php');
    $books = Book::getList($_REQUEST['search']);
?>
<div class="container pt-5">
    <button class="btn btn-outline-info float-right"><i class="fas fa-plus-circle"></i> Thêm</button>
    <form action="" method="GET">
        <div class="form-group">
            <input class="form-control" name="search"  style="max-width: 200px; display:inline-block;" placeholder="Search">
            <button type="submit" class="btn btn-default" style="margin-left:-50px"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <table class="table mt-5">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>Price</th>
                <th>Author</th>
                <th>Year</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($books as $key => $value){
            ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value->title?></td>
                <td><?php echo $value->price?></td>
                <td><?php echo $value->author?></td>
                <td><?php echo $value->year?></td>
                <td>
                    <button class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                    <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
            </tr>    
            <?php 
                }
            ?>
        </tbody>
    </table>
</div>
<?php 
    include_once('footer.php');
?>