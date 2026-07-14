<?php
$Rub=75000;
$USD=0.013;
$AZN=0.022;
$EUR=0.011;
$CNY=0.087;
function convertRubToDollar($Rub,$USD)
{
    $RubTODollar=$Rub*$USD;
    return $RubTODollar;

}
function convertRubToAZN($Rub,$AZN)
{
    $RubTOAZN=$Rub*$AZN;
    return $RubTOAZN;
}
function convertRubToEUR($Rub,$EUR)
{
    $RubTOEUR=$Rub*$EUR;
    return $RubTOEUR;
}
function convertRubToCNY($Rub,$CNY)
{
    $RubTOCNY=$Rub*$CNY;
    return $RubTOCNY;
}
echo$Rub."RUB:".PHP_EOL;
echo convertRubToCNY($Rub,$CNY)."CNY" .PHP_EOL;
echo convertRubToDollar($Rub,$USD)."USD" .PHP_EOL;
echo convertRubToAZN($Rub,$AZN)."AZN" .PHP_EOL;
echo convertRubToEUR($Rub,$EUR)."EUR" .PHP_EOL;







