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

<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Pengaturan Umum</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Pengaturan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Horizontal Form -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>setting/index" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama_sekolah" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" value="<?php echo $setting->nama_sekolah ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="npsn_sekolah" class="col-sm-3 col-form-label">NPSN Sekolah</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="npsn_sekolah" name="npsn_sekolah" class="form-control" value="<?php echo $setting->npsn_sekolah ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat_sekolah" class="col-sm-3 col-form-label">Alamat Sekolah</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="alamat_sekolah" name="alamat_sekolah" class="form-control" value="<?php echo $setting->alamat_sekolah ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kecamatan_sekolah" class="col-sm-3 col-form-label">Kecamatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="kecamatan_sekolah" name="kecamatan_sekolah" class="form-control" value="<?php echo $setting->kecamatan_sekolah ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kabupaten_sekolah" class="col-sm-3 col-form-label">Kabupaten</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="kabupaten_sekolah" name="kabupaten_sekolah" class="form-control" value="<?php echo $setting->kabupaten_sekolah ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepala_sekolah" class="col-sm-3 col-form-label">Kepala Sekolah</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="kepala_sekolah" name="kepala_sekolah" class="form-control" value="<?php echo $setting->kepala_sekolah ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kop_surat" class="col-sm-3 col-form-label">Kop Surat</label>
                                        <div class="col-sm-9">
                                            <img src="<?php echo base_url('assets/images/kop_surat.jpg') ?>" alt="Kop Surat">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    <button type="submit" class="btn btn-success float-right">Simpan Pengaturan</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->