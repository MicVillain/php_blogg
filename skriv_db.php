<!doctype html>
<html lang="sv">
<head>
      <meta charset="utf-8">
       <title>skriva blogginlägg</title>
       <link rel="stylesheet" herf="style.css">
    </head>
    <body>
        <h2>registerar inlägg</h2>
        <form action="spara_db.php" method="post">
            <label>Rubrik</label><input type="text" maxlenght="100" name="rubrik">
            <label>text</label><textarea name="inlagg"></textarea>
            <input type="submit" value="spara">

        </form>
    </body>
</html>
