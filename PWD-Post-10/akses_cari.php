<form action="akses_cari.php" method="GET">
    <label for="">Cari : </label>
    <input type="text" name="nim">
    <input type="submit" />
</form>
<?php
error_reporting(0);
$getnim = $_GET['nim'];
$url = "http://localhost/PWD/PWD-Post-10/cari_api.php?nim=$getnim";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
    echo "<p>";
    echo "NIM           : " . $r->nim . "<br/>";
    echo "Nama          : " . $r->nama . "<br/>";
    echo "Jenis kelamin : " . $r->jkel . "<br/>";
    echo "Alamat        : " . $r->alamat . "<br/>";
    echo "Tanggl Lahir  : " . $r->tgllhr . "<br/>";
    echo "</p>";
}
?>