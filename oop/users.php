<?php
// USECASE OF A USERS CLASS
class Users{

    function fetchUser($id): bool{

        $result = false;
        echo "Query for the database" . PHP_EOL;
        $result = true;
        echo "Display the records" . PHP_EOL;

        return $result;
    }

    function deleteUser($id){

        echo "Deleting the records" . PHP_EOL;
        
    }

}
$User1 = new Users();
$User1->fetchUser(101);
$User1->fetchUser(102);
$User1->fetchUser(103);

?>