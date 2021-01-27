<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_produksi WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Produksi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                     <div class="form-group">
                            <label for="kode_produksi" class="col-sm-3 control-label">Kode Produksi</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_produksi"value="<?=$data['kode_produksi']?>" class="form-control" id="inputEmail3" placeholder="Inputkan kode produksi" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_produksi" class="col-sm-3 control-label">Tanggal Produksi</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_produksi" value="<?=$data['tgl_produksi']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal produksi" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="hasil_produksi" class="col-sm-3 control-label">Hasil Produksi</label>
                            <div class="col-sm-9">
                                <input type="text" name="hasil_produksi"value="<?=$data['hasil_produksi']?>" class="form-control" id="inputEmail3" placeholder="Inputkan hasil produksi" required>
                            </div>
                            </div>
                        

                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Produksi</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=produksi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Produksi
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
     $kode_produksi=$_POST['kode_produksi'];
    $tgl_produksi=$_POST['tgl_produksi'];
     $hasil_produksi=$_POST['hasil_produksi'];

    //buat sql
    $sql="UPDATE data_produksi SET kode_produksi = '$kode_produksi', tgl_produksi='$tgl_produksi', hasil_produksi='$hasil_produksi' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=produksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




