<form action="{{route('save_budgets')}}" method="post" class="search-property-1">
    @csrf
    <div class="row">
        <div class="col-lg-4">
            <label>Origin</label>
            <div class="form-field">
                <select name="origin_budgets" id="" class="form-control">
                    <option value="{{$aeroport->origin_budgets ?? '' }}">
                        @if(assert($aeroport->origin_budgets))
                        {{$aeroport->origin_budgets ?? 'Search Destination' }}
                        @endif
                    </option>
                    @foreach($aeroports as $aeroport)
                    <option value="{{$aeroport}}" {{ old('origin_budgets', $aeroport ) === $aeroport ? '' : '' }}>{{$aeroport}}</option>
                    @endforeach
                </select>
                @if ($errors->has('origin_budgets'))
                <li>{{ $errors->first('origin_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <label>Destination</label>
            <div class="form-field">
                <select name="destination_budgets" id="" class="form-control">
                    <option selected="selected" value="{{$aeroport->destination_budgets ?? '' }}">
                        @if(assert($aeroport->destination_budgets))
                        {{$aeroport->destination_budgets ?? 'Search Destination' }}
                        @endif
                    </option>
                    @foreach($aeroports as $aeroport)
                    <option value="{{$aeroport}}" {{ old('destination_budgets', $aeroport ) === $aeroport ? '' : '' }}>{{$aeroport}}</option>
                    @endforeach
                </select>
                @if ($errors->has('destination_budgets'))
                <li>{{ $errors->first('destination_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#">Check-out date</label>
            <div class="form-field">
                <input type="text" name="checkout_in_date_budgets" value="{{ old('checkout_in_date_budgets') }}" autofocus class="form-control checkout_date" placeholder="Check In">
                @if ($errors->has('checkout_in_date_budgets'))
                <li>{{$errors->first('checkout_in_date_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#">Check-out date</label>
            <div class="form-field">
                <input type="text" name="checkout_out_date_budgets" value="{{ old('checkout_out_date_budgets') }}" autofocus class="form-control checkout_date" placeholder="Check Out">
                @if ($errors->has('checkout_out_date_budgets'))
                <li>{{$errors->first('checkout_out_date_budgets')}}</li>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="name_budgets" value="{{ old('name_budgets') }}" autofocus class="form-control" placeholder="Name">
                @if ($errors->has('name_budgets'))
                <li>{{$errors->first('name_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="phone_budgets" value="{{ old('phone_budgets') }}" autofocus class="form-control" placeholder="Phone">
                @if ($errors->has('phone_budgets'))
                <li>{{ $errors->first('phone_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="email_budgets" value="{{ old('email_budgets') }}" autofocus class="form-control" placeholder="E-mail">
                @if ($errors->has('email_budgets'))
                <li>{{$errors->first('email_budgets')}}</li>
                @endif
            </div>
        </div>

        <div class="col-lg align-self-end">
            <div class="form-group">
                <div class="form-field">
                    <input type="submit" value="Submit" class="form-control btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>
