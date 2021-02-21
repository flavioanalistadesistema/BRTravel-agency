<form action="{{route('save_budgets')}}" method="post" class="search-property-1">
    @csrf
    <div class="row">
        <div class="col-lg-4 col-sm-4">
            <label></label>
            <div class="form-field">
                <select name="origin_budgets" id="origin_budgets" data-placeholder="Origin" class="autoCompleteAeroporte form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
                </select>
                @if ($errors->has('origin_budgets'))
                <li class="error_budgets">{{ $errors->first('origin_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <label></label>
            <div class="form-field">
                <select name="destination_budgets" id="destination_budgets" data-placeholder="Destination" class="autoCompleteAeroporte form-control {{$errors->has('destination_budgets') ? 'border-error-budgets': ''}}">
                </select>
                @if ($errors->has('destination_budgets'))
                <li class="error_budgets">{{ $errors->first('destination_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-field">
                <input type="text" name="checkout_in_date_budgets" placeholder="Check-in" value="{{ old('checkout_in_date_budgets') }}" autofocus class="form-control checkout_date {{$errors->has('checkout_in_date_budgets') ? 'border-error-budgets': ''}}">
                @if ($errors->has('checkout_in_date_budgets'))
                <li class="error_budgets">{{$errors->first('checkout_in_date_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-field">
                <input type="text" name="checkout_out_date_budgets" placeholder="Check-out" value="{{ old('checkout_out_date_budgets') }}" autofocus class="form-control checkout_date {{$errors->has('checkout_out_date_budgets') ? 'border-error-budgets': ''}}">
                @if ($errors->has('checkout_out_date_budgets'))
                <li class="error_budgets">{{$errors->first('checkout_out_date_budgets')}}</li>
                @endif
            </div>
        </div>
        <!-- <div class="col-lg-2">
            <label>Number Adults</label>
            <div class="form-field">
                <select name="number_adults" id="" class="form-control {{$errors->has('number_adults') ? 'border-error-budgets': ''}}">
                    <option value="" selected></option>
                    @foreach($numberAdults as $number)
                    <option value="{{$number}}" {{ old('origin_budgets', $number ) === $number ? '' : '' }}>{{$number}}</option>
                    @endforeach
                </select>
                @if ($errors->has('number_adults'))
                <li class="error_budgets">{{ $errors->first('number_adults') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label>Number Childres</label>
            <div class="form-field">
                <select name="number_childre" id="" class="form-control {{$errors->has('number_childre') ? '': ''}}">
                    <option value="" selected></option>
                    @foreach($numberChildres as $number)
                    <option value="{{$number}}" {{ old('origin_budgets', $number ) === $number ? '' : '' }}>{{$number}}</option>
                    @endforeach
                </select>
                @if ($errors->has('number_childre'))
                <li class="error_budgets">{{ $errors->first('number_childre') }}</li>
                @endif
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input class="form-control {{$errors->has('name_budgets') ? 'border-error-budgets': ''}}" placeholder="Name" type="text" name="name_budgets" value="{{ old('name_budgets') }}" id="name_budgets" minlength="5" maxlength="15" autofocus>
                @if ($errors->has('name_budgets'))
                <li class="error_budgets">{{$errors->first('name_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input class="form-control {{$errors->has('phone_budgets') ? 'border-error-budgets': ''}}" placeholder="Phone" type="text" name="phone_budgets" value="{{ old('phone_budgets') }}"  id="phone_budgets">
                @if ($errors->has('phone_budgets'))
                <li class="error_budgets">{{ $errors->first('phone_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <label for="#"></label>
            <div class="form-fiel">
                <input class="form-control {{$errors->has('email_budgets') ? 'border-error-budgets': ''}}" placeholder="E-mail" type="text" name="email_budgets" value="{{ old('email_budgets') }}" autofocus >
                @if ($errors->has('email_budgets'))
                <li class="error_budgets">{{$errors->first('email_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg align-self-end">
            <label for="#"></label>
            <div class="form-group">
                <div class="form-field">
                    <input type="submit" value="Submit" class="form-control btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>

@section('scripts')
<script type="text/javascript">
    $("#phone_budgets").mask("00000000009");
</script>

<script type="text/javascript">
    $('.autoCompleteAeroporte').select2({
        delay: 500,
        pageLoadErrorMessage: "Error Message...",
        formatNoMatches: function(term) {
            return "Nenhum resultado. Adicionar " + term + "?";
        },
        ajax: {
            url: '/autocomplete/show',
            dataType: 'json',
            delay: 250,
            errorLoading: function() {
                return 'Результат не может быть загружен.';
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.acronyms + ', ' + item.aeroport,
                            id: item.aeroport
                        }
                    })
                };
            },
            cache: true
        },
        "language": {
            "noResults": function() {
                return "No Results Found";
            },
            searching: function() {
                return 'Searching...';
            },
            errorLoading: function() {
                return 'Search';
            }
        }
    });
</script>
@show
