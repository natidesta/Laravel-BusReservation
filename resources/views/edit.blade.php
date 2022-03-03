<div class="container" >
    <div class="row">
        <div class="col-md-md-offset-4" style="margin-top:20px;">
            <h4>update Trips</h4>
            <hr>

            <form action="/edit" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <input type="hidden" name="id" value="{{$data['id']}}">
                <div class="form-group">
                    <label for="busid">Bus id</label>
                    <input type="text" class="form-control" placeholder="Enter bus id" 
                    name="bus_id" value="{{$data['bus_id']}}">
                    <span class="text-danger">@error('bus_id'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="departurecity">Departure City</label>
                    <input type="text" class="form-control" placeholder="Enter Departure City" 
                    name="departure_city" value="{{$data['departure_city']}}">
                    <span class="text-danger">@error('departure_city'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="destinationcity">Destination City</label>
                    <input type="text" class="form-control" placeholder="Enter Destination City" 
                    name="destination_city" value="{{$data['destination_city']}}">
                    <span class="text-danger">@error('destination_city'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" placeholder="Enter Price" 
                    name="price" value="{{$data['price']}}">
                    <span class="text-danger">@error('price'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" placeholder="Enter date" 
                    name="date" value="{{$data['date']}}">
                    <span class="text-danger">@error('date'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="availableseat">Available Seats</label>
                    <input type="text" class="form-control" placeholder="Enter seats" 
                    name="available_seats" value="{{$data['available_seats']}}">
                    <span class="text-danger">@error('available_seat'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="arrivaltime">Arrival Time</label>
                    <input type="time" class="form-control" placeholder="Enter arrival time" 
                    name="arrival_time" value="{{$data['arrival_time']}}">
                    <span class="text-danger">@error('arrival_time'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Update</button>
                </div>
                <br>
            </form>
            </div>
        </div>
    </div>
</div>