<div class="container">
    <h2>Reservation</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">fullname</th>
        <th scope="col">Bus id</th>
        <th scope="col">Departure</th>
        <th scope="col">Destination</th>
        <th scope="col">price</th>
        <th scope="col">date</th>
        <th scope="col">available seats</th>
        <th scope="col">arrival time</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($data as $dataElement)
      <tr>
        
        <td>{{$dataElement['Fullname']}}</td>
        <td>{{$dataElement['bus_id']}}</td>
        <td>{{$dataElement['destination_city']}}</td>
        <td>{{$dataElement->price}}</td>
        <td>{{$dataElement['date']}}</td>
        <td>{{$dataElement['available_seats']}}</td>
        <td>{{$dataElement['arrival_time']}}</td>
        </tr>
      @endforeach      
    </tbody>
  </table>

    </div>