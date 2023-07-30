@extends('welcome')

@section('content')
    @push('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- leaflet css  -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />
        <!-- leaflet js  -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>

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

            #mapid {
                height: 500px;
            }
        </style>
    @endpush
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('/uikit/assets/img/secure.png');">
            </div>
            <div class="content-center">
                <div class="container">
                    {{-- <h1 class="ml8">
                        <span class="letters-container">
                            <span class="letters letters-left">Hi</span>
                            <span class="letters bang">!</span>
                        </span>
                        <span class="circle circle-white"></span>
                        <span class="circle circle-dark"></span>
                        <span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
                    </h1> --}}
                </div>
            </div>
        </div>

        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col ml-auto mr-auto">
                        <p class="category">Latihan-latihan</p>
                        <!-- Tabs with Background on Card -->
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                                    data-background-color="orange">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#map1" role="tab">Map</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Messages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Settings</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content text-center">
                                    {{-- Latihan Map --}}
                                    <div class="tab-pane active" id="map1" role="tabpanel">
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <h3>Latihan Map Dengan Leaflet</h3>
                                                </div>
                                            </div>
                                            <div class="row justify-content-md-center">
                                                <div class="col p-2">
                                                    <h4>Tambahkan Marker</h4>
                                                    <form action="{{ route('map.store') }}" method="POST"
                                                        enctype="multipart/form-data" id="add-map-form">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="latlong">Kordinat</label>
                                                                <input type="text" class="form-control" id="latlong"
                                                                    name="latlong" placeholder="-7.254837, 108.373031"
                                                                    required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="nama">Nama Tempat</label>
                                                                <input type="text" class="form-control" id="nama"
                                                                    name="nama" placeholder="Sorabi Wahabi" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col">
                                                            <label for="kategori_tempat">Kategori Tempat</label>
                                                            <select id="kategori_tempat" name="kategori_tempat"
                                                                class="form-control" required>
                                                                <option value="">--Kategori Tempat--</option>
                                                                <option value="Rumah Makan">Rumah Makan</option>
                                                                <option value="Pom Bensin">Pom Bensin</option>
                                                                <option value="Fasilitas Umum">Fasilitas Umum</option>
                                                                <option value="Pasar/Mall">Pasar/Mall</option>
                                                                <option value="Rumah Sakit">Rumah Sakit</option>
                                                                <option value="Sekolah">Sekolah</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col align-center">
                                                            <label for="keterangan">Keterangan</label>
                                                            <textarea class="form-control" id="keterangan" name="keterangan" cols="30" rows="5"></textarea>
                                                        </div>
                                                        <button type="submit" id="btnsubmap" class="btn btn-primary">Tambahkan</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div id="mapid"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                        <p> I will be the leader of a company that ends up being worth billions of dollars,
                                            because I
                                            got the answers. I understand culture. I am the nucleus. I think that’s a
                                            responsibility
                                            that I have, to push possibilities, to show people, this is the level that
                                            things could be
                                            at. I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this
                                            is the level that things could be at. </p>
                                    </div>
                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show
                                            people, this is
                                            the level that things could be at. So when you get something that has the name
                                            Kanye West on
                                            it, it’s supposed to be pushing the furthest possibilities. I will be the leader
                                            of a
                                            company that ends up being worth billions of dollars, because I got the answers.
                                            I
                                            understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="settings1" role="tabpanel">
                                        <p>
                                            "I will be the leader of a company that ends up being worth billions of dollars,
                                            because I
                                            got the answers. I understand culture. I am the nucleus. I think that’s a
                                            responsibility
                                            that I have, to push possibilities, to show people, this is the level that
                                            things could be
                                            at."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs on plain Card -->
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

        {{-- Map Script --}}
        <script>
            // marker icon
            var rumahsakit = L.icon({
                iconUrl: '/assets/map/rm-marker.png',

                iconSize: [64, 64],
                iconAnchor: [0, 100],
                popupAnchor: [-3, -76]
            });

            var pasarmall = L.icon({
                iconUrl: '/assets/map/shop-marker.png',

                iconSize: [64, 64],
                iconAnchor: [0, 100],
                popupAnchor: [-3, -76]
            });

            var rumahmakan = L.icon({
                iconUrl: '/assets/map/rumahmakan-marker.png',

                iconSize: [64, 64],
                iconAnchor: [0, 100],
                popupAnchor: [-3, -76]
            });

            var pombensin = L.icon({
                iconUrl: '/assets/map/oil-marker.png',

                iconSize: [64, 64],
                iconAnchor: [0, 100],
                popupAnchor: [-3, -76]
            });


            var FasilitasUmum = L.icon({
                iconUrl: '/assets/map/fasmum-marker.png',

                iconSize: [64, 64],
                iconAnchor: [0, 100],
                popupAnchor: [-3, -76]
            });

            var Sekolah = L.icon({
                iconUrl: '/assets/map/school-marker.png',

                iconSize: [64, 64],
                iconAnchor: [0, 100],
                popupAnchor: [-3, -76]
            });

            // set lokasi latitude dan longitude, lokasinya kota palembang 
            var mymap = L.map('mapid').setView([-7.254837, 108.373031], 12);
            //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
            L.tileLayer(
                'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap',
                    maxZoom: 20,
                    tileSize: 512,
                    zoomOffset: -1,
                }).addTo(mymap);

            // buat variabel berisi fugnsi L.popup 
            var popup = L.popup();

            // buat fungsi popup saat map diklik
            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent("koordinatnya adalah " + e.latlng
                        .toString()
                    ) //set isi konten yang ingin ditampilkan, kali ini kita akan menampilkan latitude dan longitude
                    .openOn(mymap);

                document.getElementById('latlong').value = e
                    .latlng //value pada form latitde, longitude akan berganti secara otomatis
            }
            mymap.on('click', onMapClick); //jalankan fungsi

            @foreach ($maps as $map)

                var latLongStr = "{!! $map->latlong !!}";
                var latLong = latLongStr.replace('LatLng(', '').replace(')', '').split(', ');
                var lat = parseFloat(latLong[0]);
                var long = parseFloat(latLong[1]);

                var mapkategori = "{!! $map->kategori !!}";

                var customIcon;
                if (mapkategori === 'Fasilitas Umum') {
                    customIcon = FasilitasUmum;
                } else if (mapkategori === 'Rumah Sakit') {
                    customIcon = rumahsakit;
                } else if (mapkategori === 'Pasar/Mall') {
                    customIcon = pasarmall;
                } else if (mapkategori === 'Rumah Makan') {
                    customIcon = rumahmakan;
                } else if (mapkategori === 'Pom Bensin') {
                    customIcon = pombensin;
                } else if (mapkategori === 'Sekolah') {
                    customIcon = Sekolah;
                }

                var marker = L.marker([lat, long], {
                    icon: customIcon
                }).addTo(mymap);

                marker.bindPopup("<b>{{ $map->nama }}</b><br>{{ $map->keterangan }}");
            @endforeach
        </script>
    @endpush
@endsection
