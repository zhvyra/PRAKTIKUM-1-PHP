<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
<style>
body {
    background-color: #4b0082;
    background-attachment :fixed;
    font-family: "Clarendon Blk BT";
    color: #2f4f4f;
    
}
h3 {
    font-size: 30px;
    color: #fff8dc;
    text-align: center;
}
form {
    overflow: hidden;
    margin: 10px auto;
    width: 50%;
    padding: 10px;
    border: 1px solid #2f4f4f;
    border-radius: 12px;
    background: #e9967a;
}
 
label {
    float: left;
    width: 200px;
    padding-left: 24px;
    font-size: 20px;
}
 
input {
    position: static;
    padding: 10px;
    margin-left: 250px;
    margin-bottom: 10px;
    margin-top: 10px;
    background-color: #2f4f4f;
    border: none;
    border-radius: 12px;
    color: #fff8dc;
    font-size: 20px;
    width: 50%;
    font-weight: 250;
}

.mate select {   
    position: static;
    padding: 10px;
    margin-left: 250px;
    margin-top: 10px;
    margin-bottom: -10px;
    background-color: #2f4f4f;
    border: none;
    border-radius: 12px;
    color: #fff8dc;
    font-size: 20px;
    width: 53%;
    font-weight: 250;

}
 
button {
  background-color: #2f4f4f;
  border: #2f4f4f;
  border-radius: 12px;
  color: #fff8dc;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid #663399;
}
</style>
</head>
<body>
    <h3>Form Nilai Siswa</h3>
    <form method="GET"action="aray.php">
    <div class="name">
        <label>Masukan Nama</label>
        <input type="text" name="nama" placeholder="masukan nama anda" size="30" >
    </div>
    <div class="nime">
        <label>NIM</label>
        <input type="number" name="nim" placeholder="masukan nim anda">
    </div>
    <div class="mate">
        <label>Mata Kuliah</label>
        <select name="matkul">
            <option value="Pemrograman Web Lanjutan">Pemrograman Web Lanjutan</option>
            <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
            <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
            <option value="UIUX">UIUX</option>
        </select>
    </div>
    </br>
    <div class="utse">
        <label>Nilai UTS</label>
        <input type="number" name="n1" placeholder="masukan nilai UTS anda">
    </div class="uase">
        <label>Nilai UAS</label>
        <input type="number" name="n2" placeholder="masukan nilai UAS anda">
    </div>
    <div class="tgs">
        <label>Nilai Tugas</label>
        <input type="number" name="n3" placeholder="masukan nilai Tugas anda">
    </div>
    <div class="butt">
        <button type="number" value="proses" name="simpan">Simpan</button>
    </div>
    </form>
</body>
</html>