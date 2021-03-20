<!DOCTYPE html>
<html lang="en">
<head>
<title>Nilai Mahasiswa</title>
<style>
body {
    background-color: #4b0082;
    background-attachment :fixed;
    font-family: "Clarendon Blk BT";
    color: #fff8dc;
}
h3 {
    font-size: 30px;
    margin: 30px;
color: #e9967a;
    text-align: center;
}
.tbl {
    margin-left:auto;
    margin-right:auto;
    width: 80%;
    border: 5px solid #fff8dc;
    padding: 10px;
    top: 100px;
    border-collapse: collapse;
}
th {
    height: 60px;
    background-color: #2f4f4f;
    color: #fff8dc;
}
td {
    height: 50px;
}
</style>
</head>
<body>
    <h3 align="center">Daftar Nilai Siswa</h3>
    <table class="tbl" border="1">
    <thead>
        <tr>
            <th>No</th><th>Nama</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $proses = $_GET['simpan'];
        $nama = $_GET['nama'];
        $nim = $_GET['nim'];
        $matkul = $_GET['matkul'];
        $uts = $_GET['n1'];
        $uas = $_GET['n2'];
        $tugas = $_GET['n3'];
        $ns1 = ['nama'=>'sehun','nim'=>'01101','n1'=>80,'n2'=>84,'n3'=>78];
        $ns2 = ['nama'=>'luhan','nim'=>'01121','n1'=>70,'n2'=>69,'n3'=>77];
        $ns3 = ['nama'=>'baekhyun','nim'=>'01130','n1'=>75,'n2'=>86,'n3'=>70];
        $ns4 = ['nama'=>'taeyong','nim'=>'01134','n1'=>90,'n2'=>91,'n3'=>80];
        $ns5 = ['nama'=> $nama,'nim'=> $nim,'n1'=> $uts,'n2'=> $uas,'n3'=> $tugas];
        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
        ?>
        <?php
    
        $nomor = 1;
        foreach($ar_nilai as $ns){
        echo '<tr align="center"><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nama'].'</td>';
        echo '<td>'.$ns['nim'].'</td>';
        echo '<td>'.$ns['n1'].'</td>';
        echo '<td>'.$ns['n2'].'</td>';
        echo '<td>'.$ns['n3'].'</td>';
        $nilai_akhir = ($ns['n1'] + $ns['n2']+$ns['n3'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
        }
        ?>
    </tbody>
    </table>
</body>
</html>


