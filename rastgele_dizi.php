<?php 
function rastgeleSec($dizi, $adet) {
    $temizdizi = array_filter($dizi);
    // print_r($temizdizi);
    
    $rastgeledizi = array_rand($temizdizi, $adet);
    // print_r($rastgeledizi);
    
    if (!is_array($rastgeledizi)) {
        $rastgeledizi = [$rastgeledizi];
    }

    $sonuc = array_map(function($key) use ($temizdizi) {
        return $temizdizi[$key];
    }, $rastgeledizi);
    
    return $sonuc;
}

$meyveler = ['elma', '', 'armut', '', 'muz', '', 'karpuz', 'erik', '', ''];
print_r(rastgeleSec($meyveler, 3));
?>