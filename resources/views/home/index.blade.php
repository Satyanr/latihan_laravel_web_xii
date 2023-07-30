@extends('welcome')

@section('content')
    @push('styles')
        <style>
            h1.ml8 {
                font-weight: 900;
                font-size: 4.5em;
                color: #fff;
                width: 3em;
                height: 3em;
            }

            .ml8 .letters-container {
                position: absolute;
                left: 0;
                right: 0;
                margin: auto;
                top: 0;
                bottom: 0;
                height: 1em;
            }

            .ml8 .letters {
                position: relative;
                z-index: 2;
                display: inline-block;
                line-height: 0.7em;
                right: -0.12em;
                top: -0.2em;
            }

            .ml8 .bang {
                font-size: 1.4em;
                top: auto;
                left: -0.06em;
            }

            .ml8 .circle {
                position: absolute;
                left: 0;
                right: 0;
                margin: auto;
                top: 0;
                bottom: 0;
            }

            .ml8 .circle-white {
                width: 3em;
                height: 3em;
                border: 2px dashed white;
                border-radius: 2em;
            }

            .ml8 .circle-dark {
                width: 2.2em;
                height: 2.2em;
                background-color: #006eff;
                border-radius: 3em;
                z-index: 1;
            }

            .ml8 .circle-dark-dashed {
                border-radius: 2.4em;
                background-color: transparent;
                border: 2px dashed #24b8fd;
                width: 2.3em;
                height: 2.3em;
            }
        </style>
    @endpush
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('/uikit/assets/img/secure.png');">
            </div>
            <div class="content-center">
                <div class="container">
                    <h1 class="ml8">
                        <span class="letters-container">
                            <span class="letters letters-left">Hi</span>
                            <span class="letters bang">!</span>
                        </span>
                        <span class="circle circle-white"></span>
                        <span class="circle circle-dark"></span>
                        <span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Untuk Apa Website Ini di Buat ?</h2>
                        <h5 class="description">Website ini di buat dengan tujuan mengenang masa masa bersekolah dan juga
                            latihan latihan yanng dikerjakan selama berada di sekolah</h5>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left"
                                style="background-image: url('/uikit/assets/img/bg2.jpg')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">“Take care of all your memories. For you cannot
                                    relive them.”
                                    <br>
                                    <br>
                                    <small>— Bob Dylan</small>
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('/uikit/assets/img/bg3.jpg')"></div>
                        </div>
                        <div class="col-md-5">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right"
                                style="background-image: url('/uikit/assets/img/bg1.jpg')"></div>
                            <h3>Latihan-Latihan</h3>
                            <p>Untuk latihan-latihan nya sendiri kami selama kelas 12 berlatih membuat banyak objek yang
                                di buat dengan menggunakan framework laravel, semoga latihan latihan yang kami suguhkan di
                                sini bisa menjadi pelajaran ataupun refrensi untuk kalian yang melihat website ini
                                Terimakasih </p>
                            <a href="{{ route('latihan') }}"><h4>Untuk Latihanya silahkan tekan di sini</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Siswa/Siswi SECURE RPL Angkatan ke-8</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="/uikit/assets/img/avatar.jpg" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Romina Hadid</h4>
                                <p class="category text-primary">Model</p>
                                <p class="description">You can write here details about one of your team members. You can
                                    give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.
                                </p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="/uikit/assets/img/ryan.jpg" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Ryan Tompson</h4>
                                <p class="category text-primary">Designer</p>
                                <p class="description">You can write here details about one of your team members. You can
                                    give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.
                                </p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="/uikit/assets/img/eva.jpg" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Eva Jenner</h4>
                                <p class="category text-primary">Fashion</p>
                                <p class="description">You can write here details about one of your team members. You can
                                    give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.
                                </p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-youtube"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                        class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class=" container ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by
                    <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script>
            anime.timeline({
                    loop: true
                })
                .add({
                    targets: '.ml8 .circle-white',
                    scale: [0, 3],
                    opacity: [1, 0],
                    easing: "easeInOutExpo",
                    rotateZ: 360,
                    duration: 1100
                }).add({
                    targets: '.ml8 .circle-container',
                    scale: [0, 1],
                    duration: 1100,
                    easing: "easeInOutExpo",
                    offset: '-=1000'
                }).add({
                    targets: '.ml8 .circle-dark',
                    scale: [0, 1],
                    duration: 1100,
                    easing: "easeOutExpo",
                    offset: '-=600'
                }).add({
                    targets: '.ml8 .letters-left',
                    scale: [0, 1],
                    duration: 1200,
                    offset: '-=550'
                }).add({
                    targets: '.ml8 .bang',
                    scale: [0, 1],
                    rotateZ: [45, 15],
                    duration: 1200,
                    offset: '-=1000'
                }).add({
                    targets: '.ml8',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1400
                });

            anime({
                targets: '.ml8 .circle-dark-dashed',
                rotateZ: 360,
                duration: 8000,
                easing: "linear",
                loop: true
            });
        </script>
    @endpush
@endsection
