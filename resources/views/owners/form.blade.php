@extends("app")

@section("main")
    
    <form method="post" class="form card">
        @csrf

    @if($view === 'create')
        <h2 class="card-header">Create New Owner</h2>
    @elseif ($view === 'edit')
        <h2 class="card-header">Edit Owner</h2> 
    @endif

        <fieldset class="card-body">

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" 
                    class="form-control 
                    @error('first_name') is-invalid @enderror" 
                    value="{{ old('first_name') === null ? $owner->first_name ?? ''  : old('first_name') }}"
                />
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" 
                    class="form-control @error('last_name') is-invalid @enderror" 
                    value="{{ old('last_name') === null ? $owner->last_name ?? '': old('last_name') }}"
                />
                @error('last_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    value="{{ old('email') === null ? $owner->email ?? '' : old('email') }}"
                />
                @error('email')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input id="telephone" name="telephone" 
                    class="form-control @error('telephone') is-invalid @enderror" 
                    value="{{ old('telephone') === null ? $owner->telephone ?? '': old('telephone') }}"
                />
                @error('telephone')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="address_1">Address 1</label>
                <input id="address_1" name="address_1" 
                    class="form-control @error('address_1') is-invalid @enderror" 
                    value="{{ old('address_1') === null ? $owner->address_1 ?? '' : old('address_1') }}"
                />
                @error('address_1')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="address_2">Address 2</label>
                <input id="address_2" name="address_2" 
                    class="form-control @error('address_2') is-invalid @enderror" 
                    value="{{ old('address_2') === null ? $owner->address_2 ?? '' : old('address_2') }}"
                />
                @error('address_2')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="town">Town / City</label>
                <input id="town" name="town" 
                    class="form-control @error('town') is-invalid @enderror" 
                    value="{{ old('town') === null ? $owner->town ?? '' : old('town') }}"
                />
                @error('town')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
                
            </div>

            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input id="postcode" name="postcode" 
                    class="form-control @error('postcode') is-invalid @enderror" 
                    value="{{ old('postcode') === null ? $owner->postcode ?? '' : old('postcode') }}" 
                />
                @error('postcode')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

        </fieldset>

        <div class="card-footer text-right">

        @if($view === 'create')
            <button class="btn btn-success">Create</button>
        @elseif ($view === 'edit')
            <button class="btn btn-success">Edit</button>
        @endif
        
        </div>

    </form>
@endsection