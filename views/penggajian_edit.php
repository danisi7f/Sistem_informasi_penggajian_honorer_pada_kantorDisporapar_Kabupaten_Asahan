<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_penggajian WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" value="<?=$data['nip']?>"class="form-control" id="inputEmail3" placeholder="nip">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="nama">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-3 ">
                                <select name="jk" class="form-control">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gaji" class="col-sm-3 control-label">Gaji</label>
                            <div class="col-sm-9">
                                <input type="text" name="gaji" value="<?=$data['gaji']?>"class="form-control" id="inputEmail3" placeholder="gaji">
                            </div>
                        </div>
					
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                       
                        <!--end tanggal lahir-->           

                        
                        
                        
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penggajian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penggajian Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nip_s=$_POST['nip'];
    $nama_s=$_POST['nama'];
	$jenis_s=$_POST['jk'];
    $alamat_s=$_POST['alamat'];
    $gaji_s=$_POST['gaji'];
    //buat sql
    $sql="UPDATE data_penggajian SET nip='$nip_s',nama='$nama_s',jk='$jenis_s',alamat='$alamat_s',gaji='$gaji_s' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penggajian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



