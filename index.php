<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="style.css">
      
        <title>Presensi Guru</title>
        <meta name="description" content="Presensi Guru berbasis Web">
        <meta name="keywords" content="Presensi Guru berbasis Web">
    </head>
  <body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo" id="inilogo">Presensi Online</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#Beranda" class="nav__link active">Beranda</a></li>
                    <li class="nav__item"><a href="#Tentang" class="nav__link">Tentang</a></li>
                    <!--<li class="nav__item"><a href="#Camera" class="nav__link">Camera</a></li>-->
                    <li class="nav__item"><a href="#Album" class="nav__link">Album</a></li>
                    <!--<li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Hubungi</a></li>-->
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="homes" id="Beranda">
            <div class="mainL">

                <div class="homeL">
                    <div class="slogan">
                        <h1 class="t">Presensi Guru<br><span class="u">berbasis Web</span></h1>
                        <p>Sistem presensi guru berbasis web memungkinkan para guru untuk melakukan absensi dengan cepat dan mudah.</p>
                    </div>
                    <div class="action">
                        <div class="link">
                            <a class="button" onClick="tombolMasuk();">Masuk</a>
                            <a class="button ln" onClick="tombolMasuk();">Daftar</a>
                        </div>
                        <div class="flexIn baseline">
                            <div><a class="extL" href="#Tentang">Selengkapnya</a></div>
                        </div>
                    </div>
                </div>
    
                <div class="homeR">
                    <img alt="Pics" src="https://presensi.feeldream.repl.co/pic4.png">
                    <img alt="Pics" src="https://presensi.feeldream.repl.co/pic2.png">
                    <img alt="Pics" src="https://presensi.feeldream.repl.co/pic3.png">
                </div>

            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="Tentang">
            <h2 class="section-title">Tentang</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="https://rayyarr.github.io/presensi/img/mkgr1.jpg" alt="">
                </div>
                
                <div>
                    <h2 class="about__subtitle">Contoh Judul</h2>
                    <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique, sem vel blandit imperdiet, arcu erat aliquet dui, non suscipit libero orci venenatis massa. Nunc finibus nisi pellentesque lacus vehicula consequat.</p>           
                </div>                                   
            </div>
        </section>

        <section class="camera section" id="Camera" style="display: none;">
            <h2 class="section-title">Camera</h2>
            
  <div align="center">
    
  </div>
  <div class="about__container bd-grid">
    <div class="text-center" id="my_camera"></div>
    <div class="about__text">
        <p style="text-align:justify;margin-bottom: 10px;">Kami menghadirkan terobosan inovasi terbaru mengenai pengembangan teknologi sistem presensi untuk sekolah <b>SMP SMA MKGR KERTASEMAYA</b> dengan mewajibkan pengguna berswafoto (selfie) sebagai tanda bukti yang membuat data absensi semakin akurat dan meminimalisir kecurangan.</p>           
        <a class="button ln" onClick="take_snapshot();"><svg class='line' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><g transform='translate(2.500000, 3.042105)'><path d='M12.9381053,9.456 C12.9381053,7.71915789 11.5296842,6.31073684 9.79284211,6.31073684 C8.056,6.31073684 6.64757895,7.71915789 6.64757895,9.456 C6.64757895,11.1928421 8.056,12.6012632 9.79284211,12.6012632 C11.5296842,12.6012632 12.9381053,11.1928421 12.9381053,9.456 Z'></path><path d='M9.79252632,17.158 C17.8377895,17.158 18.7956842,14.7474737 18.7956842,9.52431579 C18.7956842,5.86326316 18.3114737,3.90431579 15.262,3.06221053 C14.982,2.97378947 14.6714737,2.80536842 14.4198947,2.52852632 C14.0135789,2.08326316 13.7167368,0.715894737 12.7356842,0.302210526 C11.7546316,-0.110421053 7.81463158,-0.0914736842 6.84936842,0.302210526 C5.88515789,0.696947368 5.57147368,2.08326316 5.16515789,2.52852632 C4.91357895,2.80536842 4.60410526,2.97378947 4.32305263,3.06221053 C1.27357895,3.90431579 0.789368421,5.86326316 0.789368421,9.52431579 C0.789368421,14.7474737 1.74726316,17.158 9.79252632,17.158 Z'></path><line x1='14.7045' y1='5.957895' x2='14.7135' y2='5.957895'></line></g></svg>Ambil Foto</a>
    </div>                                   
</div>
  <!-- webcamjs lewat CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>

  <!-- webcamjs lewat LOKAL -->
  <script src="http://rayyarr.github.io/presensi/js/webcam.js"></script>

  <!-- Configure a few settings and attach camera -->
  <script language="JavaScript">
    Webcam.set({
      width: 320,
      height: 240,
      image_format: 'jpeg',
      jpeg_quality: 100
    });
    Webcam.attach('#my_camera');


    function take_snapshot() {

      // take snapshot and get image data
      Webcam.snap(function (data_uri) {
        // menampilkan hasil
        Swal.fire({
            title: 'Taraa!',
            text: 'Ini adalah hasil swafoto Anda.',
            imageUrl: '' + data_uri,
            imageWidth: 320,
            imageHeight: 240,
            imageAlt: 'Swafoto',
        })
      });
      
    }
  </script>
</section>

        <!--===== WORK =====-->
        <section class="work section" id="Album">
            <h2 class="section-title">Album</h2>
          
            <div class="work__container bd-grid">
                <a href="" class="work__img">
                    <img src="https://test.feeldream.repl.co/img/ngoding.png" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="https://test.feeldream.repl.co/img/ngoding.png" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="https://test.feeldream.repl.co/img/ngoding.png" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="https://test.feeldream.repl.co/img/ngoding.png" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="https://test.feeldream.repl.co/img/ngoding.png" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="https://test.feeldream.repl.co/img/ngoding.png" alt="">
                </a>
            </div>
          
        </section>

        <!--===== SKILLS =====-->
        <!--<section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">          
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">Impian saya menjadi seorang Web Developer.</p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon' ></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>
                        <div class="skills__bar skills__ux">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">70%</span>
                        </div>
                    </div>
                </div>
                
                <div>              
                    <img src="/img/ngoding.png" alt="" class="skills__img">
                </div>
            </div>
        </section>-->

        <!--===== CONTACT =====-->
        <!--<section class="contact section" id="contact">
            <h2 class="section-title">Hubungi Saya</h2>

            <div class="contact__container bd-grid">
                <form action="mailto:rayyar0703@gmail.com" method="post" enctype="text/plain" class="contact__form">
                    <input type="text" placeholder="Nama" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                    <textarea name="" placeholder="Isi pesan di sini" id="" cols="0" rows="10" class="contact__input"></textarea>
                    <input type="submit" value="Submit" class="contact__button button">
                </form>
            </div>
        </section>-->
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Thank you!</p>
        <!--<div class="footer__social">
            <a href="https://www.instagram.com/rayyarrr" class="footer__icon" target="_blank"><i class='icn instagram' ></i></a>
            <a href="https://www.tiktok.com/@rayy4r" class="footer__icon" target="_blank"><i class='icn tiktok' ></i></a>
            <a href="https://github.com/feeldreams" class="footer__icon" target="_blank"><i class='icn github' ></i></a>
        </div>-->
        <p class="footer__copy">&#169; All rigths reserved</p>
    </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="main.js"></script>

    <style>
        .swal2-title{font-size: 1.5rem;}
    </style>
    <script>
        function tombolMasuk(){
            /*Swal.fire({
  title: 'Ingin Masuk Sebagai Guru Apa?',
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: 'SMP',
  denyButtonText: `SMA`,
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire('OK!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('OK', '', 'success')
  }
})*/

window.location = "http://localhost/absenguru/index";
        }
    </script>
</body>
</html>
</html>
