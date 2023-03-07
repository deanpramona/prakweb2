<?php
// ambil data yang diinoutkan oleh user
require_once 'fungsi.php';
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$matkul = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$_nilai = $uts + $uas + $tugas /3;
$keterangan = kelulusan($_nilai);
$grade = grade($_nilai);


// cetak data yang telah di ambil ke dalam user
if(!empty($proses)){
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $matkul";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Keterangan : $keterangan";
echo "<br/>Grade : $grade";
echo "<br/>Data Telah di Proses";
}
?>