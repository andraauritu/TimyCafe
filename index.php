<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Coffe Shop</title>

</head>

<body style="background-color: #b6ad90 ;">
    <center>
        <div>
            <nav style="background-color: #936639;">
                <a style="color: #c2c5aa;" href="coffeeshop.html">Home</a>
                <a style="color: #c2c5aa;" href="info.html">Info</a>
                <a style="color: #c2c5aa;" href="shop.html">Shop</a>
                <a style="color: #c2c5aa;" href="contact.html">Contact</a>
            </nav>
        </div>
    </center>
    <center>
        <h1>Order your perfect coffee:</h1>
    </center>
    <form action="form_script_database.php" method='POST'>
    <h3>Choose your preffered type of beans:</h3>
    <input type="radio" id="Arabica" name="bean" value="Arabica" checked>
    <label for="Arabica">Arabica</label>
    <br>
    <input type="radio" id="Robusta" name="bean" value="Robusta">
    <label for="Robusta">Robusta</label>
    <h3>Choose your preffered type of roasting:</h3>
    <input type="radio" id="Light" name="roast" value="Light" checked>
    <label for="Light">Light</label>
    <br>
    <input type="radio" id="Medium" name="roast" value="Medium">
    <label for="Medium">Medium</label>
    <br>
    <input type="radio" id="Dark" name="roast" value="Dark">
    <label for="Dark">Dark</label>
    <h3>Choose as many flavours as you want in your coffee (we don't recommend adding more than 3 though):</h3>
    <input type="checkbox" id="Vanilla" name="flavour[]" value="Vanilla" checked>
    <label for="Vanilla">Vanilla</label>
    <br>
    <input type="checkbox" id="Chocolate" name="flavour[]" value="Chocolate">
    <label for="Chocolate">Chocolate</label>
    <br>
    <input type="checkbox" id="Caramel" name="flavour[]" value="Caramel">
    <label for="Caramel">Caramel</label>
    <br>
    <input type="checkbox" id="Coconut" name="flavour[]" value="Coconut">
    <label for="Coconut">Coconut</label>
    <br>
    <input type="checkbox" id="Hazelnut" name="flavour[]" value="Hazelnut">
    <label for="Hazelnut">Hazelnut</label>
    <br>
    <h3>Choose the colour of the packaging:</h3>
    <input type="radio" id="Beige" name="colour" value="Beige" checked>
    <label for="Beige">Beige</label>
    <br>
    <input type="radio" id="Red" name="colour" value="Red">
    <label for="Red">Red</label>
    <br>
    <input type="radio" id="Green" name="colour" value="Green">
    <label for="Green">Green</label>
    <br>
    <input type="radio" id="Blue" name="colour" value="Blue">
    <label for="Blue">Blue</label>
    <br>
    <br>
    <label for="word">(Optional) Choose a word to be written on the package (maximum 10 characters):</label>

    <input type="text" id="word" name="word" required minlength="0" maxlength="10" size="10">

    <h3>Thank you! Now we only need your contact data and shipping adress:</h3>
        <label for="first_name">Your first name:</label>
        <br>
        <input type="text" id="first_name" name="first_name" required minlength="1" maxlength="10" size="10">
        <br>
        <label for="first_name">Your last name:</label>
        <br>
        <input type="text" id="last_name" name="last_name" required minlength="1" maxlength="10" size="10">
        <br>

        <label for="email">Enter your email:</label>
        <br>
        <input type="text" id="email" name="email" size="40">
        <br>
        <label for="address">Your address:</label>
        <br>
        <input type="text" id="address" name="address" required minlength="1" maxlength="100" size="100">
        <br><br>
        <input type="submit" value="Submit the data">
    </form>
</body>

</html>


