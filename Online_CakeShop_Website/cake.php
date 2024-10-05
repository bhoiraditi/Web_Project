<html>
    <head>
    <title>
        ORDER YOUR CAKE!!
    </title>
    
    <link rel="stylesheet" href="http://localhost/web/cake2.css">
    
    <style>
        html{
            background:linear-gradient(rgba(214,155,155,0.5),rgba(0,0,0,0.5)),url("background.png");
            background-position: center;
            background-size: cover;
            color: #fff;
            text-align: center;
        }
        
        h1{
            font-family: sans-serif;
            text-align: center;
            color: limegreen;
            margin-top: auto;
            text-decoration= none;
            font-size: 5rem;
            font-weight: 500;
            color: #fff;
            padding=.5rem 0;
            letter-specing:.2rem;
            text-shadow: .2rem .2rem #fa4975;
        }
        .div11{
            font-size= 5rem;
        }
        div{
            color: #fff;
            font-size: 2rem;
            align-items: center;
            margin: 1rem;
            float:center;
            margin-top:2rem
        }
        .div1{
            background-color: #fa4975;
            font-size: 2rem;
            width: 10%;
            padding:.1rem;
            margin : 10rem;
            border-radius= 4px;
            float:right;
            flex-flow: wrap;
            margin-left: 40rem;
        }
        .div2{
            background-color: #fa4975;
            font-size: 2rem;
            width: 10%;
            padding:.1rem;
            margin: 10rem;
            border-radius= 4px;
            float:left;
            flex-flow: wrap;
            margin-right: .10rem;

        }
        .div3{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }
        .div4{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }
        .div5{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }
        .div6{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }
        .div7{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }
        .div8{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }
        .div9{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }
        .div10{
            color: #000;
            width: 20%;
            padding:.5rem;
            font-size: 1.5rem;
        }

        
    </style>
</head>
    <body>
        <form method="POST">
            
               
                    <h1>ORDER YOUR CAKE!!!</h1>
           
           
            <div class="div11">Name:<input type="text" name="name" id="name" placeholder="name"class="div3">
            </div>
            <br>
            <div>Address:<input type="text" name="address" id="address" placeholder="address" class="div4">
</div>
<br>
          <div>Phone:<input type="text" name="phone" id="phone" placeholder="phone"class="div5" maxlength="10" onkeypress="return event.charCode=>48
          && event.charCode<=57">
</div>
<br>
            <div>Email:<input type="text" name="email" id="email" placeholder="email"class="div6">
</div>
<br>
            <div>Date:<input type="date" name="date" id="date"class="div7">
</div>
<br>
            <div>Time:<input type="time" name="time" id="username"class="div8">
</div>
<br>
            <div>Cake Flavour:<input type="text" name="flavour" id="cake flavour" placeholder="cake flavour"class="div9">
        </div>
<br>
            <div>kg:<input type="text" name="kg" id="kg" placeholder="kg"class="div10">

</div>

<br>
            
            <div><input type="Submit" name="sb" class="div2"></div>
            <div onclick="http://localhost/web/cake.html'">
            <button type="button" class="div1" onclick="http://localhost/web/cake.html'">Cancel</button></div>
             
</from>   
  
</body>
</html>


<?php
$con=mysqli_connect('localhost','root','','cake');
if(isset($_POST['sb']))
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $flavour = $_POST['flavour'];
    $kg = $_POST['kg'];
    $query="INSERT INTO cake (`name`, `address`, `phone`, `email`, `date`, `time`, `flavour`, `kg`) VALUES ('$name', '$address', '$phone', '$email', '$date','$time', '$flavour', '$kg');";
    $run=mysqli_query($con,$query);
}
?>