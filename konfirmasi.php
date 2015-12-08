<?php
include("koneksi_restaurant.php");
$pesanan=mysqli_real_escape_string($conn, $_GET["pesanan"]);
	  $nama=mysqli_real_escape_string($conn, $_GET["nama"]);
	  $alamat=mysqli_real_escape_string($conn, $_GET["alamat"]);
	  $notelp=mysqli_real_escape_string($conn, $_GET["notelp"]);
	  $email=mysqli_real_escape_string($conn, $_GET["email"]);
	  echo '<h3>Data Pemesan</h3>';
	  echo '<hr>';
	  echo '<div class="form-group">
    <label for="nama">Nama Pemesan:</label>
    <input type="text" class="form-control" id="namapembeli" value="'.$nama.'" readonly>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat:</label>
    <input type="text" class="form-control" id="alamat" value="'.$alamat.'" readonly>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" value="'.$email.'" readonly>
  </div>
  <div class="form-group">
    <label for="notelp">No telp:</label>
    <input type="number" class="form-control" id="notelp" value="'.$notelp.'" readonly>
  </div>
  ';
echo '<input id="boxcart" name="boxcart" type="hidden" value="'.$pesanan.'" readonly>';
$isipesanan=explode(",", $pesanan);
$jumlah=sizeof($isipesanan);
$totalharga=0;
//$jumlah1=array($jumlah);
echo "<table class='table'>";
echo "<tr><td>Nama Barang</td><td>Harga Barang</td></tr>";
for($i=0;$i<sizeof($isipesanan);$i++){
	$isi=$isipesanan[$i];
$sql="select nama_makanan, harga_makanan  from tb_menu where id='$isi';";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);


echo "<tr><td>".$row["nama_makanan"]."</td><td>".$row["harga_makanan"]."</td></tr>";
$totalharga+=(int)$row["harga_makanan"];
}
echo "</table>";
echo "<br>Total Harga : Rp.".$totalharga.",-<br>";

echo ' <input type="button" class="btn btn-md" onclick ="konfirmasidata(boxcart.value, namapembeli.value, alamat.value, notelp.value, email.value);  " value="Pesan">
';
echo '</div>';
