<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is another search page
-->
<html>
    <head>
        <title>The Book Lender | Available Books</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userPage.php"> [return to user page]</a> <a href="logout.php">[log out]</a>
        </div>
    </head>
    

    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div>
                <h1>Search </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p></p>
                </div>
                <form method="post" action="browse2.php">
                    <p><input type="search" name="search" placeholder="search">
                    <input type="submit" value="submit" name="Search"></p>
                </form>
                <?php include("search.php") ?>
            </div>
        </div>
    </body>
</html>