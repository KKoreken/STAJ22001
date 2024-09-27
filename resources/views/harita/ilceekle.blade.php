<form action="{{url('ilce-ekle')}}" method="post"> @csrf
    <select name="plaka" id="">
        @foreach($il as $i)
            <option value="{{$i->id}}">{{$i->baslik}}</option>
        @endforeach
    </select>
    <input name="ilceadi" placeholder="ilce adi" type="text" > <br>
    <button type="submit">Onayla</button>
</form>
