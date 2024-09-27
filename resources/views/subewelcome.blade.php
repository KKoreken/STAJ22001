<!DOCTYPE html>
<html>
<head>
    <title>Laravel Harita Projesi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="form-group">
        <label for="il">İl Seçin:</label>
        <select class="form-control" id="il">
            <option value="">İl Seçin</option>
            @foreach($iller as $il)
                <option value="{{ $il->id }}">{{ $il->baslik }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ilce">İlçe Seçin:</label>
        <select class="form-control" id="ilce">
            <option value="">İlçe Seçin</option>
        </select>
    </div>
    <div id="map"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    $(document).ready(function () {
        var map = L.map('map').setView([39.925533, 32.866287], 6); // Türkiye merkez koordinatları

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var markers = [];

        function updateMap(subeler) {
            // Tüm marker'ları temizle
            markers.forEach(function (marker) {
                map.removeLayer(marker);
            });
            markers = [];

            // Yeni şubeleri ekle
            subeler.forEach(function (sube) {
                var marker = L.marker([parseFloat(sube.latitude), parseFloat(sube.longitude)])
                    .addTo(map)
                    .bindPopup(sube.baslik + '<br>' + sube.adres + '<br>' + sube.telefon_no);
                markers.push(marker);
            });

            if (subeler.length > 0) {
                var bounds = new L.LatLngBounds();
                markers.forEach(function (marker) {
                    bounds.extend(marker.getLatLng());
                });
                map.fitBounds(bounds);
            }
        }

        // Sayfa ilk yüklendiğinde tüm şubeleri göster
        updateMap(@json($subeler));

        $('#il').change(function () {
            var il_id = $(this).val();
            $('#ilce').html('<option value="">İlçe Seçin</option>');
            if (il_id) {
                $.ajax({
                    url: '/staj/ilceler/' + il_id,
                    type: 'GET',
                    success: function (data) {
                        $.each(data, function (index, ilce) {
                            $('#ilce').append('<option value="' + ilce.id + '">' + ilce.baslik + '</option>');
                        });
                    }
                });
                // Şubeleri gösterme ve haritayı güncelleme
                $.ajax({
                    url: '/staj/subeler/il/' + il_id,
                    type: 'GET',
                    success: function (data) {
                        updateMap(data);
                    }
                });
            }
        });

        $('#ilce').change(function () {
            var ilce_id = $(this).val();
            if (ilce_id) {
                $.ajax({
                    url: '/staj/subeler/' + ilce_id,
                    type: 'GET',
                    success: function (data) {
                        updateMap(data);
                    }
                });
            }
        });
    });
</script>
</body>
</html>
