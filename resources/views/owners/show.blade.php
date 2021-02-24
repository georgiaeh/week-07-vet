@extends("app")

@section("content")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
    </div>
    <br>
    <h5> {{$owner->fullName()}} </h5>
    <ul class="list-group">   
        <li class ="list-group-item"> {{$owner->email}} </li>
        <li class ="list-group-item"> {{$owner->formattedPhoneNumber()}} </li>
        <li class ="list-group-item"> {{$owner->fullAddress()}} </li>
    </ul>
    <br>
    <a href="/owners/{{$owner->id}}/edit" class="btn btn-primary">Edit Owner Details </a>
    <br>
    <br>

    <h5>Animals Registered to {{$owner->fullName()}}</h5>
   
    <ul class="list-group">
    @if(count($owner->animals) > 1)
        @foreach ($owner->animals as $animal)
         <li class ="list-group-item"> <a href="{{$owner->id}}/animals/{{$animal->id}}"> {{$animal->name}}, {{$animal->species}} </a> </li>
        @endforeach
    @else 
        <p> No records found</p>
    @endif
    </ul>

    <br>
    <a href="/owners/{{$owner->id}}/animals/create" class="btn btn-primary">Create New Pet </a>
   
@endsection

@section("title")
    {{$owner->fullName()}}
@endsection
