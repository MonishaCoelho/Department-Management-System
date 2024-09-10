<?php
    include('dbCon.php');
    require_once 'admin_session.php';

    if (isset($_GET['id']))
    {
	$usn=$_GET['id'];
	try
	{
	    mysqli_query($conn, "DELETE FROM `student` WHERE usn='$usn'");
	    Print '<script>alert("Record deleted successfully.");</script>';
            Print '<script>window.location.assign("display_student.php");</script>';
	}
	catch (mysqli_sql_exception $e)
	{
	    $error=$e->getMessage();
	    $message="Failed to delete. Error: ".$error;
	    Print "<script>alert('$message');</script>";
            Print '<script>window.location.assign("display_student.php");</script>';
	}
    }

    if (isset($_GET['fid']))
    {
	$fid=$_GET['fid'];
	try
	{
	    mysqli_query($conn, "DELETE FROM `faculty` WHERE fid='$fid'");
	    Print '<script>alert("Record deleted successfully.");</script>';
            Print '<script>window.location.assign("display_faculty.php");</script>';
	}
	catch (mysqli_sql_exception $e)
	{
	    $error=$e->getMessage();
	    $message="Failed to delete. Error: ".$error;
	    Print "<script>alert('$message');</script>";
            Print '<script>window.location.assign("display_faculty.php");</script>';
	}
    }

?>