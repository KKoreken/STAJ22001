<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('sube-ekle')}}" method="post"> @csrf
    <select name="il_id" id="il">
        @foreach($il as $i)
            <option value="{{$i->id}}">{{$i->baslik}}</option>
        @endforeach
    </select>
    <br>
    <select name="ilce_id" id="ilce"></select> <br>
    <input name="subeadi" placeholder="subeadi" type="text" > <br>
    <input name="longitude" placeholder="longitude" type="text" > <br>
    <input name="langtide" placeholder="langtide" type="text" > <br>
    <button type="submit">Onayla</button>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script >
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
        }
    });

</script>
</body>
</html>
