<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
						 <div class="form-group">
                            <label for="kode_penjualan" class="col-sm-3 control-label">Kode Penjualan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_penjualan" class="form-control" id="inputEmail3" placeholder="Inputkan kode penjualan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal_penjualan" class="col-sm-3 control-label">Tanggal Penjualan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_penjualan" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal penjualan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jumlah_bag" class="col-sm-3 control-label">jumlahbag</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_harga" class="form-control" id="inputEmail3" placeholder="Inputkan Total Harga" required>
                            </div>
                            </div>
                         <div class="form-gr">
                            <label for="total_harga" class="col-sm-3 control-label">total harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_customer" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Customer" required>
                            </div>
                        </div>
						 <div class="form-gr">
                            <label for="nama_customer" class="col-sm-3 control-label">Nama Customer</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_customer" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Customer" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nomor_kendaraan" class="col-sm-3 control-label">Nomor Kendaraan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_kendaraan" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Kendaraan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tujuan_pengiriman" class="col-sm-3 control-label">Tujuan Pengiriman</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuan_pengiriman"class="form-control" id="inputEmail3" placeholder="Inputkan Tujuan Pengiriman" required>
                            </div>
                        </div>

                        <!--Status-->


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penjualan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penjualan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $kode_penjualan=$_POST['kode_penjualan'];
	$tanggal_penjualan=$_POST['tanggal_penjualan'];
    $jumlah_bag=$_POST['jumlah_bag'];
	$total_harga=$_POST['total_harga'];
	$nama_customer=$_POST['nama_customer'];
  $nomor_kendaraan=$_POST['nomor_kendaraan'];
	$tujuan_pengiriman=$_POST['tujuan_pengiriman'];
  
    //buat sql
    $sql="INSERT INTO data_penjualan VALUES ('','$kode_penjualan','$tanggal_penjualan','$jumlah_bag','$total_harga','$nama_customer','$nomor_kendaraan','$tujuan_pengiriman')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=penjualan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
