<?php
// there is a BUG;
declare( strict_types = 1);

require_once "university.php";
require_once "teacher.php";

$university = new University("Boston University ", "Europe ", "abc123");
$university1 = new University("Stanford University ", "England ", "def456");

$teacher = new Teacher ("John ", 43, " maths ", $university);
$teacher1 = new Teacher("pet ", 34, " english ", $university1);

$teacher->printTeacherDetails();
$teacher->printUniversityDetails();
echo "______________________________" . PHP_EOL;
$teacher1->printTeacherDetails();
$teacher1->printUniversityDetails();

?>