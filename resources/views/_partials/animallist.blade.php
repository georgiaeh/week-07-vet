<h2> Animals </h2>

@if(count($animals) > 1)
    @foreach ($animals as $animal)

    <a href="/owners/{{$animal->owner->id}}/animals/{{$animal->id}}"> <h6> {{$animal->name}} </h6></a>

    <br>
    @endforeach
@else
    <h6> No records found </h6>
@endif