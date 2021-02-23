@extends("app")

@section("content")
<div class="container-md">
    <h5> Registered Users </h5>

    @if(count($users) >= 1)
    @foreach ($users as $user)

    <a href="/users/{{ $user->id }}"> <h6> {{$user->name}} </h6></a>
    @endforeach
@else
    <h6> No records found </h6>
@endif



@endsection

@section("title")
    {{"Users - Bristol Vet Practice"}}
@endsection