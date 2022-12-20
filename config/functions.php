<?php

$conn = mysqli_connect("localhost", "root", "", "studytracer");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }   
    return $rows;
}

function tambah_akunadmin($data)
{
    global $conn;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $enkrip = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO akunadmin VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah_akunalumni($data)
{
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $number = "1234567890";
    $username = htmlspecialchars($data["nik"]);
    $password = substr(str_shuffle($chars), 0, 8);

    $enkrip = password_hash($password, PASSWORD_DEFAULT);

    $nim = substr(str_shuffle($number), 0, 10);

    $Query = mysqli_query($conn, "INSERT INTO akun VALUES ('$nik', '$username', '$password')");
    $Query .= mysqli_query($conn, "INSERT INTO data_alumni VALUES ('$nim','$nik','','','','','','','','',
    '','','','-','','','','-')");

    return mysqli_affected_rows($conn);
}

function tambah_kuesioner($data)
{
    global $conn;
    $nik = ($data["nik"]);

    $bekerja = htmlspecialchars($data["bekerja"]);
    $perusahaan = htmlspecialchars($data["perusahaan"]);
    $provinsi = htmlspecialchars($data["provinsi_perusahaan"]);
    $kota = htmlspecialchars($data["kota_perusahaan"]);
    $alamat = htmlspecialchars($data["alamat_perusahaan"]);
    $alasan_k = htmlspecialchars($data["alasan_k"]);
    $memilih_k = htmlspecialchars($data["memilih_k"]);
    $email = htmlspecialchars($data["email_perusahaan"]);
    $jenis = htmlspecialchars($data["jenis_perusahaan"]);

    $kuliah = htmlspecialchars($data["kuliah"]);
    $jenjang = htmlspecialchars($data["jenjang"]);
    $kapan = htmlspecialchars($data["kapan"]);
    $alasan_p = htmlspecialchars($data["alasan_p"]);
    $nama = htmlspecialchars($data["nama"]);
    $memilih_p = htmlspecialchars($data["memilih_p"]);

    $Query = mysqli_query($conn, "INSERT INTO kuesioner_pekerjaan VALUES ('', '$nik', '$bekerja', '$perusahaan',
    '$provinsi', '$kota', '$alamat', '$alasan_k', '$memilih_k', '$email', '$jenis')");
    $Query .= mysqli_query($conn, "INSERT INTO kuesioner_pendidikan VALUES ('', '$nik', '$kuliah',
    '$jenjang', '$kapan', '$alasan_p', '$nama', '$memilih_p')");

    return mysqli_affected_rows($conn);
}

function hapus_dataalumni($nik)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_alumni WHERE nik = $nik");
    return mysqli_affected_rows($conn);
}

function hapus_akunadmin($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM akunadmin WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_akunalumni($nik)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM akun WHERE nik = $nik");
    return mysqli_affected_rows($conn);
}

function hapus_datakuesioner($nik)
{
    global $conn;
    $hapus = mysqli_query($conn, "DELETE FROM kuesioner_pekerjaan WHERE nik = $nik");
    $hapus .= mysqli_query($conn, "DELETE FROM kuesioner_pendidikan WHERE nik = $nik");
    return mysqli_affected_rows($conn);
}

function ubah_datadiri($data)
{
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nik = ($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $tahun_lulus = htmlspecialchars($data["tahun_lulus"]);
    $jurusan = htmlspecialchars($data["jurusan_alumni"]);
    $prodi = htmlspecialchars($data["prodi_alumni"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email_alumni"]);
    $nohp = htmlspecialchars($data["nohp_alumni"]);
    $lanjut_pend = htmlspecialchars($data["lanjut_pendidikan"]);
    $univ = htmlspecialchars($data["univ_lanjut"]);
    $jurusan_l = htmlspecialchars($data["jurusan_lanjut"]);
    $prodi_l = htmlspecialchars($data["prodi_lanjut"]);
    $gelar = htmlspecialchars($data["gelar_lanjut"]);
    $lanjut_kerja = htmlspecialchars($data["lanjut_pekerjaan"]);
    $perusahaan = htmlspecialchars($data["pt_lanjut"]);
    $bagian = htmlspecialchars($data["bagian_lanjut"]);
    $sesuai = htmlspecialchars($data["sesuai"]);

    if ($lanjut_pend == "Tidak") {
        $univ = "";
        $jurusan_l = "";
        $prodi_l = "";
        $gelar = "-";
    }

    if ($lanjut_kerja == "Tidak") {
        $perusahaan = "";
        $bagian = "";
        $sesuai = "-";
    }

    $query = "UPDATE data_alumni SET nim = '$nim', nik = '$nik', nama = '$nama', tahun_lulus = '$tahun_lulus',
    jurusan_alumni = '$jurusan', prodi_alumni = '$prodi', alamat = '$alamat', email_alumni = '$email',
    nohp_alumni = '$nohp', lanjut_pendidikan = '$lanjut_pend', univ_lanjut = '$univ', jurusan_lanjut = '$jurusan_l',
    prodi_lanjut = '$prodi_l', gelar_lanjut = '$gelar', lanjut_pekerjaan = '$lanjut_kerja', pt_lanjut = '$perusahaan',
    bagian_lanjut = '$bagian', sesuai = '$sesuai' WHERE nik = $nik";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_akunadmin($data)
{
    global $conn;
    $id = ($data["id"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $query = "UPDATE akunadmin SET id = '$id', username = '$username', password = '$password'
    WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_profil_admin($data)
{
    global $conn;
    $id = ($data["id"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $query = "UPDATE akunadmin SET id = '$id', username = '$username', password = '$password'
    WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_akunalumni($data)
{
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $query = "UPDATE akun SET nik = '$nik', username = '$username', password = '$password'
    WHERE nik = $nik";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_profil_alumni($data)
{
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $query = "UPDATE akun SET nik = '$nik', username = '$username', password = '$password'
    WHERE nik = $nik";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari_dataalumni($keyword)
{
    $query = "SELECT * FROM data_alumni WHERE nim LIKE '%$keyword%' OR
    nik LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR tahun_lulus LIKE '%$keyword%' OR
    jurusan_alumni LIKE '%$keyword%' OR prodi_alumni LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR
    email_alumni LIKE '%$keyword%'";
    return query($query);
}

function cari_data_Alumni($keyword)
{
    $query = "SELECT * FROM data_alumni WHERE nim LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR tahun_lulus 
    LIKE '%$keyword%' OR jurusan_alumni LIKE '%$keyword%' OR prodi_alumni LIKE '%$keyword%' OR
    email_alumni LIKE '%$keyword%'";
    return query($query);
}

function cari_akunadmin($keyword)
{
    $query = "SELECT * FROM akunadmin WHERE id LIKE '%$keyword%' OR
    username LIKE '%$keyword%' OR password LIKE '%$keyword%'";
    return query($query);
}

function cari_akunalumni($keyword)
{
    $query = "SELECT * FROM akun WHERE nik LIKE '%$keyword%' OR
    username LIKE '%$keyword%' OR password LIKE '%$keyword%'";
    return query($query);
}

function cari_kuesioneralumni($keyword)
{
    $query = "SELECT kuesioner_pekerjaan.nik, data_alumni.nim, data_alumni.nama, data_alumni.jurusan_alumni,
    data_alumni.prodi_alumni FROM data_alumni INNER JOIN kuesioner_pekerjaan ON 
    kuesioner_pekerjaan.nik = data_alumni.nik WHERE kuesioner_pekerjaan.nik LIKE '%$keyword%' OR 
    data_alumni.nim LIKE '%keyword%' OR data_alumni.nama LIKE '%$keyword%' OR
    data_alumni.jurusan_alumni LIKE '%$keyword%' OR data_alumni.prodi_alumni LIKE '%$keyword%' ";
    return query($query);
}
