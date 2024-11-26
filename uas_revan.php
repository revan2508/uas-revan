<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penggajian</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px 10px;
            vertical-align: middle;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            background: #007BFF;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        .hasil {
            margin-top: 20px;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .hasil h3 {
            color: #007BFF;
            margin-bottom: 20px;
            text-align: center;
        }

        .hasil p {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        .hasil .detail {
            margin-bottom: 10px;
        }

        .hasil .gaji-detail {
            background: #f0f8ff;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hasil .gaji-detail h4 {
            margin: 0;
            color: #333;
        }

        .hasil .gaji-detail p {
            margin: 5px 0;
        }

        .hasil .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3><b>SISTEM PENGGAJIAN</b></h3>
        <h3><b>GURU/KARYAWAN YAYASAN ASSALAAM</b></h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><input type="text" name="nomor" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td>
                        <select name="unit_pendidikan" required>
                            <option value="TK">TK</option>
                            <option value="TPQ">TPQ</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="MA">MA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Gajian</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_gajian" required></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <select name="jabatan" required>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakasek">Wakasek</option>
                            <option value="Guru">Guru</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><input type="text" name="lama_kerja" required></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td>
                        <select name="status_kerja" required>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td><input type="text" name="bpjs" required></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><input type="text" name="pinjaman" required></td>
                </tr>
                <tr>
                    <td>Cicilan</td>
                    <td>:</td>
                    <td><input type="text" name="cicilan" required></td>
                </tr>
                <tr>
                    <td>Infaq</td>
                    <td>:</td>
                    <td><input type="text" name="infaq" required></td>
                </tr>
                <tr>
                    <td colspan="3" class="center-text">
                        <input type="submit" name="proses" value="Proses">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        class Penggajian {
            private $no;
            private $nama;
            private $unit_pendidikan;
            private $tanggal_gajian;
            private $jabatan;
            private $lama_kerja;
            private $statusKerja;
            private $gajiPokok;
            private $bonus;
            private $bpjs;
            private $pinjaman;
            private $cicilan;
            private $infaq;

            public function __construct($no, $nama, $unit_pendidikan, $tanggal_gajian, $jabatan, $lama_kerja, $statusKerja, $bpjs, $pinjaman, $cicilan, $infaq) {
                $this->no = $no;
                $this->nama = $nama;
                $this->unit_pendidikan = $unit_pendidikan;
                $this->tanggal_gajian = $tanggal_gajian;
                $this->jabatan = $jabatan;
                $this->lama_kerja = $lama_kerja;
                $this->statusKerja = $statusKerja;
                $this->bpjs = $bpjs;
                $this->pinjaman = $pinjaman;
                $this->cicilan = $cicilan;
                $this->infaq = $infaq;
                $this->setGajiPokokDanBonus();
            }

            public function setGajiPokokDanBonus() {
                switch ($this->jabatan) {
                    case "Kepala Sekolah":
                        $this->gajiPokok = 10000000;
                        break;
                    case "Wakasek":
                        $this->gajiPokok = 7000000;
                        break;
                    case "Guru":
                        $this->gajiPokok = 5000000;
                        break;
                    case "Karyawan":
                        $this->gajiPokok = 2500000;
                        break;
                    default:
                        $this->gajiPokok = 0;
                }
                $this->bonus = ($this->statusKerja === "Tetap") ? 1000000 : 0;
            }

            public function hitungGajiBersih() {
                $gajiKotor = $this->gajiPokok + $this->bonus;
                $potongan = $this->bpjs + $this->pinjaman + $this->cicilan + $this->infaq;
            return $gajiKotor - $potongan;
        }

        public function tampilkanRincian() {
            echo "<div class='hasil'>";
            echo "<h3>Rincian Gaji</h3>";
            echo "No: $this->no <br>";
            echo "Nama: {$this->nama}<br>";
            echo "Unit Pendidikan: $this->unit_pendidikan<br>";
            echo "Tanggal Gajian: $this->tanggal_gajian<br>";
            echo "Jabatan: {$this->jabatan}<br>";
            echo "Lama Kerja: $this->lama_kerja<br>";
            echo "Status Kerja: {$this->statusKerja}<br>";
            echo "Gaji Pokok: Rp " . number_format($this->gajiPokok, 0, ',', '.') . "<br>";
            echo "Bonus: Rp " . number_format($this->bonus, 0, ',', '.') . "<br>";
            echo "BPJS: $this->bpjs<br>";
            echo "Pinjaman: $this->pinjaman<br>";
            echo "Cicilan: $this->cicilan<br>";
            echo "infaq: $this->infaq <br>";
            echo "Potongan Total: Rp " . number_format($this->bpjs + $this->pinjaman + $this->cicilan + $this->infaq, 0, ',', '.') . "<br>";
            echo "Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br>";
            echo "</div>";
        }
    }

   
    if (isset($_POST['proses'])) {
        $no = $_POST["nomor"];
        $nama = $_POST["nama"];
        $unit_pendidikan = $_POST["unit_pendidikan"];
        $tanggal_gajian = $_POST["tanggal_gajian"];
        $jabatan = $_POST["jabatan"];
        $lama_kerja = $_POST["lama_kerja"];
        $statusKerja = $_POST["status_kerja"];
        $bpjs = $_POST["bpjs"];
        $pinjaman = $_POST["pinjaman"];
        $cicilan = $_POST["cicilan"];
        $infaq = $_POST["infaq"];

        $karyawan = new Penggajian($no, $nama, $unit_pendidikan, $tanggal_gajian, $jabatan, $lama_kerja, $statusKerja, $bpjs, $pinjaman, $cicilan, $infaq);
        $karyawan->tampilkanRincian();
    }
    ?>
</body>
</html>
