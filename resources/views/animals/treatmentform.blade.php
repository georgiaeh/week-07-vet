@extends("app")

@section("content")
    
    <form method="post" class="form card">
        @csrf

        <fieldset class="card-body">

            <div class="form-group">
                <label for="date_given">Date</label>
                <input id="date_given" name="date_given" 
                    class="form-control 
                    @error('date_given') is-invalid @enderror" 
                    value = {{Carbon\Carbon::today()->format('Y-m-d')}}
                />
                @error('date_given')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="treatment">Treatment Name</label>
                <input id="treatment" name="treatment" 
                    class="form-control 
                    @error('treatment') is-invalid @enderror" 
                    {{-- value="{{ old('name') === null ? $animal->name ?? ''  : old('name') }}" --}}
                />
                @error('treatment')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Submit</button>
        </div>

    </form>
@endsection