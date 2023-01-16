<?php
//Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden dizi oluşturan bir
// fonksiyon yazın. (array_map(), array_filter() ve array_rand() fonksiyonlarını kullanarak.)

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn",
    "Uranus", "Neptune", "", "", NULL];

 $array= array_filter($planets);
 echo "<pre>";
print_r($array);

function dizi_olustur($array,$deger){
    $i=0;
    for ($i=0;$i<$deger;$i++){
        $keys = array_rand( $array );
        echo "<pre>";
        echo "[$i]=>". $array[$keys]."\n";
    }
}

print_r( dizi_olustur($array,2));
print_r( dizi_olustur($array,3));
print_r( dizi_olustur($array,1));