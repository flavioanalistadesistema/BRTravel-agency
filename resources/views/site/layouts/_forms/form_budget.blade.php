<form action="" method="post" class="search-property-1">
    <div class="row">
        <div class="col-lg-4">
            <label>Origin</label>
            <div class="form-field">
                <select name="origin" id="" class="form-control">
                    @foreach($aeroports as $aeroport)
                    <option value="">{{$aeroport}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <label>Destination</label>
            <div class="form-field">
                <select name="destination" id="" class="form-control">
                    @foreach($aeroports as $aeroport)
                    <option value="">{{$aeroport}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#">Check-out date</label>
            <div class="form-field">
                <input type="text" name="checkout_in_date" class="form-control checkout_date" placeholder="Check In">
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#">Check-out date</label>
            <div class="form-field">
                <input type="text" name="check_out_date" class="form-control checkout_date" placeholder="Check Out">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
        </div>
        <div class="col-lg-4">
            <label for="#"></label>
            <div class="form-fiel">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
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
