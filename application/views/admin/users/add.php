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


                        <form action="<?= base_url(); ?>dashboa/proses_add" method="post" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama User</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama User" autofocus required>
                                    <form method="post" action="<?php echo base_url('dashboa/proses_add'); ?>" enctype="multipart/form-data">
                                        <br>
                                        <label for="image">Choose Image</label>
                                        <input type="file" name="photo" id="photo" class="form-control-file">
                                        <img id="preview" src="#" alt="Preview" style="display:none; max-width: 200px; max-height: 200px; margin-top: 10px;" />

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="username"></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username tidak boleh sama dengan yang sudah ada " required>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye password-toggle" aria-hidden="true" onclick="togglePasswordVisibility()"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mycolumn">Level:</label>
                                <select name="mycolumn" id="mycolumn">
                                    <?php foreach ($enum_values as $enum_value) { ?>
                                        <option value="<?php echo $enum_value ?>"><?php echo $enum_value ?></option>
                                    <?php } ?>
                                </select>
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
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            document.getElementsByClassName("password-toggle")[0].classList.remove("fa-eye");
            document.getElementsByClassName("password-toggle")[0].classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            document.getElementsByClassName("password-toggle")[0].classList.remove("fa-eye-slash");
            document.getElementsByClassName("password-toggle")[0].classList.add("fa-eye");
        }
    }
</script>

<script>
    var input = document.getElementById("photo");
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