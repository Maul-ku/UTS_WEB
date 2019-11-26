 <!DOCTYPE html>
<html>
<head>
    <title>ChelseaFC.id</title>
	<body background = "chelsea.jpg">
    <style type="text/css">
        .wrap {
            width: 1200px;
            margin: 45px 85px;
        }
        /*Awal Header*/
        .wrap .logo{
            background : navy;
            height: 140px;
            width: 250px;
            float: left;
        }
        .wrap .header{
            background : navy ;
            height: 140px;
            width: 900px;
            float: left;
        }
        .tanggal{
            color: white;
            text-align: right;
            padding-right: 20px;
        }
        /*Akhir Header*/

        /*Awal Sidebar*/
        .wrap .sidebar{
            background : #00b3b3;
            padding-top: 50px;
            height: 400px;
            width: 250px;
            float: left; 
        }
        .wrap .sidebar ul li{ 
            padding: 10px;
        }
        .wrap .content{
            background : white;
            padding-top: 50px;
            height: 400px;
            width: 900px;
            float: left;
            overflow-y:auto;
            overflow-x:scroll;
        }
        /*Akhir Sidebar*/
        /*Awal Footer*/
        .wrap .footer{
            background : #0000ff;
            padding-left: 20px;
            padding-top: 5px;
            height: 30px;
            width: 1135px;
            float: left;
        }
        /*Akhir Footer*/
        img{
            height: 140px;
            width: 140px;
            padding-left: 60px;
        }
        h1{
            padding-left: 300px;
            font-size: 40px;
            padding-top: 10px;
            color: white;
            font-family: verdana;
        }
        
    </style>
</head>
<body background="chelsea.jpg">
    <div class="wrap">
        <div class="logo">          
        <a href="http://www.chelseafc.com/in">
            <img src="che.png" title="Logo ChelseaFC">
        </a>
        </div>
        <div class="header">          
            <h1><font face="Arial">ChelseaFansClub</font></h1>
            <div class="tanggal">
                <?php
                    // Real Time Clock
                    echo date('d F Y');
                ?> 
            </div> 
        </div>         
        <div class="sidebar">
            <ul>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=beranda">Home</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=pendaftaran">Pendaftaran</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=idealBB">Mengukur Berat Badan Ideal</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=usia">Menghitung Kategori Usia</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=persegiPanjang">Menghitung Persegi Panjang</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=segitiga">Menghitung Segi Tiga</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=daftarMhs">Daftar Mahasiswa</a></li>              
            </ul>
        </div>
        <div class="content"><center>
            <?php
            // Bagian Home
            if (@$_GET['op'] == "beranda")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <h2>Selamat Datang di ChelseaFC.id</h2>
            <table>
                <tr><td>Nama</td><td>:</td><td>Maulana Iskandar Syah</td></tr>
                <tr><td>NIM</td><td>:</td><td>11180910000051</td></tr>
                <tr><td>Fakultas</td><td>:</td><td>Sains dan Teknologi</td></tr>
                <tr><td>Program Studi</td><td>:</td><td>Teknik Informatika</td></tr>
                </table>

            </form>

            <?php
            }
            // Bagian Pendaftaran
            else if (@$_GET['op'] == "pendaftaran")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pendaftaran">
                <table border="4" cellpadding="20px">
				  <p>PENDAFTARAN</p>
                  <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
                  <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat" size="30"></td></tr>
                  <tr><td>Tanggal Lahir</td><td>:</td>
                    <td>
                      <select name="tanggal">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      <select name="bulan">
                        <option value="Januari">01</option>
                        <option value="Februari">02</option>
                        <option value="Maret">03</option>
                        <option value="April">04</option>
                        <option value="Mei">05</option>
                        <option value="Juni">06</option>
                        <option value="Juli">07</option>
                        <option value="Agustus">08</option>
                        <option value="September">09</option>
                        <option value="Oktober">10</option>
                        <option value="November">11</option>
                        <option value="Desember">12</option>
                      </select>
                      <select name="tahun">
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                      </select>
                    </td>
                  </tr>
                  <tr><td>Alamat Rumah</td><td>:</td><td><textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
                  <tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex" value="Laki-laki">Laki-laki<input type="radio" name="sex" value="Perempuan">Perempuan</td></tr>
                  <tr><td>Sekolah Asal</td><td>:</td><td><input type="text" name="sekolah" size="30"></td></tr>
                  <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilai" size="30"></td></tr>
                </table>
                <input type="reset" name="reset" value="Hapus"><input type="submit" name="submit" value="Submit">
            </form>
             
            <?php
            }
            // Bagian BeratBadan
            else if (@$_GET['op'] == "idealBB")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=idealBB">
            <table>
				<p>Anda Belum Mengukur Berat Badan? Cek Sekarang !</p>
				<tr><td>Tinggi Badan Anda </td><td>:</td><td><input type="text" name="tb"></td><td>cm</td></tr>
                <tr><td>Berat Badan Anda </td><td>:</td><td><input type="text" name="bb"></td><td>kg</td></tr>
                <tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
            </table>
            </form>

            <?php
            }
            // Bagian Usia
            else if (@$_GET['op'] == "usia")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=usia">
                <p>Cek Status Usia !</p>
				<table>
                    <tr><td>Usia Anda</td><td>:</td><td><input type="text" name="yo"></td><td>tahun</td></tr>
                    <tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
                </table>
            </form>

            <?php
            }
            // Bagian PersegiPanjang
            else if (@$_GET['op'] == "persegiPanjang")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=persegiPanjang">
				<p>Menghitung Luas Persegi Panjang !</p>
                <table>
                  <tr><td>Masukkan Panjang </td><td>:</td><td><input type="text" name="panjang"></td></tr>
                  <tr><td>Masukkan Lebar </td><td>:</td><td><input type="text" name="lebar"></td></tr>  
                </table>
                <input type="reset" name="reset" value="Reset"> <input type="submit" name="submit" value="Submit"> 

            </form>

            <?php
            }
            // Bagian Segitiga
            else if (@$_GET['op'] == "segitiga")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=segitiga">
				<p>Mengitung Luas Segitiga !</p>
                <table>
                  <tr><td>Masukkan Alas </td><td>:</td><td><input type="text" name="alas"></td></tr>
                  <tr><td>Masukkan Tinggi </td><td>:</td><td><input type="text" name="tinggi"></td></tr>  
                </table>
                <input type="reset" name="reset" value="Reset"> <input type="submit" name="submit" value="Submit"> 

            </form>

            <?php
            }
            // Table Database Universitas
            else if (@$_GET['op'] == "daftarMhs")
            {
            ?>
             
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "universitas";
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn){
                        die("Connection Failed:".mysqli_connect_error());
                    }
                $query = mysqli_query($conn,"SELECT * FROM mahasiswa");
                ?>

                <form action="" method="post">
					<p>DAFTAR MAHASISWA</p>
                    <table border="4" cellpadding="1" cellspacing="1">
                        <tr>
                            <th>nim </th>
                            <th>nama </th>
                            <th>tempat_lahir </th>
                            <th>tanggal_lahir </th>
                            <th>jurusan </th>
                            <th>ipk </th>
                        </tr>
                        <?php if(mysqli_num_rows($query)>0){ ?>
                        <?php
                            $i = 1;
                            while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $data["nim"];?></td>
                            <td><?php echo $data["nama"];?></td>
                            <td><?php echo $data["tempat_lahir"];?></td>
                            <td><?php echo $data["tanggal_lahir"];?></td>
                            <td><?php echo $data["jurusan"];?></td>
                            <td><?php echo $data["ipk"];?></td>
                        </tr>
                        <?php $i++; } ?>
                        <?php } ?>
                    </table>
                </form>
				<p></p>
             
            <?php
            }
            //Data dan Proses
            if (@$_GET['show'] == "idealBB")
            { 
              $tinggi=$_POST['tb'];
                $berat=$_POST['bb'];
                $persen=($tinggi-100)*0.1;
                $ideal=($tinggi-100)-$persen;
                    if($berat <= $ideal+2 && $berat >= $ideal-2){
                    echo "<p>Berat Badan Anda Termasuk Ideal.</p>";
                    }
                    else{
                    echo "<p>Berat Badan Anda Tidak Ideal.</p>";
                    }
                }elseif (@$_GET["show"] == "usia") {
                    $usia=$_POST['yo'];
                    if($usia >= 0 && $usia <= 5.5)        {
                        echo "<p>Status Usia Anda : Balita.</p>";
                    }else if($usia > 5.5 && $usia <= 16.5)
                    {
                        echo "<p>Status Usia Anda : Anak-anak.</p>";
                    }else if($usia > 16.5 && $usia <= 50.5)
                    {
                        echo "<p>Status Usia Anda : Dewasa.</p>";
                    }else if($usia > 50.5)
                    {
                        echo "<p>Status Usia Anda : Lanjut Usia.</p>";
                    }else
                    {
                        echo "<p>Tidak Diketahui !</p>";
                    }
            }elseif (@$_GET["show"] == "pendaftaran") {
                $namaLengkap = $_POST['nama'];  
                $tempatLahir = $_POST['tempat'];
                $tanggalLahir = $_POST['tanggal'];
                $bulanLahir = $_POST['bulan'];
                $tahunLahir = $_POST['tahun'];
                $alamatAnda = $_POST['alamat'];  
                $kelaminAnda = $_POST['sex'];  
                $asalSekolah = $_POST['sekolah'];
                $nilaiUAN = $_POST['nilai'];
                $tbtLahir;
                echo "<table>";
                echo "<tr><td>Halo $namaLengkap Terima Kasih Sudah Mengisi Form Pendaftaran</tr></td>";
                echo "<tr><td>Nama Lengkap : ".$namaLengkap."</td></tr>";
                echo "<tr><td>Tempat Lahir : ".$tempatLahir."</td></tr>";
                echo "<tr><td>Tanggal Lahir : ".$tanggalLahir."/".$bulanLahir."/".$tahunLahir."</td></tr>";
                echo "<tr><td>Alamat Rumah : ".$alamatAnda."</td></tr>";
                echo "<tr><td>Jenis Kelamin : ".$kelaminAnda."</td></tr>";
                echo "<tr><td>Sekolah Asal : ".$asalSekolah."</td></tr>";
                echo "<tr><td>Nilai UAN : ".$nilaiUAN."</td></tr>";
                echo "</table>";
            }elseif (@$_GET["show"] == "persegiPanjang") {
                function luas_persegiPanjang($panjang,$lebar)
                {
                  $hasil = $panjang*$lebar;
                  echo "<p>Panjangnya adalah <b>".$panjang."</b> </p>";
                  echo "<p>Lebarnya adalah <b>".$lebar."</b> </p>";
                  echo "<p>Luasnya adalah <b>".$hasil."</b> </p>";
                }
                  $panjang = $_POST['panjang'];
                  $lebar = $_POST['lebar'];
                  luas_persegiPanjang($panjang, $lebar);
            }elseif (@$_GET["show"] == "segitiga") {
                function luas_segitiga($alas,$tinggi)
                {
                  $hasil = ($alas/2)*$tinggi;
                  echo "<p>Alasnya adalah <b>".$alas."</b> </p>";
                  echo "<p>Tingginya adalah <b>".$tinggi."</b> </p>";
                  echo "<p>Luasnya adalah <b>".$hasil."</b> </p>";
                }
                  $alas = $_POST['alas'];
                  $tinggi = $_POST['tinggi'];
                  luas_segitiga($alas, $tinggi);
            }
            ?>
        </center></div>
        <div class="footer">
            Copyright &copy;2019 Maulana Iskandar Syah | All right Reserved | <a href="https://web.facebook.com/maulana.iskandarsyah.9">Tentang</a> | Privacy Policy       
        </div>
    </div>
</body>
</html>
