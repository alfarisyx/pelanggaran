
<div class="modal fade" id="modalList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">List Pelanggaran Siswa</h1>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                <div class="mb-3">
                                    <?php
                                    include "koneksi.php";
                                    $id_siswa = $_GET['id'];
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id_siswa ='$id_siswa'");
                                    $row = mysqli_fetch_assoc($hasil);
                                    ?>
                                <label class="form-label">Nama Siswa</label>
                                <input type="text" name="nama_siswa" value="<?=$row['nama_siswa']?>" disabled>
                                <input type="hidden" name="id_siswa" value="<?=$row['id_siswa']?>"/>
                                <label class="form-label">kelas</label>
                                <input type="text" name="kelas" value="<?=$row['kelas']?>" disabled>
                                <label class="form-label">Tanggal Laporan</label>
                                <input type="date" class="form-control" name="tanggal">
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Tipe Pelanggaran</label>
                                <select class="form-select" name="id_kat" aria-label="Default select example">
                                    <?php
                                    $no = 1;
                                    include "koneksi.php";
                                    $hasil = mysqli_query($koneksi, "SELECT * FROM kat_pelanggaran");
                                    while ($row1 = mysqli_fetch_assoc($hasil)) { ?>
                                    <option name="pelanggaran" value="<?=$row1['id_kat']?>">
                                    <?=$row1['tipe_pelanggaran']?> 
                                    </option> <?php } ?>
                                </select>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="bsimpan1">Simpan</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                </div>
                                </form>

                                <?php
                                if(isset($_POST['bsimpan1'])){
                                    include "koneksi.php";

                                    $id_kat = $_POST['id_kat'];
                                    $id_siswa = $_POST['id_siswa'];
                                    $tanggal = $_POST['tanggal'];
                                   
                                    $query = "INSERT INTO list_pelanggaran VALUES (NULL, NULL, '$tanggal', '$id_kat', '$id_siswa'); ";
                                    mysqli_query($koneksi, $query);
                                }
                                ?>