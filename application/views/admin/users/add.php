<?php
    // var_dump($dt);
    $renderLvl = '';
    foreach ($dt as $value) {
        $lvl = $value['level'];
        $renderLvl .= "<option value=\"$lvl\">$lvl</option>";
    }
    
?>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="m-0">Halaman Tambah data</h1>

                <div class="card card-primary card-outline">
                    <div class="card-body">

                    
                        <form action="<?= base_url(); ?>dashboa/proses_add" method="post">


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama User</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama User" autofocus required>
                                    <form method="post" action="<?php echo base_url('dashboa/proses_add'); ?>" enctype="multipart/form-data">
                                    <br>
                                        <label for="image">Choose Image</label>
                                        <input type="file" name="image" id="image" class="form-control-file">
                                    
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="username"></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username tidak boleh sama dengan yang sudah ada " required>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                placeholder="example@gmail.com"required>
                            </div>

                            <div class="form-group">
                                <label for="sekolah">level</label>
                                <select class="form-select" aria-label="Default select example" id="level" name="level">
                                    <option selected>--Pilih Level--</option>
                                    <?php echo $renderLvl;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div><!-- /.card -->

            </div>

        </div>

    </div><!-- /.container-fluid -->
</div>