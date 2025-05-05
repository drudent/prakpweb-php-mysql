<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Icep Septian Fajar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/icon.png">
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Jaldi' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    </head>
    <body>
        <!-- Navbar -->
        <div class="header">
            <div>
                <div class="header-logo inline">
                    <img src="assets/icon.png" alt="">
                    <a href="index.html" class="logo-text">Icep Septian Fajar</a>
                </div>
                <ul class="header-menu">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
                <span class="burger-btn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                
                <!-- Mobile Nav -->
                <div id="myNav" class="overlay">
                    <ul class="mobile-nav">
                        <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a></li>
                        <li><a href="#beranda" onclick="closeNav()">Beranda</a></li>
                        <li><a href="#tentang" onclick="closeNav()">Tentang</a></li>
                        <li><a href="#portfolio" onclick="closeNav()">Portfolio</a></li>
                        <li><a href="#kontak" onclick="closeNav()">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Content -->
        <div>
            
            <!-- Beranda -->
            <div id="beranda" class="beranda">
                <div class="beranda-img">
                    <img src="assets/pfp.png" alt="">
                </div>
                <div class="beranda-info">
                    <div>
                        <p>Perkenalkan, nama saya Icep Septian Fajar, seorang mahasiswa Informatika Semester 4 Universitas Siliwangi. Berfokus pada bidang Web Development, Cyber Security dan Jaringan Komputer.</p>
                    </div>
                    <div class="beranda-info-btn">
                        <a href="#portfolio">Portfolio</a>
                    </div>
                </div>
            </div>
            
            <!-- Tentang -->
            <div id="tentang" class="box">
                <div class="box-title">
                    <h3>Tentang</h3>
                </div>
                <div>
                    <p>Perkenalkan, nama saya Icep Septian Fajar, seorang mahasiswa Informatika Semester 4 Universitas Siliwangi. Berfokus pada bidang Web Development, Cyber Security dan Jaringan Komputer.</p>
                    <p>Saya mempunyai minat untuk berkarir sebagai IT profesional.</p>
                </div>
            </div>
            
            <!-- Keahlian -->
            <div class="box">
                <div class="box-title">
                    <h3>Keahlian</h3>
                </div>
                <div>
                    <div class="skill center">
                        <div class="inline skill-list">
                            <img src="assets/html-icon.png" alt="HTML">
                            <p>HTML (Intermediate)</p>
                        </div>
                        <div class="inline skill-list">
                            <img src="assets/css-icon.png" alt="CSS">
                            <p>CSS (Intermediate)</p>
                        </div>
                        <div class="inline skill-list">
                            <img src="assets/mysql-icon.png" alt="MySQL">
                            <p>MySQL (Intermediate)</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p>Mengapa memperkerjakan saya?</p>
                    <p>Memperkerjakan saya akan membawa keahlian dan pengalaman yang relevan untuk mendukung tujuan tim dan perusahaan. Saya memiliki kemampuan untuk bekerja secara efektif dalam tim dan cepat beradaptasi dengan perubahan, sehingga dapat memberikan kontribusi positif.</p>
                </div>
            </div>
            
            <!-- Testimoni -->
            <div class="box">
                <div class="box-title">
                    <h3>Testimoni</h3>
                </div>
                <div class="inline-test">
                    <div class="box-testimoni">
                        <img src="" alt="">
                        <p>"Saya sangat merekomendasikan layanan mereka, karena mereka tidak hanya  memenuhi harapan kami, tetapi juga melampauinya dengan solusi inovatif."</p>
                        <p class="name">-John</p>
                    </div>
                    <div class="box-testimoni">
                        <img src="" alt="">
                        <p>"Tim ini berhasil menciptakan situs web yang sesuai dengan visi kami,  dengan desain yang menarik dan fungsionalitas yang luar biasa."</p>
                        <p class="name">-William</p>
                    </div>
                    <div class="box-testimoni">
                        <img src="" alt="">
                        <p>"Pengalaman bekerja dengan tim pengembangan web ini sangat memuaskan,  mereka selalu profesional dan responsif terhadap kebutuhan kami."</p>
                        <p class="name">-Dave</p>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio -->
            <div id="portfolio" class="box">
                <div class="box-title">
                    <h3>Portfolio</h3>
                </div>
                <div>
                    <div>
                        <div class="inline-port">
                            <img src="assets/smpitalasyariyyah.png" alt="">
                            <div class="portfolio-text">
                                <h4>Website SMP IT Al-Asyariyyah</h4>
                                <p>Website SMP IT Al-Asyariyyah adalah platform resmi yang menyediakan  informasi tentang kegiatan, program, dan fasilitas yang ditawarkan oleh  SMP IT Al-Asyariyyah.</p>
                                <div class="port-link center">
                                    <a href="https://smpitalasyariyyah.infy.uk">Kunjungi</a>
                                </div>
                            </div>
                        </div>
                        <div class="inline-port">
                            <img src="assets/deretaritmatika.png" alt="">
                            <div  class="portfolio-text">
                                <h4>Kalkulator Deret Aritmatika</h4>
                                <p>Kalkulator Deret Aritmatika adalah sebuah aplikasi berbasis web  yang dirancang untuk menghitung dan menganalisis deret aritmatika.
                                <div class="port-link center">
                                    <a href="https://drudent.github.io/deret-aritmatik/">Kunjungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Kontak -->
            <div id="kontak" class="box">
                <div class="box-title">
                    <h3>Kontak</h3>
                </div>
                <div class="kontak">
                    <div class="box-kontak">
                        <div class="kontak-list inline">
                            <img src="assets/email-icon.png" alt="">
                            <p>icpsptfjr@gmail.com</p>
                        </div>
                        <div class="kontak-list inline">
                            <img src="assets/instagram-icon.png" alt="">
                            <a href="https://www.instagram.com/icepseptian/"><p>@icepseptian</p></a>
                        </div>
                    </div>
                </div>

                <!-- Formulir -->
                <div class="box-title">
                    <h4>Hubungi Saya</h4>
                </div>
                <form id="contactForm" method="POST">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" id="name" name="nama_lengkap" required>
                    <span class="error" id="nameError"></span>
                
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <span class="error" id="emailError"></span>
                
                    <label for="phone">Nomor Handphone:</label>
                    <input type="text" id="phone" name="nomor_hp" required>
                    <span class="error" id="phoneError"></span>
                
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="pesan" required></textarea>
                    <span class="error" id="messageError"></span>
                
                    <button type="submit">Kirim</button>
                </form>

                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Ambil dan filter data dari form
                        $nama = trim($_POST['nama_lengkap']);
                        $email = trim($_POST['email']);
                        $nomor_hp = trim($_POST['nomor_hp']);
                        $pesan = trim($_POST['pesan']);

                        // Validasi sederhana (tambahan keamanan)
                        if ($nama && $email && $nomor_hp && $pesan) {
                            $sql = "INSERT INTO formulir (nama_lengkap, email, nomor_hp, pesan) VALUES (?, ?, ?, ?)";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("ssss", $nama, $email, $nomor_hp, $pesan);

                            if ($stmt->execute()) {
                                echo "<script>alert('Pesan berhasil dikirim!');</script>";
                            } else {
                                echo "<script>alert('Gagal menyimpan pesan: " . $stmt->error . "');</script>";
                            }

                            $stmt->close();
                            $conn->close();
                        } else {
                            echo "<script>alert('Semua field wajib diisi.');</script>";
                        }
                    }
                ?>

            </div>
        </div>

        <!-- Footer -->
        <div class="box center">
            <p>© 2025 Icep Setian Fajar</p>
        </div>
    
        <!-- JavaScript -->
        <script>
            function openNav() {
              document.getElementById("myNav").style.width = "100%";
            }
            
            function closeNav() {
              document.getElementById("myNav").style.width = "0%";
            }

            $(document).ready(function () {
                $('#contactForm').on('submit', function (event) {
                    let isValid = true;
                    $('.error').text('');

                    const name = $('#name').val().trim();
                    if (name === '' || name.split(' ').length > 3) {
                        $('#nameError').text('Nama lengkap wajib diisi dan maksimal 3 kata.');
                        isValid = false;
                    }

                    const email = $('#email').val().trim();
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (email === '' || !emailPattern.test(email)) {
                        $('#emailError').text('Email tidak valid.');
                        isValid = false;
                    }

                    const phone = $('#phone').val().trim();
                    const phonePattern = /^[0-9]{10,15}$/;
                    if (phone === '' || !phonePattern.test(phone)) {
                        $('#phoneError').text('Nomor handphone tidak valid. Harus 10-15 digit.');
                        isValid = false;
                    }

                    const message = $('#message').val().trim();
                    if (message === '' || message.split(' ').length > 50) {
                        $('#messageError').text('Pesan wajib diisi dan maksimal 50 kata.');
                        isValid = false;
                    }

                    if (!isValid) {
                        event.preventDefault(); // Mencegah pengiriman jika tidak valid
                    }
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </body>
</html>
