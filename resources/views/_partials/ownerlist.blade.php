<h2> Owners </h2>

@if(count($owners) > 1)
    @foreach ($owners as $owner)
    <a href="/owners/{{ $owner->id }}"> <h6> {{$owner->fullName()}} </h6></a>
    <br>
    @endforeach
@else
    <h6> No records found </h6>
@endif

@if ($links != "no")
    {{ $owners->links("pagination::bootstrap-4") }}
@else
    
@endif
