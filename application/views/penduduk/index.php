<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon lorem" data-background-color="#2B5F9B">
                        <i class="material-icons">assignment_ind</i>
                    </div>

                    <style>
									li.paginate_button.active a {
										background-color: #2B5F9B !important;
										color: white !important;
										border: 1px solid #2B5F9B !important;
									}
								</style>
                    <div class="card-content">
                        <h4 class="card-title">Penduduk</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            <a href="<?= base_url() ?>penduduk/tambah">
                                <button class="btn lorem">
                                    <span class="btn-label">
                                        <i class="material-icons">check</i>
                                    </span>
                                    Tambah
                                </button>
                            </a>

                            <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                <div class="alert lorem alert-success">
                                    <span><?= $this->session->flashdata('success'); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>RW/RT</th>
                                        <th>No.Hp</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $key['nama']; ?></td>
                                            <td><?= $key['nik']; ?></td>
                                            <td><?= $key['tmpt_lhr']; ?></td>
                                            <td><?= $key['tgl_lhr']; ?></td>
                                            <td><?= $key['alamat']; ?></td>
                                            <td><?= $key['pekerjaan']; ?></td>
                                            <td><?= $key['rw'].'/'.$key['rt']; ?></td>
                                            <td><?= $key['no_hp']; ?></td>
                                            <td class="text-right">

                                                <a href="<?= base_url() ?>penduduk/edit/<?= $key['nik']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a>

                                                <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#hapusPenduduk<?= $key['nik']; ?>"><i class="material-icons">close</i></button>

                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- small modal hapus pegawai -->

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusPenduduk<?= $key['nik']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>penduduk/hapus/<?= $key['nik']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah anda yakin untuk menghapus penduduk ini? </h5>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <button type="button" class="btn lorem" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn lorem btn-simple">Ya</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--    end small modal hapus pegawai -->
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>