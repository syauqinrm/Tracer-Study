<?php

session_start();

require '../../config/functions.php';
require '../../assets/fpdf/fpdf.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}

$pdf = new FPDF("P", "cm", "A4");
$pdf->SetMargins(2, 1.1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(18, 0.7, "Data Kuesioner Alumni", 0, 10, 'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);

$nik = $_SESSION['nik'];
$akunalumni = query("SELECT * FROM data_alumni WHERE nik = $nik")[0];

$kue_kerja = query("SELECT * FROM kuesioner_pekerjaan WHERE nik = $nik")[0];

$kue_pendik = query("SELECT * FROM kuesioner_pendidikan WHERE nik = $nik")[0];

$pdf->Cell(2, 1, 'NIM       :', 0, 0);
$pdf->Cell(5, 1, $akunalumni['nik'], 0, 1);
$pdf->Cell(2, 1, 'NIK       :', 0, 0);
$pdf->Cell(5, 1, $akunalumni['nim'], 0, 1);
$pdf->Cell(2, 1, 'Nama    :', 0, 0);
$pdf->Cell(5, 1, $akunalumni['nama'], 0, 1);
$pdf->ln();
$pdf->MultiCell(15, 1, 'Kuesioner Pekerjaan', 0, 0);
$pdf->ln();
$pdf->MultiCell(15, 1, 'Apakah saat ini anda sedang bekerja ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_kerja['bekerja'], 1, 0);
$pdf->MultiCell(15, 1, 'Apa nama perusahaan tempat anda bekerja ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_kerja['perusahaan'], 1, 0);
$pdf->MultiCell(15, 1, 'Dimana provinsi perusahaan anda bekerja ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_kerja['provinsi_perusahaan'], 1, 0);
$pdf->MultiCell(15, 1, 'Dimana kota perusahaan anda bekerja ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_kerja['kota_perusahaan'], 1, 0);
$pdf->MultiCell(15, 1, 'Alamat tempat perusahaan anda bekerja', 0, 0);
$pdf->MultiCell(15, 2, $kue_kerja['alamat_perusahaan'], 1, 0);
$pdf->MultiCell(15, 1, 'Alasan anda bekerja di perusahaan tersebut', 0, 0);
$pdf->MultiCell(15, 2, $kue_kerja['alasan_k'], 1, 0);
$pdf->MultiCell(15, 1, 'kenapa anda memilih perusahaan tersebut ?', 0, 0);
$pdf->MultiCell(15, 2, $kue_kerja['memilih_k'], 1, 0);
$pdf->MultiCell(15, 1, 'Apa email perusahaan anda ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_kerja['email_perusahaan'], 1, 0);
$pdf->MultiCell(15, 1, 'Apa jenis perusahaan / isntansi / lembaga tempat anda bekerja ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_kerja['jenis_perusahaan'], 1, 0);
$pdf->ln();
$pdf->MultiCell(15, 1, 'Kuesioner Pendidikan', 0, 0);
$pdf->ln();
$pdf->MultiCell(15, 1, 'Apakah saat ini anda sedang berkuliah ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_pendik['kuliah'], 1, 0);
$pdf->MultiCell(15, 1, 'Jenjang pendidikan yang sedang anda tempuh ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_pendik['jenjang'], 1, 0);
$pdf->MultiCell(15, 1, 'Kapan anda mulai studi ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_pendik['kapan'], 1, 0);
$pdf->MultiCell(15, 1, 'Apa alasan anda melanjutkan pendidikan ?', 0, 0);
$pdf->MultiCell(15, 2, $kue_pendik['alasan_p'], 1, 0);
$pdf->MultiCell(15, 1, 'Nama instansi pendidikan lanjut ?', 0, 0);
$pdf->MultiCell(15, 1, $kue_pendik['nama'], 1, 0);
$pdf->MultiCell(15, 1, 'Kenapa anda memilih instansi pendidikan tersebut ?', 0, 0);
$pdf->MultiCell(15, 2, $kue_pendik['memilih_p'], 1, 0);
$pdf->ln();
$pdf->SetFont('Arial', '', 10);


$pdf->Output("Laporan Isi Kuesioner Alumni", "I");
