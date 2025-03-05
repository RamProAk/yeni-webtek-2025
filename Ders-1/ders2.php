<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dersleri</title>
</head>

<body>
    <h3> Sık Kullanılan Hazır Fonksiyonlar </h3>

    <?php

    $metin = " aydın adnan menderes universitesi ";
    $byazi = strtoupper($metin); //Yazıyı büyük harfe dönüştür.
    $kyazi = strtolower($byazi); //Yazıyı küçük harfe dönüştür.
    $mb_byazi = mb_strtoupper($kyazi); //Yazıyı büyük harfe dönüştür.
    $mb_kyazi = mb_strtolower($mb_byazi); //Yazıyı küçük harfe dönüştür.
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi); // Gelen metnin ilk harfini büyütür.
    echo $ilkharf_buyuk_kelime = ucwords($mb_kyazi); // Gelen metinin kelimelerinin baş harflerini büyütür

    echo "<br>Karakter Sayısı: " . strlen($metin);
    echo "<br> Metnin belirli bir aralıktaki karakter sayısı: " . substr($metin, 0, 13);
    ?>



    <h4> Uygulama: </h4>
    <p> Lorem metninin ilk 100 karakterini alın devamında bir buton
        yerleştirerek Adü web sitesine yönlendirin </p>


    <?php

    $lorem =  "Lorem ipsum dolor sit amet consectetur adipisicing elit.Illum, amet dolores? Sequi asperiores commodi facere atque possimus 
   tempore veniam amet modi hic molestias, quae suscipit officia nulla,excepturi voluptatum? Quidem!";

    echo substr($lorem, 0, 94) . "..." ;
    echo '<br><a href="https://www.adu.edu.tr/" target="_blank"> Devamını oku </a>';

    ?>
    







</body>

</html>