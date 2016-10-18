<?php
        //Connection Parameters 
            $host = 'localhost';
           
            $db = 'HobbyHuset';
            
            // Get user input
            $user = $_POST['user'];
            $pass = $_POST['password'];
            
            //Check if user has actually written something
            if (empty($_POST['user']) || empty($_POST['password'])){
                print('<p>No user input</p>');
            }
            
            /* Connect to database */
            $conn = sqlsrv_connect( $host, $user, $pass, $db);
            if( !$link) {
                exit('Error: No contact with server');
            }
            sqlsrvr_set_charset($link, 'utf8');

            // Build sql query
            $sql = "SELECT * FROM routes";  //Get all info from routes
            //TODO IMPLEMENT ABILITY TO ORDER
            
            // Send sql query to database for execution
            $result = sqlsrv_query($link,$sql);
            
            // prints new HTML page from sql query
            print('<table border="1">');
            $rad = sqlsrv_fetch_assoc($result);
            while ($rad)    {
                /*TODO INSERT WHICH PARTS OF ROUTE TO RETRIEVE*/
                /*RETURN VALUES AS A TABLE*/
                /*TODO INSERT SOME MORE STUFF ALEXANDER WANTS*/
            }
            print('</table>')
            
            /*TODO CLOSE THE CONNECTION*/
        ?>