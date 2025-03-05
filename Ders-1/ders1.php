<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DERSLERİ</title>
</head>

<body>
    <!--  Html açıklama satırıdır. -->

    <?php

    // Tek satır açıklama satırı yazmak için kullanılır.
    /* Çoklu Satırlı Açıklama Satırı 
    oluşturmak için kullanılır  */

    //phpinfo(); /*  Bu fonksiyon yüklü olan php versiyonu ve kurulu paketlerin bilgisini yazdırır */

    echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";

    // PHP içerisinde html etiketleri kullanılabilir
    echo "<br> Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı <br>";

    // Uygulama : Bir değişken tanımlama ve değişkeni ekrana yazdırma
    $metin = "<br> Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı <br>";

    echo $metin;

    //Değişken içerisindeki metinsel ifadenin büyük küçük harfe dönüşümleri.
    echo $bharf = strtoupper($metin); 
    echo $kharf = strtolower($bharf);

    echo $bharf2 = mb_strtoupper($metin); 
    echo $kharf2 = mb_strtolower($bharf2);


    ?>





</body>

</html>