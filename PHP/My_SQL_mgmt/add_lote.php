<?php
   	include "../../../../../connect.php";
   	
   	$link=db_Connection();

	 /*
   Place Variables to insert in DB here.
   Variables should have this format:
   $variable = _POST["http_post_variable"];
   */

    $variable = _POST["http_post_variable"];

	  $peticion="INSERT INTO tbl_lote VALUES ($variable)";
    /*
    As arguments, variables hsould be inserted as follows:
    for string variables => $variable
    for number values => '".$variable."'
    NULL values should be inserted as NULL
    */
    $link->query($peticion);

   	$link->close();

   	header("<your_location>");

    /*
      Location: ../your_redirection_page
    */
?>


