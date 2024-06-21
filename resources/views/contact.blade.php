<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
<form action="/contact" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="favorite_color">Favorite Color:</label>
    <select id="favorite_color" name="favorite_color">
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
    </select><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
