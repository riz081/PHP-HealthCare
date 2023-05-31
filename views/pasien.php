<?php


include "models/m_pasien.php";

$psn = new Pasien($connection);

if(@$_GET['act'] == '') {

?>


<!-- Tables -->

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Daftar Pasien</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">

                        <a href="?page=tambah_pasien" class="btn mb-2">
                            <span class="badge bg-gradient-success">
                                <i class="fas fa-user-plus"> 
                                     Tambah Data
                                </i>
                            </span>
                        </a>                        

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pasien</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usia</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Option</th>
                                </tr>
                            </thead>                        

                            <tbody>

                                <?php
                                $no = 1;
                                $tampil = $psn->tampil();
                                while($data = $tampil->fetch_object()) {
                                ?>

                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mx-2 mb-0 text-sm"><?php echo $no++.".";?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="assets/img/foto/<?php echo $data->foto;?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo $data->nama_lengkap;?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo $data->no_hp; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $data->alamat ?></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $data->status; ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $data->usia." Tahun"; ?></p>
                                    </td>
                                    <td class="text-center">
                                        <a href="?page=view_pasien&id=<?php echo $data->id_pasien; ?>">
                                            <button type="button" class="btn btn-sm px-1">
                                                <span class="badge bg-gradient-primary">View</span>
                                            </button>
                                        </a>

                                        <a href="?page=edit_pasien&id=<?php echo $data->id_pasien; ?>">
                                            <button type="button" class="btn btn-sm px-1">
                                                <span class="badge bg-gradient-warning">Edit</span>
                                            </button>
                                        </a>

                                        <a href="?page=pasien&act=delete&id=<?php echo $data->id_pasien; ?>" onclick="return confirm('Inging menghapus data?')">
                                            <button type="button" class="btn btn-sm px-1">
                                                <span class="badge bg-gradient-danger">Delete</span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>

                        <!-- Modal -->
                        <!-- <div id="tambah" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">
                                            Tambah Data Pasien
                                        </h4>
                                    </div>

                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="control-label" for="nama_lengkap">
                                                    Nama Lengkap
                                                </label>
                                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
} else if (@$_GET['act'] == 'delete') {
    $foto = $psn->tampil($_GET['id'])->fetch_object()->foto;
        unlink("assets/img/foto/".$foto);

        $psn->delete($_GET['id']);
        header("location: ?page=pasien");
}

?>
