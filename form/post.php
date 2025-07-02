<?php 
function post() {
    $sayi = $_POST['sayı'];
    // print_r($sayi);

    if($sayi == "") {
        echo "değer boş gönderilmemelidir!";
        return;
    }

    if($sayi % 3 == 0) {
        echo "değer 3'e tam bölünüyor";
    } else {
        for ($i = $sayi; $i >= $sayi ; $i++) { 
            if($i % 3 == 0 ) {
                echo "değer 3'e tam bölünmez, en yakın ".$i." -> 3'e tam bölünür";
                return;
            }
        }
    }
}

post();
?>