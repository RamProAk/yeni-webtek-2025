<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
<!-- 
ceil  : Herhangi bir ondalıklı sayıyı yukarı yuvarlamak için
floor : Herhangi bir ondalıklı sayıyı aşağı yuvarlamak için
round : Herhangi bir ondalıklı sayıyı en yakına yuvarlamak için

-->    
<h5>ceil işlemi</h5>
<?php
$sayi1 = 14.28563;
echo "Sonuç=" . ceil($sayi1);

//$sayi1 değişkenin değeri: 14.28563 yukarı yuvarlama işlemi sonucu: ceil ($sayi1) yazdıran kodu yaz

echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . ceil ($sayi1); 
// \ ters eğik çizgi kaçış işaretidir.


?>

<h5>floor işlemi</h5>
<?php
$sayi1 = 24.98545;
echo "Sonuç=" . floor($sayi1);
?>

<h5>round işlemi</h5>
<?php
$sayi1 = 13.7541;
echo "Sonuç=" . round($sayi1);

$sayi2 = 5721.49876;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2);

echo "<hr><br> ilk iki hanenin sabit tutularak 3.haneye göre round işleminin uygulanması:";
$sayi2 = 5721.55648;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,0);

$sayi2 = 57.45648;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,1);
$sayi2 = 57.45648;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,2);

$sayi2 = 57.45648;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,3);
$sayi2 = 57.45648;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,4);
$sayi2 = 57.456487;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,5);



echo "<hr><br> Virgülden öncesi için yuvarlama uygulaması:";

$sayi2 = 54578.59999;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,0);

$sayi2 = 54578.323567;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,-1);

$sayi2 = 54578.323567;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,-2);

$sayi2 = 54578.329847;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,-3);

$sayi2 = 64578.323567;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,-4);

$sayi2 = 54578.323567;
echo "<br>\$sayi2 değişkeninin değeri $sayi2 Round işlemi sonucu:". round($sayi2,-5);
?>

<h5>Number Format işlemi</h5>
<?php
$sayi1 = 95450.28563;
echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . number_format ($sayi1); 
echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . number_format ($sayi1,1); 
echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . number_format ($sayi1,2); 
echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . number_format ($sayi1,3); 
echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . number_format ($sayi1,4); 
echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . number_format ($sayi1,2,",","."). " TL"; 
echo "<br> \$Sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işlemi sonucu:" . number_format ($sayi1,0,",","."). " TL"; 





?>



</body>
</html>