<?php
include( './includes/header.php' );
include( './includes/db_link.php' );
$query = "SELECT * FROM `products` ORDER BY `id` DESC";
$request = mysqli_query( $link, $query );
?>
<table border="0" cellspacing="5px" cellpadding="7px" style="width:100%">
    <tr>
        <?php
        $counter = 0;
        while ( $row = mysqli_fetch_array( $request ) ) {
            $counter++;
            ?>
        <td style='border:1px solid #999;vertical-align:top;width:33%;'><a href="product.php?id=<?php echo $row["id"];?>"><h4 style='color:saddlebrown;text-align:center;margin:10px 0'><?php echo $row["name"];?></h4>
             <img src='products/<?php echo $row["image"];?>' width="250px" height="150px"> </a> <br>
            <span>قیمت: <?php echo substr(number_format($row["price"], 2, "", ","), 0, -2);?> تومان</span> <br>
            <span>موجودی: <?php echo $row["qty"];?> </span> <br>
            <span style="font-size: 14px">توضیحات: <?php echo substr($row["details"], 0, 100)."...";?> </span> <br>
            <br>
            <strong><a href='product.php?id=<?php echo $row["id"];?>'>ادامه توضیحات و خرید &leftarrow;</a></strong></td>
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