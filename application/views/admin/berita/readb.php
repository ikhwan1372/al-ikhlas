<style>
  .photo {
    max-width: 55px;
    /* lebar maksimum gambar */
    max-height: 52px;
    /* tinggi maksimum gambar */
  }
</style>

<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12  text-center">
        <h2>Berita</h2>
        <span class="sub-title1">this is the page of the user table if you wish to change this table you must have the author authority above </span>
        <h5>here if you want to add another user</h5>
        <a href="<?= base_url(); ?>berita/add/" class="btn btn-success btn-sm">Add Berita</a>
      </div>
      <div class="col-xl-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">no</th>
              <th>Judul</th>
              <th>Gambar</th>
              <th>isi</th>
              <th>Deskripsi Singkat</th>
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
                $judul = $value['judul'];
                $gambar = $value['gambar'];
                $isi = $value['isi'];
                $deskripsi_singkat = $value['deskripsi_singkat'];
            ?>

                <tr>
                  <td><?= $nomorUrut; ?></td>
                  <td><?= $judul; ?></td>
                  <td>
                    <img class="photo" src="<?= base_url(); ?>assets/img/upload-brt/<?= $gambar ?>" alt="<?= base_url(); ?>assets/img/upload-brt/<?= $gambar ?>">
                  </td>
                  <td><?= $isi; ?></td>
                  <td><?= $deskripsi_singkat; ?></td>
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
<!-- Tambahkan script untuk menjalankan function clickHapus() -->
<script>
  function clickHapus(url) {
    // Tampilkan SweetAlert untuk konfirmasi penghapusan data
    Swal.fire({
      title: 'Anda yakin ingin menghapus data ini?',
      text: "Data yang dihapus tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        // Lakukan aksi hapus data dari database
        window.location.href = url;
      }
    })
  }
</script>