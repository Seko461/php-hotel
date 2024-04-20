<?php

 $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    //var_dump(isset($_GET['parking']));

    if (isset($_GET['parking'])) {
        $hotels = array_filter($hotels, fn($hotel) => $hotel['parking']);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f54afad4a3.js" crossorigin="anonymous"></script>
    <title>Hotels</title>
</head>
<body>

<main>
    <div class="container" >
        <div class="row my-3 g-3">
<form action="" method="get">
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="yes" name="parking" id="parking">
    <label class="form-check-label" for="parking">Parking</label>
</div>
<button class="btn btn-primary" type="submit">Search</button>
<button class="btn btn-secondary" type="reset">Reset</button>

</form>
</div>
</div>


<section>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($hotels as $index => $hotel) : ?>
  
  
  
    <tr>
        <th scope="row"><?= $index+1 ?></th>
        <td><?= $hotel['name'] ?></td>
        <td><?= $hotel['description'] ?></td>
        <td><?= $hotel['parking'] ? '<i class="fa-solid fa-square-parking"></i>' : '<i class="fa-solid fa-x"></i>'?> </td>
        <td><?= $hotel['vote'] ?></td>
    </tr>
    
    <?php endforeach; ?>
  </tbody>
</table>

</div>


</section>


</main>

</body>
</html>