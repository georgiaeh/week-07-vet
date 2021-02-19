<h2> Owners </h2>

@if(count($owners) > 1)
    @foreach ($owners as $owner)

    <a href="/owners/{{ $owner->id }}"> <h6> {{$owner->fullName()}} </h6></a>
    {{-- <ul class="list-group">   
        <li class ="list-group-item"> {{$owner->email}} </li>
        <li class ="list-group-item"> {{$owner->formattedPhoneNumber()}} </li>
        <li class ="list-group-item"> {{$owner->fullAddress()}} </li>
    </ul> --}}
    <br>
    @endforeach
@else
    <h6> No records found </h6>
@endif

{{ $owners->links("pagination::bootstrap-4") }}