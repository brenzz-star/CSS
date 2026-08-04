<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Private</title>
    <link rel="stylesheet" href="web.css">
</head>
<style>
table {
    width: 100%;
    border-collapse: collapse; 
}

table, th, td {
    border: 2px solid black;
}

th, td {
     border: 2px solid white;
    padding: 10px;
    text-align: center;
}

tr:first-child {
    background-color: #c5c7c6;
    color: black;
}
</style>
<body>

    <nav id="back" class="Navbar">
        <a href="#home"><button>Home</button></a>
        <a href="#pendidikan"><button>Pendidikan</button></a>
        <a href="#jadwal"><button>Jadwal MP</button></a>
        <a href="#aktivitas"><button>Aktivitas</button></a>
    </nav>

    <hr>

    <div class="Welcome">
        <h1>Welcome To My Web</h1>
        <p>Selamat Datang Di Website Pribadi Saya</p>
    </div>

    <div id="home" class="Home">
        <h2 align="center">About Me</h2>
        <p align="justify">Perkenalkan nama saya Indra Cahyo Setiawan, Saya sekolah di SMK Negeri 3 Kendal. Jurusan saya yaitu PPLG(RPL), sekarang saya sudah masuk ke kelas 2. Saya berumur 16 tahun dan asal saya dari Semarang.</p>
        <a href="#back"><button>Back</button></a>
    </div>

    <div id="pendidikan" class="Pendidikan">
        <h2 align="center">Pendidikan</h2>
        <p>SD : SD Negeri 3 Wonosari</p>
        <p>SMP : SMP Negeri 3 Boja</p>
        <p>SMA : SMA Negeri 3 Kendal</p>
        <a href="#back"><button>Back</button></a>
    </div>

    <div id="jadwal" class="Jadwal">
        <h2 align="center">Daftar Mapel</h2>

        <table>
            <tr>
                <td>Jam ke</td>
                <td>Waktu</td>
                <td>Senin</td>
                <td>Selasa</td>
                <td>Rabu</td>
                <td>Kamis</td>
                <td>Jum'at</td>
            </tr>

            <tr>
                <td>1</td>
                <td>07.00-07.45</td>
                <td>MPIL</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>B.Inggris</td>
                <td>KIDK</td>
            </tr>

            <tr>
                <td>2</td>
                <td>07.45-08.30</td>
                <td>MPIL</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>B.Inggris</td>
                <td>KIDK</td>
            </tr>

            <tr>
                <td>3</td>
                <td>08.30-09.15</td>
                <td>MPIL</td>
                <td>KKRPL</td>
                <td>Sejarah</td>
                <td>PJOK</td>
                <td>KIDK</td>
            </tr>

            <tr>
                <td colspan="7" align="center">09.15-09.30 Istirahat</td>
            </tr>

            <tr>
                <td>4</td>
                <td>09.30-10.15</td>
                <td>MPIL</td>
                <td>KKRPL</td>
                <td>Sejarah</td>
                <td>PJOK</td>
                <td>B.Inggris</td>
            </tr>

            <tr>
                <td>5</td>
                <td>10.15-11.00</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>B.Jawa</td>
                <td>PAI</td>
                <td>B.Inggris</td>
            </tr>

            <tr>
                <td>6</td>
                <td>11.00-11.45</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>B.Jawa</td>
                <td>PAI</td>
                <td>MTK</td>
            </tr>

            <tr>
                <td colspan="7" align="center">11.45-12.30 Istirahat</td>
            </tr>

            <tr>
                <td>7</td>
                <td>12.30-13.15</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>MTK</td>
                <td>PAI</td>
                <td>PPKN</td>
            </tr>

            <tr>
                <td>8</td>
                <td>13.15-14.00</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>MTK</td>
                <td>B.Indonesia</td>
                <td>PPKN</td>
            </tr>

            <tr>
                <td>9</td>
                <td>14.00-14.45</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>KIDK</td>
                <td>B.Indonesia</td>
                <td></td>
            </tr>

            <tr>
                <td>10</td>
                <td>14.45-15.30</td>
                <td>KKRPL</td>
                <td>KKRPL</td>
                <td>KIDK</td>
                <td>B.Indonesia</td>
                <td></td>
            </tr>
        </table>

        <br>
        <a href="#back"><button>Back</button></a>
    </div>

    <div id="aktivitas" class="Aktivitas">
        <h2 align="center">Aktivitas</h2>
        <p>- Kelas Industri</p>
        <p>- Olahraga</p>
        <a href="#back"><button>Back</button></a>
    </div>

    <footer class="Footer">
        <p>Terima kasih telah mengunjungi website saya.</p>
    </footer>

</body>
</html>