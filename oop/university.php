<?php
//SEE INHERITANCE BUG
class University{
    
    public $universityName;
    public $universityAddress;
    public $licenseNo;

    function __consturct($universityName, $universityAddress, $licenseNo){

        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->licenseNo = $licenseNo;
    }

    function printUniversityDetails(){
        echo "university Name: $this->universityName" . PHP_EOL;
        echo "university address: $this->universityAddress" . PHP_EOL;
        echo "licenseNo : $this->licenseNo" . PHP_EOL;
    }

}

?>