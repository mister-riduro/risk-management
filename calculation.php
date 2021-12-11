<?php include("header.php");?>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $hjual = $_POST["hargaJual"];
        $hbeli = $_POST["hargaBeli"];
        $demand = $_POST["demand"];
        $probabilitas = $_POST["probabilitas"];
    } else {
        echo "invalid";
    }
?>

<div class="container-content">
    <div class="container-input">
        <div class="title">
            <h4 class="title-text">Silakan Masukkan Table Pay Off</h4>
        </div>
        <table class="payoff-table">
            <thead>
                <tr>
                    <?php
                        echo "<th> Data </th>";
                        for($i=0; $i<count($demand); $i++) {
                            echo "<th>". $demand[$i]. "</th>";
                        }
                    ?>
                </tr>
            </thead>

            <tbody>
                <form method="POST" action="result.php">
                        <tr>
                            <?php
                                for($i=0; $i<count($demand); $i++) {
                                    echo "<tr>";
                                    echo "<td>" . $demand[$i] . "</td>";
                                    for($j=0; $j<count($demand); $j++) {
                                    ?>
                                        <?php
                                            if($i == $j) {
                                                ?>
                                                <td><input type="number" class="form-control" name="value[<?php $i?>] [<?php $j?>]" value="<?php echo 
                                                    abs($demand[$i] * $hjual - $demand[$j] * $hbeli)?>"></td>
                                            </td>
                                                <?php
                                            } else {
                                                ?>
                                                <td><input type="number" class="form-control" name="value[<?php $i?>] [<?php $j?>]" value="value[<?php $i?>] [<?php $j?>]"></td>
                                                <?php
                                            }
                                        ?>
                                    <?php
                                    }
                                    echo "</tr>";
                                }              
                            ?>
                        </tr>

                        <tr>
                            <?php
                                for($i=0; $i<1; $i++) {
                                    echo "<tr>";
                                    echo "<td>Probabilitas</td>";
                                    for($j=0; $j<count($probabilitas); $j++) {
                            ?>
                                        <td><input type="text" class="form-control" name="probabilitas[<?php $j?>]" value="<?php echo $probabilitas[$j]; ?>"></td>
                                    <?php
                                    }
                                    echo "</tr>";
                                }                     
                                    ?>
                        </tr>

                        <tr>
                            <?php
                            for($i=0; $i<1; $i++) {
                                echo "<tr>";
                                echo "<td>Demand</td>";
                                for($j=0; $j<count($demand); $j++) {
                                ?>
                                    <td><input type="text" class="form-control" name="demand[<?php $j?>]" value="<?php echo $demand[$j]?>"></td>
                                <?php
                                }
                                echo "</tr>";
                            }                     
                            ?>
                        </tr>
            </tbody>
        </table>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<?php include("footer.php");?>