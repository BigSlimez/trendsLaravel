<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/koop-tickets-style.css">
    <title>Tickets</title>
</head>

<body>
<header>
    <nav class="top-nav" id="top-nav">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="{{route('index')}}">Home</a></li>

        </ul>
    </nav>
</header>
<div class="wrapper mt-5">

    <form id="formOrder" action="" method="post">
        <h2 id="under-headline">Gegevens</h2>
        <label for="voornaam">Voornaam:</label><br>
        <input type="text" id="voornaam" name="voornaam"><br>
        <label for="naam"> Naam:</label><br>
        <input type="text" id="naam" name="naam"><br>
        <label for="email"> Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="leeftijd"> Geboortedatum:</label><br>
        <input type="date" id="leeftijd" name="leeftijd"><br>


        <h2 id="under-headline">Ticket</h2>

        <input type="radio" id="dag1" name="ticket" value="dag1">
        <label for="dag1">Dag 1</label><br>
        <input type="radio" id="dag2" name="ticket" value="dag2">
        <label for="css">Dag 2</label><br>
        <input type="radio" id="combi" name="ticket" value="combi">
        <label for="combi">Combi</label><br>


        <h2 id="under-headline">Bonnetjes</h2>
        <label for="bonnetjes">Bonnetjes:</label><br>
        <input type="number" id="bonnetjes" name="bonnetjes"><br>

        <input type="submit" value="Submit">
    </form>

</div>


<script src="../assets/tickets.js"></script>
</body>

</html>
