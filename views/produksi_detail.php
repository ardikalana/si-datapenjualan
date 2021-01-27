<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Produksi</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM data_produksi WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode Produksi</td> <td><?= $data['kode_produksi'] ?></td>
                        </tr>
                        
                        <tr>
                            <td>Tanggal Produksi</td> <td><?= $data['tgl_produksi'] ?></td>
                        </tr>
						<tr>
                            <td>Hasil Produksi</td> <td><?= $data['hasil_produksi'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=produksi&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Produksi </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

