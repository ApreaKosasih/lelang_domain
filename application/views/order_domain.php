<?php
$this->load->view('layout/header.php');
?>

<div class="container">
    <h2 class="ta-c mt-4">Form Order Domain</h2>
    <p class="ta-c">Silahkan isi data dengan sebenar-benarnya untuk pihak kami dapat menghubungi terkait order anda.</p>
    <div class="row justify-center mt-4 mb-4">
        <div class="col-10 col-lg-8">
            <div class="card bg-white">
                <div class="card-body mb-2 mt-2">
                    <form action="<?php echo site_url('Order/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3 mt-2">
                            <input type="text" value="<?php echo $domain ?>" required="readonly" name="domain" />
                            <label for="input" class="control-label">Domain</label><i class="bar"></i>
                        </div>
                        <div class="form-group mb-3 mt-2">
                            <input type="text" required="required" name="nama_lengkap" />
                            <label for="input" class="control-label">Nama</label><i class="bar"></i>
                        </div>
                        <div class="form-group mb-3 mt-2">
                            <input type="text" required="required" name="no_tlpn" />
                            <label for="input" class="control-label <?php echo form_error('no_tlpn') ? 'is-invalid' : '' ?>">No Telepon</label><i class="bar"></i>
                        </div>
                        <div class="form-group mb-3 mt-2">
                            <input type="text" required="required" name="email" />
                            <label for="input" class="control-label <?php echo form_error('email') ? 'is-invalid' : '' ?>">Email</label><i class="bar"></i>
                        </div>
                        <div class="form-group mb-3 mt-2">
                            <input type="number" required="required" name="harga_diajukan" />
                            <label for="input" class="control-label">Harga yang di ajukan</label><i class="bar"></i>
                        </div>

                        <div class="display-flex">
                            <button style="width: 50%;" type="submit" class="btn-primary text-white ml-auto mr-auto">Order</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->load->view('layout/footer.php');
?>