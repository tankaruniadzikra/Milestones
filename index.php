<?php
$koneksi = mysqli_connect('127.0.0.1', 'root', '', 'contact');
 
if(isset($_POST['submit'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = mysqli_query($koneksi, "insert into contactus (name,email,message) values('$nama','$email','$message')");

    if($query){
        echo 'berhasil';
    } else {
        echo 'gagal';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Cell</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
<header>
    <nav>
        <div class="logo">
            <li class="logo"><a href="index.php">Solar Senyum Cell</a></li>
        </div>

        <ul class="nav-links">
            <li><a href="services.html">Services</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    </header>

    <main class="contents">
        <div class="row">
            <div class="content-wrapper">
                <h1>Hemat Biaya & Energi dengan PLTS Atap</h1>
                <p>Dengan PLTS Atap, Anda dapat mengubah atap bangunan Anda menjadi sumber daya energi terbarukan yang efisien dan ramah lingkungan.<br><br>
                    Teknologi canggih ini memungkinkan Anda untuk menghasilkan listrik sendiri dari sinar matahari, mengurangi ketergantungan pada sumber energi konvensional, dan pada akhirnya, menghemat biaya energi Anda.<br><br>
                    Tim ahli kami siap membantu Anda memilih solusi PLTS Atap yang sesuai dengan kebutuhan energi dan anggaran Anda. Kami juga menyediakan layanan instalasi profesional dan pemeliharaan berkala untuk memastikan 
                    performa PLTS Anda selalu optimal.</p>
                <a href="#contact" class="btn">KONSULTASIKAN SEKARANG</a>
            </div>

            <div class="content-wrapper">
                <img src="img/hemat.png" alt="Lebih Hemat">
            </div>
        </div>

        <section id="gallery" class="section">
            <div class="container">
                <h2>Gallery</h2>
                <p>Proyek yang telah kami selesaikan menunjukkan keberhasilan implementasi solusi energi surya di berbagai lingkungan.</p>
                
                <div class="gallery-container">
                    <div class="gallery-item">
                        <img src="img/solar.jpg" alt="Project 1">
                    </div>
                    <div class="gallery-item">
                        <img src="img/solar1.jpg" alt="Project 2">
                    </div>
                    <div class="gallery-item">
                        <img src="img/solarpanel.jpg" alt="Project 3">
                    </div>
                    <div class="gallery-item">
                        <img src="img/solarpanel.jpg" alt="Project 4">
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="section">
            <div class="container">
                <h2>About Us</h2>
                <div class="about-content">
                    <div class="about-img">
                        <img src="img/solar1.jpg" alt="About Us Image">
                    </div>
                    <div class="about-text">
                        <p>Selamat datang di Solar Senyum Cell, di mana kami memiliki misi untuk merevolusi cara energi diperoleh dan digunakan. Dengan tim ahli yang penuh semangat, kami berdedikasi untuk membuat energi bersih dan terbarukan dapat diakses oleh semua orang.
                        <p>Perjalanan kami dimulai dengan visi untuk menciptakan masa depan yang berkelanjutan bagi generasi yang akan datang. Dengan pengalaman bertahun-tahun dalam teknologi tenaga surya, kami berkomitmen untuk memberikan solusi inovatif yang tidak hanya bermanfaat bagi lingkungan, tetapi juga membantu Anda menghemat biaya energi.
                        <p>Bergabunglah bersama kami dalam upaya mewujudkan dunia yang lebih cerah, lebih bersih, dan lebih berkelanjutan. Bersama-sama, kita dapat membuat perbedaan.</p>
                    </div>
                </div>
            </div>
        </section>

<section id="contact" class="section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Ada pertanyaan atau butuh informasi lebih lanjut? Jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda dalam perjalanan menuju masa depan yang lebih cerah dan lebih hijau.</p>
        <div class="contact-content">
            <div class="contact-image">
                <img src="img/contact.jpg" alt="Contact Image">
            </div>
            <div class="contact-form">
                
                <form method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com">

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit" name="submit" value="Submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Solar Senyum Cell</p>
        </div>
    </footer>
</body>
</html>