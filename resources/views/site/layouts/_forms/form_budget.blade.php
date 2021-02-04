<form action="{{route('save_budgets')}}" method="post" class="search-property-1">
    @csrf
    <div class="row">
        <div class="col-lg-4">
            <label>Origin</label>
            <div class="form-field">
                <select name="origin_budgets" id="" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
                    @foreach($aeroports as $aeroport)
                    <option value="{{$aeroport}}" {{ old('origin_budgets', $aeroport ) === $aeroport ? '' : '' }}>{{$aeroport}}</option>
                    @endforeach
                </select>
                @if ($errors->has('origin_budgets'))
                <li class="error_budgets">{{ $errors->first('origin_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <label>Destination</label>
            <div class="form-field">
                <select name="destination_budgets" id="" class="form-control {{$errors->has('destination_budgets') ? 'border-error-budgets': ''}}">
                    @foreach($aeroports as $aeroport)
                    <option value="{{$aeroport}}" {{ old('destination_budgets', $aeroport ) === $aeroport ? '' : '' }}>{{$aeroport}}</option>
                    @endforeach
                </select>
                @if ($errors->has('destination_budgets'))
                <li class="error_budgets">{{ $errors->first('destination_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#">Check-in date</label>
            <div class="form-field">
                <input type="text" name="checkout_in_date_budgets" value="{{ old('checkout_in_date_budgets') }}" autofocus class="form-control checkout_date {{$errors->has('checkout_in_date_budgets') ? 'border-error-budgets': ''}}" placeholder="Check In">
                @if ($errors->has('checkout_in_date_budgets'))
                <li class="error_budgets">{{$errors->first('checkout_in_date_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#">Check-out date</label>
            <div class="form-field">
                <input type="text" name="checkout_out_date_budgets" value="{{ old('checkout_out_date_budgets') }}" autofocus class="form-control checkout_date {{$errors->has('checkout_out_date_budgets') ? 'border-error-budgets': ''}}" placeholder="Check Out {{$errors->has('name_budgets') ? 'border-error-budgets': ''}}">
                @if ($errors->has('checkout_out_date_budgets'))
                <li class="error_budgets">{{$errors->first('checkout_out_date_budgets')}}</li>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="name_budgets" value="{{ old('name_budgets') }}" autofocus class="form-control {{$errors->has('name_budgets') ? 'border-error-budgets': ''}}" placeholder="Name">
                @if ($errors->has('name_budgets'))
                <li class="error_budgets">{{$errors->first('name_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="phone_budgets" value="{{ old('phone_budgets') }}" autofocus class="form-control {{$errors->has('phone_budgets') ? 'border-error-budgets': ''}}" placeholder="Phone">
                @if ($errors->has('phone_budgets'))
                <li class="error_budgets">{{ $errors->first('phone_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="email_budgets" value="{{ old('email_budgets') }}" autofocus class="form-control {{$errors->has('email_budgets') ? 'border-error-budgets': ''}}" placeholder="E-mail">
                @if ($errors->has('email_budgets'))
                <li class="error_budgets">{{$errors->first('email_budgets')}}</li>
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
