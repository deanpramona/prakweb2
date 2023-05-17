<?php
$models = new Pesanan();

$data_pesanan = $models->tampilPesanan();
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
                            <th>Total</th>
                            <th>Pelanggan ID</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_pesanan as $row){
                        
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['tanggal']?></td>
                        <td><?= $row['total']?></td>
                        <td><?= $row['pelanggan_id']?></td>
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