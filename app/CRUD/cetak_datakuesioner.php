<?php

session_start();

require '../../config/functions.php';
require '../../assets/fpdf/fpdf.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}
$pdf = new FPDF("L", "cm", "A4");
$pdf->SetMargins(3, 1.1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(25, 0.7, "Data Alumni yang sudah mengisi kuesioner", 0, 10, 'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(1, 1, 'NO', 1, 0);
$pdf->Cell(4, 1, 'NIM', 1, 0);
$pdf->Cell(4, 1, 'NIK', 1, 0);
$pdf->Cell(5, 1, 'Nama', 1, 0);
$pdf->Cell(4, 1, 'Jurusan', 1, 0);
$pdf->Cell(4, 1, 'Prodi', 1, 0);
$pdf->Cell(3, 1, 'Tahun Lulus', 1, 1);
$pdf->SetFont('Arial', '', 10);
$i = 1;
$tampil = mysqli_query($conn, "SELECT kuesioner_pekerjaan.nik, data_alumni.nim, data_alumni.nama, data_alumni.jurusan_alumni,
data_alumni.prodi_alumni, data_alumni.tahun_lulus FROM data_alumni INNER JOIN kuesioner_pekerjaan ON 
kuesioner_pekerjaan.nik = data_alumni.nik");
while ($hasil = mysqli_fetch_array($tampil)) {
    $pdf->Cell(1, 1, $i, 1, 0);
    $pdf->Cell(4, 1, $hasil['nim'], 1, 0);
    $pdf->Cell(4, 1, $hasil['nik'], 1, 0);
    $pdf->Cell(5, 1, $hasil['nama'], 1, 0);
    $pdf->Cell(4, 1, $hasil['jurusan_alumni'], 1, 0);
    $pdf->Cell(4, 1, $hasil['prodi_alumni'], 1, 0);
    $pdf->Cell(3, 1, $hasil['tahun_lulus'], 1, 1);
    $i++;
}
$pdf->Output("Laporan_Data_Kuesioner", "I");
