<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="m-0">Halaman Tambah data galeri</h1>

                <div class="card card-primary card-outline">
                    <div class="card-body">


                        <form action="<?= base_url(); ?>galeri/proses_add" method="post" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul tidak boleh sama dengan yang sudah ada " required>
                                </div>
                                <br>
                                <br>
                                <form method="post" action="<?php echo base_url('galeri/proses_add'); ?>" enctype="multipart/form-data">
                                    <br>
                                    <label for="image">Choose Image</label>
                                    <input type="file" name="gambar" id="gambar" class="form-control-file">
                                    <img id="preview" src="#" alt="Preview" style="display:none; max-width: 200px; max-height: 200px; margin-top: 10px;" />
                            </div>
                    </div>
                    <div class="form-groups">
                        <label for="keterangan">keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <?php
                    echo "<pre>"

                    ?>
                    </form>
                </div>

            </div><!-- /.card -->

        </div>

    </div>

</div><!-- /.container-fluid -->
</div>

<script>
    var input = document.getElementById("gambar");
    var preview = document.getElementById("preview");

    input.addEventListener("change", function() {
        var file = this.files[0];
        var reader = new FileReader();

        reader.addEventListener("load", function() {
            preview.style.display = "block";
            preview.setAttribute("src", this.result);
        });

        reader.readAsDataURL(file);
    });
</script>