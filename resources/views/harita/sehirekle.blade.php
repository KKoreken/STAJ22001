<form action="{{url('sehir-ekle')}}" method="post"> @csrf
    <input name="sehiradi" placeholder="sehiradi" type="text" > <br>
    <input name="plaka" placeholder="plaka" type="text" > <br>
    <button type="submit">Onayla</button>
</form>
