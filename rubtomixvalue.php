<?php
//Task1

//$rub = 750000;
//$valyut = [
//    "USD" => 0.013,
//    "AZN" => 0.022,
//    "EUR" => 0.011,
//    "CNY" => 0.087,
//];
//function convert($amount, $rate)
//{
//    return $amount * $rate;
//}
//echo "RUB:" . " " . $rub . PHP_EOL;
//echo PHP_EOL;
//foreach ($valyut as $valyuta => $rate) {
//    echo $valyuta . ": " . convert($rub, $rate) . PHP_EOL;
//}

//Task2
//$eded = 3;
//$fruit = [
//    "Alma" => 2.5,
//    "Banan" => 3,
//    "Portagal" => 4.2,
//    "KIWI" => 5.5,
//    "Uzum" => 6
//];
//function calculatePrice($price, $amount)
//{
//    return $price * $amount;
//}
//
//foreach ($fruit as $fruitName => $fruitPrice) {
//    echo $fruitName . ": " . calculatePrice($fruitPrice, $eded) . PHP_EOL;
//}
//$umumi=0;
//foreach ($fruit as $fruitName => $fruitPrice) {
//    $umumi += calculatePrice($fruitPrice, $eded);
//}
//echo "Umumi qiymet: " . $umumi . PHP_EOL;
//

//Task3
//$child = [
//    "Eli" => 85,
//    "Veli" => 42,
//    "Murad" => 91,
//    "Aysel" => 68,
//    "Nigar" => 49,
//];
//function checkResult($bal)
//{
//    if ($bal >= 50) {
//        return "Kecdi";
//    } else {
//        return "Kesildi";
//    }
//}
//$kecenlerinsayi = 0;
//$kesilenlerinsayi=0;
//
//foreach ($child as $childName => $bal) {
//
//    if ($bal >= 50) {
//        $kecenlerinsayi++;
//    }
//    if ($bal < 50) {
//        $kesilenlerinsayi++;
//    }
//    echo $childName . "-" . $bal . " " . "bal" . "-" . checkResult($bal) . "<br>";
//
//}
//echo "Kecenlerin sayi-".$kecenlerinsayi."<br>"."Kesilenlerin sayi-".$kesilenlerinsayi;


//Task4

$money = 850;
$exitmoney = 750;
function withdrawMoney($money, $exitmoney)
{
    if ($exitmoney <= 0) {
        return "Yanlış məbləğ";
    } elseif ($exitmoney > $money) {
        return "Balans kifayət etmir";
    } else {
        return "Pul çıxarıldı";
    }
}

$netice = withdrawMoney($money, $exitmoney);

echo "Balans: " . $money . " AZN" . "<br>" . "Çıxarılacaq məbləğ: " . $exitmoney . " AZN" . "<br>" . "Nəticə: " . $netice . "<br>";


if ($netice == "Pul çıxarıldı") {
    $qaliq = $money - $exitmoney;
    echo "Qalan balans: " . $qaliq . " AZN";
}
