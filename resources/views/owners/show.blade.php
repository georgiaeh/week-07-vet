@extends("app")

@section("main")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
        <p class="mb-1">This is the landing page for the vet app</p>
    </div>
    <br>
    <h6> {{$owner->fullName()}} </h6>
    <ul class="list-group">   
        <li class ="list-group-item"> {{$owner->email}} </li>
        <li class ="list-group-item"> {{$owner->formattedPhoneNumber()}} </li>
        <li class ="list-group-item"> {{$owner->fullAddress()}} </li>
    </ul>

@endsection

@section("title")
    {{"Bristol Vet Practice"}}
@endsection
