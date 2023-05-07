<?php
// there is a bug here 17and18 SEE INHERITANCE BUG;
class Teacher extends University{

    public $teacherName;
    public $teacherAge;
    public $subject;

    function __construct($teacherName, $teacherAge, $subject, University $university)
{

    $this->teacherName = $teacherName;
    $this->teacherAge = $teacherAge;
    $this->subject = $subject;

    $this->universityName = $university->$universityName;
    $this->universityAddress = $university->$universityAddress;
    $this->licenseNo = $university->$licenseNo;
}

function printTeacherDetails(){
    echo "Teacher Name: $this->teacherName";
    echo "Teacher Age: $this->teacherAge";
    echo "Subject : $this->subject";

}
}

?>