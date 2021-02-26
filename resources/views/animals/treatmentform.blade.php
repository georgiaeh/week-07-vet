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
                <label for="treatment">Treatment Name: </label>
                <br>
                <select class="custom-select mr-sm-2"  id="treatment" name="treatment">
                    <option value="Pecti-Cap">Pecti-Cap</option>
                    <option value="Zymox Ear Cleanser ">Zymox Ear Cleanser </option>
                    <option value="Veda-Sorb Bolus">Veda-Sorb Bolus</option>
                    <option value="Keto-Gel ">Keto-Gel </option>
                    <option value="QuickDerm Wound Ointment ">QuickDerm Wound Ointment </option>
                    <option value="Gener-Lyte"> Gener-Lyte   </option>
                    <option value="Good-boi shots"> Good-boi shots   </option>
                    <option value="Good-boi shots"> Tooth Cleaning</option>
                    <option value="Grooming"> Grooming  </option>
                    <option value="Belly Rubs"> Belly Rubs</option>
                    <option value="Ear Scratches"> Ear Scratches</option>
                    <option value="Hugs"> Hugs</option>
                    <option value="Tail Wiggler"> Tail Wiggler </option>
                  </select>
            </div> 
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Submit</button>
        </div>

    </form>
@endsection