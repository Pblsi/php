<?php

interface Database{

    //Establish the connection with the Database
function openConnection();

}

class OracleDatabase implements Database{

function openConnection(){
echo "using the oracle driver to establish the connection";
}
}

class MySQLDatabase implements Database{

    function openConnection(){
        echo "Using the MySQL Driver to establish the connection";
    }
}

?>