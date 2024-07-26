<?php
include( './includes/header.php' );
include( './includes/db_link.php' );
$query = "SELECT * FROM `products`";
$request = mysqli_query( $link, $query );
?>
<table border="1px" style="width:100%">
    <tr>
        <?php
        $counter = 0;
        while ( $row = mysqli_fetch_array( $request ) ) {
            $counter++;
            ?>
        <td style='border-style:dotted dashed;vertical-align:top;width:33%;'><h4 style='color: brown'><?php echo $row["name"];?></h4>
            <a href="product.php?id=<?php echo $row["id"];?>"> <img src='products/<?php echo $row["image"];?>' width="250px" height="150px"> </a> <br>
            <span>قیمت: <?php echo substr(number_format($row["price"], 2, "", ","), 0, -2);?> تومان</span> <br>
            <span>موجودی: <?php echo $row["qty"];?> </span> <br>
            <span>توضیحات: <?php echo substr($row["details"], 0, 100)."...";?> </span> <br>
            <br>
            <strong><a href='product.php?id=<?php echo $row["id"];?>'>ادامه توضیحات و خرید</a></strong></td>
        <?php
        if ( $counter % 3 == 0 ) {
            echo "</tr><tr>";
        }
        }
        if ( $counter % 3 != 0 ) {
            echo "</tr>";
        }
        ?>
</table>
<?php
include( './includes/footer.php' );
?>