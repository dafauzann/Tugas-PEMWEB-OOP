<?php
include('classproduct.php');
include('classcdmusic.php');
include('classcdrack.php');

$product1 = new CDMusic("CDMUSIC-01",20000,20,"ARTIST-1","POP");
$product2 = new CDRack("RACK-01",100000,20,100,"MODEL-1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Produk Music</h2>
    <table style="text-align: center ;" border="1" cellpading="10px" cellspacing="0";>
            <tr>
            <th scope="col">NOMOR</th>
                <th scope="col">NAME</th>
                <th scope="col">PRICE</th>
                <th scope="col">DISCOUNT</th>
                <th scope="col">GENRE</th>
                <th scope="col">ARTIST</th>
            </tr>
    <tr>
                <th scope="row">1</th>
                <td><?= $product1->getName(); ?></td>
                <td><?= $product1->getPrice(); ?></td>
                <td><?= $product1->getDiscount();?></td>
                <td><?= $product1->getArtist();?></td>
                <td><?= $product1->getGenre(); ?></td>
    </tr>
    </table>

    <h2>Produk Rack</h2>
    <table style="text-align: center ;" border="1" cellpading="10px" cellspacing="0";>
        <thead class="table-dark">
            <tr>
            <th scope="col">NOMOR</th>
                <th scope="col">NAME</th>
                <th scope="col">PRICE</th>
                <th scope="col">DISCOUNT</th>
                <th scope="col">CAPACITY</th>
                <th scope="col">MODEL</th>
            </tr>
    <tr>
                <th scope="row">1</th>
                <td><?= $product2->getName(); ?></td>
                <td><?= $product2->getPrice(); ?></td>
                <td><?= $product2->getDiscount();?></td>
                <td><?= $product2->getCapacity();?></td>
                <td><?= $product2->getModel(); ?></td>
    </tr>
    </table>
</body>
</html>

