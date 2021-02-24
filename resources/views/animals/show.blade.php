@extends("app")

@section("content")
<div class="d-flex w-100 justify-content-between">
    <h1 class="mb-1">Bristol Vet Practice</h1>
</div>

<h5> {{$animal->name}}</h5>
<ul class="list-group" >
    <li class ="list-group-item" >DOB: {{$animal->dob}}</li>
    <li class ="list-group-item" >Species: {{$animal->species}}</li>
    <li class ="list-group-item" >Weight: {{$animal->weight}}kg</li>
    <li class ="list-group-item" >Height: {{$animal->height}}cm</li>
    <li class ="list-group-item" >Dangerous: {{$animal->dangerous()}}</li> {{--Not displaying ture or false yet--}}
</ul>
<br>

<a href="/owners/{{$animal->owner->id}}/animals/{{$animal->id}}/edit" class="btn btn-primary">Edit {{$animal->name}}'s Details</a>
<br>
<br>

<h6> Owner: <a href="/owners/{{$animal->owner->id}}">{{$animal->owner->fullName()}} <a></h6>

@endsection