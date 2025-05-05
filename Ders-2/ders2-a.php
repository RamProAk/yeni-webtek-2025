<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-2</title>
</head>
<body>
<!-- 
Değişken tanımlama;
1. Değişkenler $ işareti ile tanımlanır.
2. Mutlaka bir harf veya _ işareti ile başlayabilir.
3. Değişkenler rakamlar ile başlayamaz.
4. Değişken içerisinde boşluk ve Türkçe karakterler kullanılamaz.
5. Değişkenlerde büyük küçük harf duyarlılığı vardır. 
6. Programlama dili içerisinde bulunan özel tanımlar değişken ismi olarak kullanılamaz.
-->

<h4>Matematiksel İfadeler</h4>
<h5>Toplama İşlemi</h5>
<?php
    $sayi1=20; //Sayi1 değişkeni tanımlandı
    $sayi2=17; // Sayi2 değişkeni tanımlandı
    $sonuc=$sayi1+$sayi2; //Toplama işlemi yapıldı.
    echo $sonuc; //Sonuç ekrana yazdırıldı.
    echo "<br>işlemin sonucu: $sayi1+$sayi2=$sonuc"; //sonuç ekrana yazdırıldı.
    
    echo "<br><br> Atamalı Toplama İşlemi:";

    $deger=10;
    $ekdeger=59;
    echo "<br> Sonuç: $deger + $ekdeger =" . $deger +=$ekdeger; 
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:". $deger+=123;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";

?>
<h5>Çıkarma İşlemi</h5>
<?php
    $sayi1=77; //Sayi1 değişkeni tanımlandı
    $sayi2=50; // Sayi2 değişkeni tanımlandı
    $sonuc=$sayi1-$sayi2; //Çıkarma işlemi yapıldı.
    echo $sonuc; //Sonuç ekrana yazdırıldı.
    echo "<br>işlemin sonucu: $sayi1-$sayi2=$sonuc"; //sonuç ekrana yazdırıldı.
    
    echo "<br><br> Atamalı Çıkarma İşlemi:";

    $deger=120;
    $ekdeger=72;
    echo "<br> Sonuç: $deger - $ekdeger =" . $deger -=$ekdeger; 
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:". $deger-=123;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";

    ?>

<h5>Çarpma İşlemi</h5>
<?php
    $sayi1=50; //Sayi1 değişkeni tanımlandı
    $sayi2=77; // Sayi2 değişkeni tanımlandı
    $sonuc=$sayi1*$sayi2; //ÇArpma işlemi yapıldı.
    echo $sonuc; //Sonuç ekrana yazdırıldı.
    echo "<br>işlemin sonucu: $sayi1*$sayi2=$sonuc"; //sonuç ekrana yazdırıldı.
    
    echo "<br><br> Atamalı Çarpma İşlemi:";

    $deger=120;
    $ekdeger=5;
    echo "<br> Sonuç: $deger * $ekdeger =" . $deger *=$ekdeger; 
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:". $deger*=123;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";

    ?>

<h5>Bölme İşlemi</h5>
<?php
    $sayi1=50; //Sayi1 değişkeni tanımlandı
    $sayi2=13; // Sayi2 değişkeni tanımlandı
    $sonuc=$sayi1/$sayi2; //Bölme işlemi yapıldı.
    echo $sonuc; //Sonuç ekrana yazdırıldı.
    echo "<br>işlemin sonucu: $sayi1/$sayi2=$sonuc"; //sonuç ekrana yazdırıldı.
    
    echo "<br><br> Atamalı Bölme İşlemi:";

    $deger=120;
    $ekdeger=5;
    echo "<br> Sonuç: $deger / $ekdeger =" . $deger /=$ekdeger; 
    echo "<br>Değer Değişkeninin İçeriği: $deger";
    echo "<br>Değer Değişkeninin Yeni İçeriği:". $deger/=4;
    echo "<br>Değer Değişkeninin Son İçeriği: $deger";
    
   
    $sonucyaz=(5*2) + ((55+25)/2) ;
    echo "<br>$sonucyaz";
    echo "<br> yenisonuç:".((10*2) + ((55+25)/2));
    ?>

<h5>Mod İşlemi</h5>
<?php
    $sayi1=50; //Sayi1 değişkeni tanımlandı
    $sayi2=10; // Sayi2 değişkeni tanımlandı
    $sonuc=$sayi1%$sayi2; //Mod işlemi yapıldı.
    echo $sonuc; //Sonuç ekrana yazdırıldı.
    echo "<br>işlemin sonucu: $sayi1%$sayi2=$sonuc"; //sonuç ekrana yazdırıldı.
    ?>

<h5>Arttırma İşlemi</h5>
<?php
    $sayi1=50; //Sayi1 değişkeni tanımlandı
   
    echo "<br>Arttırma İşlemi Yapıldı:". $sayi1++; //Bu satırda hala $sayi değerini yazacaktır fakat bir sonraki 
    //değişkeni çağırdığımız satırda değişkenin 1 arttırıldığı görüntülenecektir. 
    //Değişkenin sağında bulunan ++ ifadesi satır yorumlandıktan sonra arttırma işlemini yapar.
    echo "<br>Değişkenin Değeri:". $sayi1; 
    ?>
<h5>Arttırma İşlemi</h5>
<?php
    $sayi1=50; //Sayi1 değişkeni tanımlandı
   
    echo "<br>Arttırma İşlemi Yapıldı:". ++$sayi1; //Değişkenin solunda bulunan ++ ifadesi değişkenin 
    //değerinin öncelikli olarak arttırılmasını sağlar.
    echo "<br>Değişkenin Değeri:". $sayi1; 

$sayi2=6;
echo "<br>Azaltma işlemi yapıldı:".$sayi2--;
echo "<br>Azaltma işlemi yapıldı:".$sayi2--;
echo "<br>Azaltma işlemi yapıldı:".$sayi2--;

echo "<br>Değişkenin Değeri:". $sayi2."<br>"; 

$sayi3=6;
echo "<br>Azaltma İşlemi Yapıldı:". --$sayi3;
echo "<br>Azaltma İşlemi Yapıldı:". --$sayi3;
echo "<br>Azaltma İşlemi Yapıldı:". --$sayi3;

echo "<br>Değişkenin Değeri:". $sayi3; 

$sayi4=6;
echo "<hr><br>". ++$sayi4."<br>";
echo "<br>". ++$sayi4."<br>";
echo "<br>". ++$sayi4."<br>";

$sayi5=6;
echo "<hr><br>Değişkenin Değeri:".++$sayi5;
echo "<hr><br>Değişkenin Değeri:".++$sayi5;
echo "<hr><br>Değişkenin Değeri:".++$sayi5;



    ?>



</body>
</html>