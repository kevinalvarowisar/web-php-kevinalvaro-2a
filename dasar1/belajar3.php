<?php
echo "<h2>Belajar PHP itu menyenangkan!</h2>";
echo("Selamat Datang!<br>");
echo "Aku sedang belajar PHP!<br>";
echo "Ini "."teks "."yang "."dibuat "."terpisah.";

//untuk sintaks print
print "<h2>Belajar PHP !</h2>";
print "Hello world!<br>";
print "Belajar mecetak teks di PHP!<br>";

//menggunakan echo
$txt = "rudyekoprasetya.wordpress.com";
echo "<br>Aku belajar pemrograman PHP di " . $txt . "<br>";

//menggunakan printf
$txt = "rudyekoprasetya.wordpress.com";
printf("Aku belajar pemrograman PHP di %s<br>", $txt);

// misalkan kita punya bilangan 
$harga = 150000;
 
// jika kita cetak dengan echo:
echo "Harganya adalah Rp $harga <br>";
 
// jika kita cetak dengan printf
printf("Harganya adalah Rp %.2f<br>", $harga);
?>