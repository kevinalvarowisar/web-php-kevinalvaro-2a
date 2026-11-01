<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Modul Pemrograman Mobile",
        "penulis" => "Kevin Alvaro"
    ],
    [
        "judul" => "Modul Dasar Pemrograman dengan C++",
        "penulis" => "Kevin Alvaro"
    ],
    [
        "judul" => "Panduan Block Programming dengan SCRATCH",
        "penulis" => "Kevin Alvaro"
    ]
];

// menampilkan array
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis ".$item["penulis"]."<p>";
    echo "<br>";
}

?>