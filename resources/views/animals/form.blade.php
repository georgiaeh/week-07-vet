@extends("app")

@section("content")
    
    <form method="post" class="form card">
        @csrf

    @if($view === 'create')
        <h2 class="card-header">Create New Pet</h2>
    @elseif ($view === 'edit')
        <h2 class="card-header">Edit {{$animal->name}}</h2> 
    @endif

        <fieldset class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" 
                    class="form-control 
                    @error('name') is-invalid @enderror" 
                    value="{{ old('name') === null ? $animal->name ?? ''  : old('name') }}"
                />
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input id="dob" name="dob" 
                    class="form-control 
                    @error('dob') is-invalid @enderror" 
                    value="{{ old('dob') === null ? $animal->dob ?? ''  : old('dob') }}"
                />
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="species">Species</label>
                <input id="species" name="species" 
                    class="form-control 
                    @error('species') is-invalid @enderror" 
                    value="{{ old('species') === null ? $animal->species ?? ''  : old('species') }}"
                />
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="weight">Weight</label>
                <input id="weight" name="weight" 
                    class="form-control 
                    @error('weight') is-invalid @enderror" 
                    value="{{ old('weight') === null ? $animal->weight ?? ''  : old('weight') }}"
                />
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="height">Height</label>
                <input id="height" name="height" 
                    class="form-control 
                    @error('height') is-invalid @enderror" 
                    value="{{ old('height') === null ? $animal->height ?? ''  : old('height') }}"
                />
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="biteyness">Dangerous</label>
                <input id="biteyness" name="biteyness" 
                    class="form-control 
                    @error('biteyness') is-invalid @enderror" 
                    value="{{ old('biteyness') === null ? $animal->biteyness ?? ''  : old('biteyness') }}"
                />
                @error('first_name')
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