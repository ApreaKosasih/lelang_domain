<?php
$this->load->view('layout/header.php');
?>



<div class="container mt-5 mb-5">
    <div class="row justify-center">
        <div class="col-10 col-lg-6 ta-c">
            <h2>
                <div class="font-xxl text-dark text-gradient">Temukan Domain</div>
            </h2>
            <p class="text-dark">
                Cara mudah beli Domain & dapatkan untung melimpah dengan sistem lelang, dapatkan Domain cantik & berkualitas serta terjangkau!
            </p>
            <!-- <a href="#" class="btn-outlined-primary text-primary text-hover-light">Selengkapnya</a> -->
        </div>
    </div>

    <div class="p-2">
        <h3 class="ta-c text-dark font-lg">Domain yang sedang di Lelang!</h3>
    </div>

    <div class="container-table p-1 bg-white">
        <div class="container-table-body">
            <table class="table-responsive font-sm">

                <thead class="text-dark">

                    <tr>
                        <th>Domain</th>
                        <th>Waktu Penutupan</th>
                        <th>Harga Terakhir</th>
                        <th>Harga Beli</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody class="ta-c fw-medium">

                    <!-- <?php
                            echo "<pre>";
                            print_r($list_domain);
                            ?> -->
                    <?php foreach ($list_domain as $list) : ?>
                        <tr>
                            <td><?php echo $list->domain ?></td>
                            <td><?php echo $list->expeired_date ?></td>
                            <td><?php echo $list->harga_terakhir ?></td>
                            <td><?php echo $list->harga_beli ?></td>
                            <td><a href="<?php echo site_url('Order/orderdomain/') ?><?php echo $list->domain ?>"><button class="btn-outlined-primary text-primary text-hover-light">Order</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
$this->load->view('layout/footer.php');
?>