<?php

require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/Enrollment/GetEnrolledStudentEmail.php");
require_once("../../Controllers/GetDetails/GetEnrollmentDetails.php");

$ed = new GetEnrollmentDetails();
$details = $ed->getEnrolledStudentEmailList($_REQUEST['course_id']);
if($_REQUEST['course_id'] && $details != null) {

foreach ($details as $name) {

    echo "<tr>
            <th class='px-3' align='center'>"  . $name->getStudentId() .
         "</th>";
    echo "<th class='px-3' align='center'>"  . $name->getFullName()  .
        "</th>";
    echo "<th class='px-3' align='center'>"  . $name->getEmail()  .
        "</th></tr>";

    }
}
else{
    echo "<tr>
            <th class='px-3' align='center'>
    </th></tr>";
}

?>