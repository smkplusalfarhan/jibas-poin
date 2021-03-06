<!--
* Name : e-Poin v.1.0
* Author : DEDE ISKANDAR
* Github : https://github.com/ddiskandar
* Facebook : https://www.facebook.com/dzulqarnayn
* Email : d3215k@gmail.com
* WA/Telegram : +62 856 2402 8940
*
* Description: Aplikasi e-Poin ini dibuat dan dikembangkan bertujuan membantu sekolah
* dalam mencatat poin pelanggaran dan kebaikan peserta didik untuk pendidikan
* karakter generasi penerus bangsa yang lebih baik.
*
* Donasi : Support developer untuk terus mengembangkan aplikasi
* dengan memberikan donasi pengembangan.
*
-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Catatan Poin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="<?php echo base_url('poin/tambah') ?>" type="button" class="btn btn-primary mt-2 float-sm-left float-md-right">
                        <!-- <i class="fas fa-plus mr-2"></i> -->
                        Tambah Catatan
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                            </h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="siswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama Siswa</th>
                                        <th>Rombel</th>
                                        <th>Poin</th>
                                        <th>Catatan</th>
                                        <th>Pencatat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($poin->result() as $item) { ?>

                                        <tr>
                                            <td><?php echo date_indo($item->tgl_poin) ?></td>
                                            <th><a href="<?php echo base_url('siswa/view/') . $item->id ?>"><i class="nav-icon fas fa-user-circle mr-2"></i><?php echo $item->nama ?></a></th>
                                            <td><?php echo $item->nama_rombel ?></td>
                                            <td>
                                                <?php echo $item->jenis_poin == 0 ? '<span class="badge bg-danger">' . $item->nilai . '</span>' : '<span class="badge bg-success">' . $item->nilai . '</span>' ?>
                                                <?php echo $item->nama_poin ?>
                                            </td>
                                            <td><?php echo $item->catatan ?></td>
                                            <td><?php echo $item->nama_gtk ?></td>
                                            <td><a href="<?php echo base_url('poin/delete/') . $item->id_poin ?>" class="text-muted ml-2" onclick="return confirm('Yakin mau menghapus Poin?')">
                                                    <i class="fas fa-trash"></i>
                                                </a></td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama Siswa</th>
                                        <th>Rombel</th>
                                        <th>Poin</th>
                                        <th>Catatan</th>
                                        <th>Pencatat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->