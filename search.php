<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Home</title>
    <link rel="stylesheet" href="search.css">

</head>
<body>









<?php


// Your database connection settings
$servername = "localhost";
$username = "root";
$password = "password";
$database = "event";





// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data and count rows


$sql1 = "SELECT * FROM seller WHERE type = 'Catering'";
$sql2 = "SELECT * FROM seller WHERE type = 'Music'";
$sql3 = "SELECT * FROM seller WHERE type = 'Decorations'";


$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

if ($result1->num_rows > 0) {
    $number = $result1->num_rows;
}

$n = 0;
$cont = array();

while($n <= $number){

    $row = $result1->fetch_assoc();

        session_start();

    if ($row) { // Check if $row is not null

        $_SESSION['cont'][$n] = $row;
        //echo $row["firstname"];
        //echo $row["lastname"];
        $n++;
    } else {
        break; // Exit the loop if there are no more rows
    }
}
    $_SESSION['a'] = $n;



    

    //echo '<script>window.location.href = "searched.html";</script>';


// Close the database connection








if ($result2->num_rows > 0) {
    $number = $result2->num_rows;
}

$n = 0;
$cont = array();

while($n <= $number){

    $row = $result2->fetch_assoc();

        session_start();

    if ($row) { // Check if $row is not null

        $_SESSION['cont'][$n] = $row;
        //echo $row["firstname"];
        //echo $row["lastname"];
        $n++;
    } else {
        break; // Exit the loop if there are no more rows
    }
}
    $_SESSION['b'] = $n;























if ($result3->num_rows > 0) {
    $number = $result3->num_rows;
}

$n = 0;
$cont = array();

while($n <= $number){

    $row = $result3->fetch_assoc();

        session_start();

    if ($row) { // Check if $row is not null

        $_SESSION['cont'][$n] = $row;
        //echo $row["firstname"];
        //echo $row["lastname"];
        $n++;
    } else {
        break; // Exit the loop if there are no more rows
    }
}
    $_SESSION['m'] = $n;


$conn->close();

?>
    






















    <img src="bag.jpg" style="position: absolute; opacity: 75%;">

    <div class="navbar">
        <div class="icon">
            <a href="index.html"><h2 class="logo">LOGO</h2></a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>

        

    </div> 

    <div class="container">

        <div class="mainer">

          <div class="col-md-8">

            <div class="search">
              <i class="fa fa-search"></i>
              <form action="retriev.php" method="post">
              <input type="text" class="form-control" placeholder="Whatya waitin for? " name="search">
              <button class="search" id="search" type="submit">Search</button>




           









              </form>
            </div>
            
          </div>
          
        </div>
    </div>



    <div class="event_organisers">Event Decorators</div>

    <div class="parent">
        

<div class="1">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    
                    <p class="title">FLIP CARD</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>
    </div>

    <div class="2">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">FLIP CARD</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>

    </div>

    <div class="3">

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">FLIP CARD</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>
    </div>
    <div class="4">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">FLIP CARD</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>
    </div>
    <div class="5">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">FLIP CARD</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>
    </div>

    </div>




    <div class="event_organisers">Catering & Refreshment</div>

    <div class="parent">


        <div class="1">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
    
        </div>
    
        <div class="3">
    
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>

    </div> 




<div class="event_organisers">Music & Dj Team</div>
    <div class="parent">

        <div class="1">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
    
        </div>
    
        <div class="3">
    
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">FLIP CARD</p>
                        <p>Hover Me</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BACK</p>
                        <p>Leave Me</p>
                    </div>
                </div>
            </div>
        </div>

    </div> 

</body>
</html>
