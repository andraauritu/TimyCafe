<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Coffe Shop</title>

</head>

<body background="img9.jpg">
    <center>
        <div>
            <nav style="background-color: #550c18;">
                <br>
                <a style="font-size: 20px; color: #f8dada; font-family: Verdana, Geneva, Tahoma, sans-serif;"
                    href="coffeeshop.html"> Home</a>
                <a style="font-size: 20px; color: #f8dada; font-family: Verdana, Geneva, Tahoma, sans-serif;"
                    href="info.html"> Info&nbsp;</a>
                <a style="font-size: 20px; color: #f8dada; font-family: Verdana, Geneva, Tahoma, sans-serif;"
                    href="shop.html">Shop</a>
                <a style="font-size: 20px; color: #f8dada; font-family: Verdana, Geneva, Tahoma, sans-serif;"
                    href="contact.html">Contact</a>
                <br>
                <br>
            </nav>
        </div>
    </center>
    <center>
        <h1 style="color: #550c18; font-family: Consolas,Lucida Console,monospace;">ORDER YOUR PERFECT COFFEE:</h1>
    </center>
    <form action="form_script_database.php" method='POST'>
        <h3 style="color: #786452;font-family:Consolas,Lucida Console,monospace;">Choose your preffered type of beans:
        </h3>
        <input type="radio" id="Arabica" name="bean" value="Arabica" checked>
        <label for="Arabica" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Arabica</label>
        <br>
        <input type="radio" id="Robusta" name="bean" value="Robusta">
        <label for="Robusta" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Robusta</label>
        <h3 style="color: #786452;font-family:Consolas,Lucida Console,monospace;">Choose your preffered type of
            roasting:</h3>
        <input type="radio" id="Light" name="roast" value="Light" checked>
        <label for="Light" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Light</label>
        <br>
        <input type="radio" id="Medium" name="roast" value="Medium">
        <label for="Medium" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Medium</label>
        <br>
        <input type="radio" id="Dark" name="roast" value="Dark">
        <label for="Dark" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Dark</label>
        <h3 style="color: #786452;font-family:Consolas,Lucida Console,monospace;">Choose as many flavours as you want in
            your coffee (we don't recommend adding more than 3 though):</h3>
        <input type="checkbox" id="Vanilla" name="flavour[]" value="Vanilla" checked>
        <label for="Vanilla" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Vanilla</label>
        <br>
        <input type="checkbox" id="Chocolate" name="flavour[]" value="Chocolate">
        <label for="Chocolate"
            style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Chocolate</label>
        <br>
        <input type="checkbox" id="Caramel" name="flavour[]" value="Caramel">
        <label for="Caramel" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Caramel</label>
        <br>
        <input type="checkbox" id="Coconut" name="flavour[]" value="Coconut">
        <label for="Coconut" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Coconut</label>
        <br>
        <input type="checkbox" id="Hazelnut" name="flavour[]" value="Hazelnut">
        <label for="Hazelnut" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Hazelnut</label>
        <br>
        <input type="checkbox" id="Mint" name="flavour[]" value="Mint">
        <label for="Mint" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Mint</label>
        <br>
        <input type="checkbox" id="Cinnamon" name="flavour[]" value="Cinnamon">
        <label for="Cinnamon" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Cinnamon</label>
        <br>
        <input type="checkbox" id="Gingerbread" name="flavour[]" value="Gingerbread">
        <label for="Gingerbread"
            style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Gingerbread</label>
        <br>
        <h3 style="color: #786452;font-family:Consolas,Lucida Console,monospace;">Choose the colour of the packaging:
        </h3>
        <select name="colour">
            <option value="Choose colour">--choose--</option>
            <option value="Beige">Beige</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
            <option value="Pink">Pink</option>
            <option value="Purple">Purple</option>
        </select>

        <!-- <input type="radio" id="Beige" name="colour" value="Beige" checked>
        <label for="Beige">Beige</label>
        <br>
        <input type="radio" id="Red" name="colour" value="Red">
        <label for="Red">Red</label>
        <br>
        <input type="radio" id="Green" name="colour" value="Green">
        <label for="Green">Green</label>
        <br>
        <input type="radio" id="Blue" name="colour" value="Blue">
        <label for="Blue">Blue</label> -->
        <br>
        <br>
        <label for="word" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">(Optional) Choose a
            word to be written on the package (maximum 10 characters):</label>

        <input type="text" id="word" name="word" minlength="0" maxlength="10" size="10">

        <h3 style="color: #786452;font-family:Consolas,Lucida Console,monospace;">Thank you! Now we only need your
            contact data and shipping adress:</h3>
        <label for="first_name" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Your first
            name:</label>
        <br>
        <input type="text" id="first_name" name="first_name" required minlength="1" maxlength="10" size="10">
        <br>
        <label for="first_name" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Your last
            name:</label>
        <br>
        <input type="text" id="last_name" name="last_name" required minlength="1" maxlength="10" size="10">
        <br>

        <label for="email" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Enter your
            email:</label>
        <br>
        <input type="text" id="email" name="email" size="40">
        <br>
        <label for="address" style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">Your
            address:</label>
        <br>
        <input type="text" id="address" name="address" required minlength="1" maxlength="100" size="100">
        <br><br>
        <input type="submit" value="Submit the data"
            style="color: #443730; font-family: Verdana, Geneva, Tahoma, sans-serif;">
    </form>
</body>

</html>

