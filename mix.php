<?php

$products = [
    [
        "name" => "Laptop",
        "price" => 1500,
        "stock" => 5
    ],
    [
        "name" => "Mouse",
        "price" => 40,
        "stock" => 20
    ],
    [
        "name" => "Keyboard",
        "price" => 80,
        "stock" => 10
    ], [
        "name" => "Monitor",
        "price" => 450,
        "stock" => 3
    ]

];
foreach ($products as $product) {
    echo $product["name"] . "-" .
        $product["price"] . " AZN -" .
        $product["stock"] . " ədəd <br>";

}
echo "<br>";
function warehouseValue($product)
{
    return $product["price"] * $product["stock"];

}

foreach ($products as $product) {
    $warehouseValue = warehouseValue($product);
    echo $product["name"] . " - Anbar dəyəri: " . $warehouseValue . "<br>";
}
echo "<br>";
$allDepoValue = 0;
foreach ($products as $productee) {
    $warehouseValue = warehouseValue($productee);
    $allDepoValue += $warehouseValue;
}
echo "Ümumi anbar dəyəri: " . $allDepoValue . " AZN<br>";
echo "<br>";
echo "Bahali məhsullar :<br> ";
foreach ($products as $productes) {
    if ($productes["price"] >= 100) {
        echo $productes["name"] . "<br>";
    }
}
echo "<br>";
echo "Stok azdır : "."<br>";
foreach ($products as $productees) {
    if ($productees["stock"] <= 5) {
        echo $productees["name"] . " - " . $productees["stock"] . "<br>";
    }
}
echo "<br>";
$bahaliMehsullar = 0;
foreach ($products as $productee) {
    if ($productee["price"] >= 1000) {
         $bahaliMehsullar++;
         echo"1000 AZN-dən bahalı məhsulların sayı: ". $bahaliMehsullar."<br>";
    }
}
echo "<br>";
echo"Yüksək anbar dəyərinə malik məhsullar: "."<br>";
foreach ($products as $productese) {
    if (warehouseValue($productese) >= 1000) {
        echo $productese["name"] . " - " . warehouseValue($productese)."<br>";
    }
}
