<?php


include "models/m_pasien.php";

$psn = new Pasien($connection);

?>


<!-- Tables -->

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Daftar Pasien DIabetes Tipe 1</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">

                    

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pasien</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Diagnosa</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Diagnosa</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Action</th>
                                </tr>
                            </thead>                        

                            <tbody>

                                <?php
                                $no = 1;
                                $tampil_diabetes = $psn->tampil_diabetes();
                                while($data = $tampil_diabetes->fetch_object()) {
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
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo $data->nama_pasien;?></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo $data->hasil;?></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <div class="d-flex px-2 py-1 text-center ">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm mb-0">Total : <?php echo $data->tanggal_gd;?></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <a href="?page=cek_diabetes&id=<?php echo $data->id; ?>">
                                            <button type="button" class="btn btn-sm px-1">
                                                <span class="badge bg-gradient-primary">Check</span>
                                            </button>
                                        </a>
                                    </td>
                                   
                                </tr>

                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

