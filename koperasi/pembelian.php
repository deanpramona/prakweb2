<?php
$models = new Pembelian();

$data_pembelian = $models->tampilPembelian();
?>

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nomor</th>
                            <th>Produk ID</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Vendor ID</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_pembelian as $row){
                        
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['tanggal']?></td>
                        <td><?= $row['nomor']?></td>
                        <td><?= $row['produk_id']?></td>
                        <td><?= $row['jumlah']?></td>
                        <td><?= $row['harga']?></td>
                        <td><?= $row['vendor_id']?></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>