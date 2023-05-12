<style>
  .photo {
    max-width: 55px;
    /* lebar maksimum gambar1 */
    max-height: 52px;
    /* tinggi maksimum gambar1 */
  }
</style>

<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12  text-center">
        <h2>Galeri</h2>
        <span class="sub-title1">this is the page of the user table if you wish to change this table you must have the author authority above </span>
        <h5>here if you want to add another user</h5>
        <a href="<?= base_url(); ?>galeri/add/" class="btn btn-success btn-sm">Add Galeri</a>
      </div>
      <div class="col-xl-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">no</th>
              <th>Judul</th>
              <th>Gambar</th>
              <th>Keterangan </th>
              <th>Tgl Buat</th>
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
                $gambar1 = $value['gambar1'];
                $keterangan = $value['keterangan'];
                $tgl_buat = $value['tgl_buat'];
            ?>

                <tr>
                  <td><?= $nomorUrut; ?></td>
                  <td><?= $judul; ?></td>
                  <td>
                    <img class="photo" src="<?= base_url(); ?>assets/img/upload-gbr/<?= $gambar1 ?>" alt="<?= base_url(); ?>assets/img/upload-gbr/<?= $gambar1 ?>">
                  </td>
                  <td><?= $keterangan; ?></td>
                  <td><?= $tgl_buat; ?></td>
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