<?php include("header.php"); ?>

<div class="container-content">
    <div class="container-input">
        <div class="title">
            <h4 class="title-text">Silakan Masukkan Jumlah Demand, </h4>
            <h4 class="title-text">Harga Jual, dan Harga Beli Anda.</h4>
            <br>
            <p>Oleh Muhammad Ridlo, NRP 2110191040</p>
        </div>
        <div class="input-form">
            <form action="form.php" method="POST">
                <label for="inputJumlahDemand" class="input-demand-label">Jumlah Demand</label>
                <input type="number" id="inputJumlahDemand" name="inputJumlahDemand" class="inputJumlahDemand">

                <label for="hargaJual" class="harga-jual-label">Harga Jual</label>
                <input type="number" id="inputHargaJual" name="inputHargaJual" class="inputHargaJual">

                <label for="hargaBeli" class="harga-beli-label">Harga Beli</label>
                <input type="number" id="inputHargaBeli" name="inputHargaBeli" class="inputHargaBeli">

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="https://drive.google.com/drive/u/0/folders/1a2KMMXq_T7RVScPEDzd4wWeQsUoD2Xgr" class="btn btn-outline-primary" target="_blank">User Guide</a>
            </form>
        </div>   
    </div>
</div>

<?php include("footer.php"); ?>