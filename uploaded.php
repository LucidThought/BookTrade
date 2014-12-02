<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
A page used to show if an upload was successful
-->
<html>
    <head>
        <title>The Book Lender</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, th, td 
            {
                border-collapse: collapse;
            }
            th, td
            {
                padding-right:  300px
            }
        </style>
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div style="background-color: lightgreen; color: black; margin:30px; padding:20px;">
                <form style=" text-align: center">
                <h1> Upload Successful!</h1>
                </form>
            </div>
            
            <h2> Username </h2>
            
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
            <table width="100%">
                <tr>
                    <td width="25%" align="center">
                        <form method="link" action="upload.php">
                           <input type="submit" value="Upload">
                       </form>
                    </td>
                    <td width="25%" align="center">
                        <form method="link" action="remove.php">
                            <input type="submit" value="Remove Books">
                        </form>
                    </td>

                    <td width="25%" align="center">
                        <form method="link" action="browse.php">
                           <input type="submit" value="Browse">
                        </form>
                    </td>

                     <td width="25%" align="center">
                        <form method="link" action="inbox.php">
                            <input type="submit" value="messages">
                         </form>
                    </td>
                </tr>
            </table>
            </div>
            
          <table>
              <tr>
                  <td> <a href="bookPage.php" target="_self">book jpeg </a></td>
              </tr>
              <tr>
                  <td> <a href="bookPage.php" target="_self">book title </a></td>
              </tr>
          </table>
        </div>
    </body>
</html>

