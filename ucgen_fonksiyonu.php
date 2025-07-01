<?php 
    function ucgen($deger) {
        for ($i = 0; $i <= $deger; $i++) {
            $j = 0;
            while ($j <= $i) {
                echo '0';
                $j++;
            }
            echo '<br>';
        }
    }

    ucgen(15);
?>