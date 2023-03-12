    <?php
    // var_dump($dt);
    $renderLvl = '';
    foreach ($dt as $value) {
        $lvl = $value['level'];
        if($lvl == $sek){
            $renderSelected = 'selected';
            //jika kondisi terpenuhi
        }else{
            //jika kondisi tidak terpenuhi
            $renderSelected = '';
        }

        $renderLvl .= "<option $renderSelected value=\"$lvl\">$lvl</option>";
    }
    
?>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="m-0">Halaman Tambah data</h1>

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>dashboa/proses_update" method="post" enctype="multipart/form-data">
                            <div class="form-row">

                            <div class="form-group">
                                    <label for="">Id User</label>
                                    <input name="id" value="<?= $id; ?>" type="text" class="form-control" placeholder="Id User Otomatis dibuat Sistem" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama User</label>
                                    <input type="text" class="form-control" id="name" value="<?= $name; ?>" name="name" placeholder="Masukan nama User" autofocus required>
                                </div>
                                <div class="form-group ">
                                    <label for="image">Choose Image</label>
                                    <input type="file" name="photo" id="photo" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="<?= $username; ?>" name="username" placeholder="Username tidak boleh sama dengan yang sudah ada " required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="<?= $email; ?>" name="email" placeholder="example@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-select" aria-label="Default select example" id="level" value="<?= $level; ?>" name="level">
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
