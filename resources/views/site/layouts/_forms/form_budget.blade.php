<form action="{{route('save_budgets')}}" method="post" class="search-property-1">
    @csrf
    <div class="row">
        <div class="col-lg-4">
            <label>Origin</label>
            <div class="form-field">
                <select name="origin_budgets" id="" class="form-control">
                    @foreach($aeroports as $aeroport)
                    <option value="{{$aeroport}}">{{$aeroport}}</option>
                    @endforeach
                </select>
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
                    <option value="{{$aeroport}}">{{$aeroport}}</option>
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
                <input type="text" name="checkout_in_date_budgets" class="form-control checkout_date" placeholder="Check In">
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#">Check-out date</label>
            <div class="form-field">
                <input type="text" name="checkout_out_date_budgets" class="form-control checkout_date" placeholder="Check Out">
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
                <input type="text" name="phone_budgets" class="form-control" placeholder="Phone">
                @if ($errors->has('phone_budgets'))
                    <li>{{ $errors->first('phone_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="email_budgets" class="form-control" placeholder="E-mail">
            </div>
        </div>

        <div class="col-lg align-self-end">
            <div class="form-group">
                <div class="form-field">
                    <input type="submit" value="Search" class="form-control btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>
