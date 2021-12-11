<?php include("header.php"); ?>
<?php 
    $jumlahDemand = $_POST["inputJumlahDemand"];
    $harga_jual = $_POST["inputHargaJual"];
    $harga_beli = $_POST["inputHargaBeli"];
?>

<div class="container-content">
    <div class="container-input">
        <div class="title">
            <h4 class="title-text">Masukkan Demand dan Probabilitas.</h4>
        </div>
        <div class="input-form">
            <form action="calculation.php" method="POST">
                <?php 
                    for($i=0; $i< $jumlahDemand; $i++) {
                ?>

                    <div class="probdemand-form">
                        <div class="demand-form">
                            <label for="inputDemand" class="input-demand-label">Demand <?php echo $i+1?></label>
                            <input type="number" name="demand[]" class="inputDemand">
                        </div>

                        <div class="probabilitas-form">
                            <label for="inputProbabilitas" class="input-probalitas-label">Probabilitas <?php echo $i+1?></label>
                            <input type="text" name="probabilitas[]" class="inputProbabilitas">
                        </div>
                    </div>
                    
                <?php 
                    }
                ?>
                
                <br><br>
                <p>In case you want to change it again :)</p>

                <label for="hargaJual" class="harga-jual-label">Harga Jual</label>
                <input type="text" id="hargaJual" name="hargaJual" value="<?php echo $harga_jual; ?>" class="hargaJual">

                <label for="hargaBeli" class="harga-beli-label">Harga Beli</label>
                <input type="text" id="hargaBeli" name="hargaBeli" value="<?php echo $harga_beli; ?>" class="hargaBeli">
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>   
    </div>
</div>

<?php include("footer.php"); ?>