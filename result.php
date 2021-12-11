<?php include("header.php") ?>
<?php 
    $tempValue = '';
    $data = array();
    $demand = '';
    $max = 0;
    $result =0;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["value"];
        $prob = $_POST["probabilitas"];
        $demand = $_POST["demand"];
    } else {
        echo "Invalid";
    }

    $extract_value = array_chunk($data, count($prob));

    for($i=0; $i<4; $i++) {
        $tempValue = 0;
        for($j=0; $j<4; $j++) {
            $tempValue += (float) $extract_value[$i][$j] * (float) $prob[$j];
        }
        $arrEV[$i] = $tempValue;
    }

    ?>

    <div class="container-content">
        <div class="container-input">
            <?php
                foreach($arrEV as $key => $value) {
                if($max === null || $value > $max) {
                    $result = $key;
                    $max = $value;
                }
                }
            ?>
            <h1>Kesimpulan </h1>
            <h3 class="result">Produk yang harus anda sediakan sebanyak : <?php echo $demand[$result] ?></h3>
            <a href="index.php" class="btn btn-primary">Kembali ke Input</a>
        </div>
    </div>
    
<?php include("footer.php") ?>