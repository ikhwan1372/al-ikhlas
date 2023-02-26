<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12  text-center">
                <h2>User </h2>
                <span class="sub-title1">this is the page of the user table if you wish to change this table you must have the author authority above </span>
                <h5>here if you want to add another user</h5>
                <a href="<?= base_url(); ?>dashboa/add/" class="btn btn-success btn-sm">Add Users</a>
            </div>
            <div class="col-xl-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">id</th>
                            <th scope="col">photo</th>
                            <th scope="col">nama</th>
                            <th scope="col">username</th>
                            <th scope="col">email</th>
                            <th scope="col">level</th>
                            <th style="width: 10px">#</th>
                            <th style="width: 40px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($dt)) {
                            $nomorUrut = 0;
                            foreach ($dt as $value) {
                                // menambahkan nomor urut
                                $nomorUrut++;

                                $id = $value['id'];
                                $photo = $value['photo'];
                                $name = $value['name'];
                                $username = $value['username'];
                                $email = $value['email'];
                                $level = $value['level'];
                        ?>

                                <tr>
                                    <td><?= $nomorUrut; ?></td>
                                    <td><?= $id; ?></td>
                                    <td>
                                    <img src="<?= $gambar_path . "/" . $photo ?>
                                    " alt="<?= $photo ?>"
                                    $gambar_path = "<?= base_url(); ?>assets/img/upload-user";>


                                    </td>
                                    <td><?= $name; ?></td>
                                    <td><?= $username; ?></td>
                                    <td><?= $email; ?></td>
                                    <td><?= $level; ?></td>
                                    <td></td>
                                    <td>
                                        <a href="<?= base_url(); ?>dashboa/update/<?= $id; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <button onclick="clickHapus('<?= base_url() ?>dashboa/delete/<?= $id; ?>')" class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<tr>
                                            <td colspan="9">
                                                Data Masih Kosong
                                            </td>
                                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>


<script>
    // perintah untuk, ketika html sudah di load semua oleh browser maka kode javascript didalamnya akan dijalankan
    document.addEventListener('DOMContentLoaded', function() {
        // const liidmenu = document.getElementById('');
        const idmenu = document.getElementById('musers');
        // const idsubmenu = document.getElementById('');
        // liidmenu.classList.add('menu-open');
        idmenu.classList.add('active');
        // idsubmenu.classList.add('active');
    })

    function clickHapus(url) {
        Swal.fire({
            title: 'Hapus Data',
            text: "Data akan dilakukan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya...Hapus'
        }).then((result) => {
            if (result.isConfirmed) window.location = url;
        })
    }
</script>