<h2> Owners </h2>
    
@foreach (App\Models\Owner::all() as $owner)

<h6> {{$owner->fullName()}} </h6>
 <ul class="list-group">   
    <li class ="list-group-item"> {{$owner->email}} </li>
    <li class ="list-group-item"> {{$owner->formattedPhoneNumber()}} </li>
    <li class ="list-group-item"> {{$owner->fullAddress()}} </li>
</ul>
<br>
@endforeach