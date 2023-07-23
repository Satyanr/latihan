<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Membuat Peta</title>

    <!-- leaflet css  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    /* ukuran peta */
    #mapid {
        height: 100%;
    }

    .jumbotron {
        height: 100%;
        border-radius: 0;
    }

    body {
        background-color: #ebe7e1;
    }
    </style>
</head>

<body>
    <div class="row">
        <!-- class row digunakan sebelum membuat column  -->
        <div class="col-4">
            <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
            <div class="jumbotron">
                <!-- untuk membuat semacam container berwarna abu -->
                <h1>Add Location</h1>
                <hr>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Latitude, Longitude</label>
                        <input type="text" class="form-control" id="latlong" name="latlong" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Tempat</label>
                        <input type="text" class="form-control" name="nama_tempat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kategori Tempat</label>
                        <select class="form-control" name="kategori" id="" required>
                            <option value="">--Kategori Tempat--</option>
                            <option value="rumah makan">Rumah Makan</option>
                            <option value="pom bensin">Pom Bensin</option>
                            <option value="Fasilitas Umum">Fasilitas Umum</option>
                            <option value="pasarmall">Pasar/Mall</option>
                            <option value="rumah sakit">Rumah Sakit</option>
                            <option value="Sekolah">Sekolah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <textarea class="form-control" name="keterangan" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">tambahkan</button>
                        <button onclick="goBack()" class="btn btn-danger">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-8">
            <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
            <!-- peta akan ditampilkan dengan id = mapid -->
            <div id="mapid"></div>
        </div>
    </div>


    <script>
    function goBack() {
        window.history.back();
    }
    </script>


    <!-- leaflet js  -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <script>
    // marker icon
    var rumahsakit = L.icon({
        iconUrl: 'Asset/hospital-marker.png',

        iconSize: [50, 70], // size of the icon
        iconAnchor: [5, 50], // point of the icon which will correspond to marker's location
        popupAnchor: [15, -30] // point from which the popup should open relative to the iconAnchor
    });

    var FasilitasUmum = L.icon({
        iconUrl: 'Asset/marker.png',

        iconSize: [30, 50], // size of the icon
        iconAnchor: [0, 30], // point of the icon which will correspond to marker's location
        popupAnchor: [15, -30] // point from which the popup should open relative to the iconAnchor
    });

    var Sekolah = L.icon({
        iconUrl: 'Asset/school-marker.png',

        iconSize: [50, 70], // size of the icon
        iconAnchor: [5, 50], // point of the icon which will correspond to marker's location
        popupAnchor: [15, -30] // point from which the popup should open relative to the iconAnchor
    });

    var pasarmall = L.icon({
        iconUrl: 'Asset/market-marker.png',

        iconSize: [30, 50], // size of the icon
        iconAnchor: [0, 30], // point of the icon which will correspond to marker's location
        popupAnchor: [15, -30] // point from which the popup should open relative to the iconAnchor
    });

    var rumahmakan = L.icon({
        iconUrl: 'Asset/rm-marker.png',

        iconSize: [50, 70], // size of the icon
        iconAnchor: [5, 50], // point of the icon which will correspond to marker's location
        popupAnchor: [15, -30] // point from which the popup should open relative to the iconAnchor
    });

    var pombensin = L.icon({
        iconUrl: 'Asset/pom-marker.png',

        iconSize: [50, 70], // size of the icon
        iconAnchor: [5, 50], // point of the icon which will correspond to marker's location
        popupAnchor: [15, -30] // point from which the popup should open relative to the iconAnchor
    });




    // set lokasi latitude dan longitude, lokasinya kota palembang 
    var mymap = L.map('mapid').setView([-7.254837, 108.373031], 12);
    //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
    L.tileLayer(
        'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 20,
            id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
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

    var markers = [];

    <?php
        
        $mysqli = mysqli_connect('localhost', 'root', '', 'latihan_db');   //koneksi ke database
        $tampil = mysqli_query($mysqli, "select * from tbl_latihan_map_lokasi"); //ambil data dari tabel lokasi
        while($hasil = mysqli_fetch_array($tampil)) {
            // Extract latitude and longitude from the database field (assuming it's stored as [lat, long])
            $lat_long = str_replace(['[', ']', 'LatLng', '(', ')'], '', $hasil['lat_long']);
            $lat_long_arr = explode(',', $lat_long);
            $lat = floatval(trim($lat_long_arr[0]));
            $long = floatval(trim($lat_long_arr[1]));
    ?>
    var marker = L.marker([<?php echo $lat; ?>, <?php echo $long; ?>], {
        icon: <?php echo preg_replace('/\s+/', '', $hasil['kategori']);?>
    }).addTo(mymap);

    // Set the popup content with information from the database
    marker.bindPopup(
        '<?php echo 'nama tempat: ' . $hasil['nama_tempat'] . '<br>kategori: ' . $hasil['kategori'] . '<br>keteragan: ' . $hasil['keterangan']; ?>'
    );

    // Add a click event listener for each marker to zoom in when clicked
    marker.on('click', function(e) {
        mymap.setView(e.latlng, 15); // Set the zoom level to 15 (adjust as needed)
    });

    // Push each marker into the markers array
    markers.push(marker);

    <?php
        }
    ?>

    // Make the markers hide when zoom out
    mymap.on('zoomend', function() {
        var currentZoom = mymap.getZoom();
        if (currentZoom < 13) {
            hideMarkers();
        } else {
            showMarkers();
        }
    });

    function hideMarkers() {
        // Loop through all markers and hide them
        for (var i = 0; i < markers.length; i++) {
            mymap.removeLayer(markers[i]);
        }
    }

    function showMarkers() {
        // Loop through all markers and show them
        for (var i = 0; i < markers.length; i++) {
            mymap.addLayer(markers[i]);
        }
    }
    </script>
</body>

</html>