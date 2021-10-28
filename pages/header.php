<?php
include('dbcon.php');
include('../addtenant.php');
include('session.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Tenant Directory Management System</title>

	<!-- Bootstrap Core CSS -->
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- DataTables CSS -->
	<link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
	<link href="../css/bootstrap-datepicker.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="img/logo5.png" >

    <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="lib/jquery.js" type="text/javascript"></script>
    <script src="src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox({
                loadingImage : 'src/loading.gif',
                closeImage   : 'src/closelabel.png'
            })
        })
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->


        <style>
            /*img{
                max-width: 100%;
                max-height: 100%;
            }
            */
            .custom-input {
                width: 45%;
                height: 26px;
                border: 1px solid;
                outline-width: transparent !important;
                border-top: none;
                border-right: none;
                border-left: none;
                outline: none;
            }
            
            .custom-input1 {
                width: 23%;
                height: 26px;
                border: 1px solid;
                outline-width: transparent !important;
                border-top: none;
                border-right: none;
                border-left: none;
                outline: none;
            }
            .custom-input2 {
                width: 20%;
                height: 26px;
                border: 1px solid;
                outline-width: transparent !important;
                border-top: none;
                border-right: none;
                border-left: none;
                outline: none;
            }
            .custom-input3 {
                width: 43%;
                height: 26px;
                border: 1px solid;
                outline-width: transparent !important;
                border-top: none;
                border-right: none;
                border-left: none;
                outline: none;
            }
            .custom-input4 {
                width: 25%;
                height: 26px;
                border: 1px solid;
                outline-width: transparent !important;
                border-top: none;
                border-right: none;
                border-left: none;
                outline: none;
            }
            .custom-input5 {
                width: 25%;
                height: 26px;
                border: 1px solid;
                outline-width: transparent !important;
                border-top: none;
                border-right: none;
                border-left: none;
                border-bottom: none;
                outline: none;
            }
            @media screen {
              #printSection {
                  display: none;
              }
              .headerdisplay{
                display: none;
            }
        }

        @media print {
            body * {
                visibility:hidden;
            }
            #printSection, #printSection * {
                visibility:visible;
            }
            #printSection {
                position:absolute;
                left:0;
                top:0;
            }
            .modal-body * {
                visibility: visible; 
            }
            .modal-body{ 
                position: absolute; 
                top: 0; 
                left: 0;
            }
            .modal-footer{
                visibility: hidden;
            }
            .headerdisplay * {
                visibility: visible;
            }
            /*.headerdisplay {
                position: fixed;
                top: 0; 
                left: 0;
            }*/
            .tab * {
                visibility: visible;
            }
            .tab{ 
                position: absolute; 
                top: 0; 
                left: 0; 
            }
            .pans {
                visibility: visible;
            }
            
            
        }
        
        .panel-body { background-color: #EBF2FA; }
        .col-lg-12 { background-color: #EBF2FA; }
        .page-header { background-color: #EBF2FA; }
        .row { background-color: #EBF2FA; }
        .wrapper { background-color: #EBF2FA; }

    </style>
    

</head>