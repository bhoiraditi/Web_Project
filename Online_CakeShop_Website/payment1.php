<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width-device-width,initial-scalle=1.0">
        <title>Payment Process</title>
        <link rel="stylesheet" href="payment1.css">
    </head>
    <body>
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="column">
                        <h3 class="title">Billing Address</h3>
                        <div class="input-box">
                            <span>Full Name :</span>
                            <input type="text"
                            placeholder="Jacob Aiden">
                        </div>
                        <div class="input-box">
                            <span>Email :</span>
                            <input type="email"
                            placeholder="example@example.com">
                        </div>
                        <div class="input-box">
                            <span>Address :</span>
                            <input type="text"
                            placeholder="Room - street -Locality">
                        </div>
                        <div class="input-box">
                            <span>City :</span>
                            <input type="text"
                            placeholder="Palghar">
                        </div>
                        <div class="flex">
                            <div class="input-box">
                                <span>State :</span>
                                <input type="text"
                                placeholder="Maharastra">
                            </div>
                            <div class="input-box">
                                <span>Zip Code :</span>
                                <input type="text"
                                placeholder="123 456">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title">Pyament</h3>
                        <div class="input-box">
                            <span>Cards Accepted :</span>
                            <img src="bank.jpg" alt="">
                        </div>
                        <div class="input-box">
                            <span>Name On Card :</span>
                            <input type="text"
                            placeholder="mr jacob Aiden">
                        </div>
                        <div class="input-box">
                            <span>Credit Card number :</span>
                            <input type="text"
                            placeholder="1111 2222 3333 4444">
                        </div>
                        <div class="input-box">
                            <span>Exp. Month :</span>
                            <input type="text"
                            placeholder="August">
                        </div>
                        <div class="flex">
                            <div class="input-box">
                                <span>Exp. year :</span>
                                <input type="text"
                                placeholder="2026">
                            </div>
                            <div class="input-box">
                                <span>CVV :</span>
                                <input type="text"
                                placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>


<?php
$con=mysqli_connect('localhost','root','','cake');
if(isset($_POST['sb']))
{
    $FullName = $_POST['Full Name'];
    $Email = $_POST['Email'];
    $Adsress = $_POST['Address'];
    $City= $_POST['City'];
    $State = $_POST['State'];
    $ZipCode= $_POST['Zip Code'];
    $CardOnName = $_POST['Card On Name'];
    $ExpMonth = $_POST['Exp. Month'];
    $ExpYear = $_POST['Exp. Year'];
    $CVV = $_POST['CVV'];
    $query="INSERT INTO payment (`Full Name`, `Email`, `Address`, `City`, `State`, `Zip Code`, `Card On Name`, `Exp. Month`,'Exp. Year','CVV') VALUES ('$FullName', '$Email', '$Address', '$City', '$State','$ZipCode', '$CardOnName', '$ExMonth','$ExpYear','$CVV')";
    $run=mysqli_query($con,$query);
}
?>