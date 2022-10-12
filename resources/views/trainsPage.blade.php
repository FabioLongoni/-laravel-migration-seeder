<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
    @foreach ($trains as $train)
      <div> 
        <div>
          <h2>{{$train->company}}</h2>
          <h3>{{$train->departure_station}} - {{$train->arrival_station}}</h3>
          <p>Partenza alle ore : {{$train->departure_time}} Arrivo ore : {{$train->arrival_time}}</p>
          <p>N° {{$train->train_code}}</p>
        </div>
      </div>    
    @endforeach
  </div>
</body>
</html>