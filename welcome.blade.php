@extends("layout")

@section("naslovStranice")
    Home
@endsection

@section("sadrzajStranice")

    @if($trenutnoSati >=0 && $trenutnoSati <= 12)
        <p>Dobro jutro</p>
    @else
        <p>Dobar dan</p>

    @endif

    <p class="bg-secondary text-white m-0">Trenutno vreme je {{$trenutnoVreme}}, trenutno sati {{$trenutnoSati}}</p>

    @foreach($newestProducts as $newproduct)
        <p>{{$newproduct->name}}</p>
        <p>{{$newproduct->description}}</p>
    @endforeach
@endsection






