<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM data_penjualan WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel-->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">kode_penjualan</td> <td><?= $data['kode_penjualan'] ?></td>
                        </tr>
                        <tr>
                            <td>tanggal_penjualan</td> <td><?= $data['tanggal_penjualan'] ?></td>
                        </tr>
                        <tr>
                            <td>julmlah_bag</td> <td><?= $data['jumlah_bag'] ?></td>
                        </tr>
						<tr>
                            <td>total_harga</td> <td><?= $data['total_harga'] ?></td>
                        </tr>
                        <tr>
                            <td>nama_customer</td> <td><?= $data['nama_customer'] ?></td>
                        </tr>
                        <tr>
                            <td>nomor_kendaraan</td> <td><?= $data['nomor_kendaraan'] ?></td>
                        </tr>
						<tr>
                            <td>tujuan_pengiriman</td> <td><?= $data['tujuan_pengiriman'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=penjualan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data penjualan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

