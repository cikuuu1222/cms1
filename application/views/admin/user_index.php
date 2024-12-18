 <div id="ngilang">
      <?= $this->session->flashdata('alert')?>
 </div>

 <style>
  /* Tambahkan border, padding, dan sedikit shadow agar input terlihat lebih jelas */
  .form-control {
    border: 2px solid #ced4da; /* Warna border lebih tegas */
    padding: 10px; /* Memberi ruang dalam input */
    border-radius: 5px; /* Membuat sudut lebih lembut */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Memberi sedikit bayangan */
  }

  /* Fokus pada input */
  .form-control:focus {
    border-color: #007bff; /* Warna biru saat fokus */
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.25); /* Efek glow saat fokus */
  }

  /* Tambahkan margin pada label */
  .form-label {
    font-weight: bold; /* Teks label lebih tegas */
    margin-bottom: 5px;
  }

  /* Tambahkan margin pada seluruh form */
  .form-container {
    padding: 20px;
    background-color: #f9f9f9; /* Warna latar belakang form */
    border: 1px solid #ddd; /* Border di luar form */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan efek shadow pada form */
  }
</style>

 <!-- Vertically Centered Modal -->
 <div class="col-lg-12 col-md-12">
        <div class="mb-2 md-10 mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Admin
          </button>

          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <form action="<?= base_url('admin/user/simpan') ?>" method="post">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="modalCenterTitle">Tambah User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required />
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
</div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

          <!-- Modal
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <form action="<?= base_url('admin/user/simpan')?>" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" placeholder="Nama" name="nama" required />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" placeholder="Username" name="username" required />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="password" required />

                    </div>
                  </div><div class="row">
                    <div class="col mb-6 mt-3">
                      <label class="form-label">Level</label>
                      <select name="level" class="from-control">
                        <option value="Admin">Admin</option>
                        <option value="Konstributor">Konstributor</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer" >
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div> -->
          </div>
        </div>
      </div>

<div class="card">
  <h5 class="card-header">Data Pengguna</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Username</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php foreach ($user as $aa) {?>
        <tr>
            <td><?= $aa['username']?></td>
            <td><?= $aa['nama']?></td>
            <td>
                  <a class="btn btn-sm btn-danger m-2"
                      onClick="return confirm('Apakah anda yakin ingin menghapus data ini??')"
                        href="<?= base_url('admin/user/delete_data/'.$aa['id_user']) ;?>">
                        <span class="tf-icons bx bx-trash">Hapus</span>
                  </a>
                  <button type="button" class="btn btn-sm btn-info m-2" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user']?>">
                    <span class="tf-icons bx bx-edit">Edit</span>
                  </button>
                  <div class="modal fade" id="edit<?= $aa['id_user']?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <form action="<?= base_url('admin/user/update')?>" method="post">
              <input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Perbarui Nama Admin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" value="<?= $aa['nama']?>" name="nama" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" value="<?= $aa['username']?>" name="username" readonly/>
                    </div>
                </div>
                <div class="modal-footer" >
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>