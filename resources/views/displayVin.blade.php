<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
<title>VinSearch</title>
</head>
<body>
<form action="{{url('/vinsearch')}}" method="GET">

    {{csrf_field()}}
	VIN: <input type="text" name="query" />
	     
         <button style ="background-color:grey"> Search </button>

</form>

     <br>
     <br>
     @if(isset($results))
     
        @foreach($results as $result)
              <h4>VIN number searched is : {{$result->vin}}<br></h4>
              
              <table border-spacing: 15px;>
               <thead>
                 <tr>
                 <th scope="col">ID</th>
                  <th scope="col">VIN</th>
                  <th scope="col">STOCK</th>
                  <th scope="col">YEAR</th>
                  <th scope="col">MAKE</th>
                  <th scope="col">MODEL</th>
                  </tr>
               </thead>
               <tbody>
               <td> {{$result->used_dealer_vehicle_live_id}}  </td>
               <td> {{$result->vin}}  </td>
                <td>{{$result->stock}} </td>
                <td>{{$result->year}} </td>
                <td>{{$result->make}} </td>
                <td>{{$result->model}} </td>
               </tbody>
            

        @endforeach
     
     @endif
</body>
</html>