<?php
    
    include('dbCon.php');
    require_once 'admin_session.php';


    if (isset($_POST['sql_editor_run'])) 
    {
	$sql=$_POST['sql_editor_run'];
	if($sql=="")
        {
            echo "<font style='color: red'><b>Query Is Empty.</b></font>";
            return;
	}

	$result=mysqli_query($conn,$sql);
	if($result==false)
        {
		echo "<font style='color: red'><b>Query returned 0 rows.</b></font>";
	}
	else {
		$info=mysqli_fetch_row($result);
		
		echo "<pre class='data_array'>";
			print_r($info);
		echo "</pre>";
	}	
}

?>
<head>
<title>SQL Editor</title>
<?php include "header.php";?>
<?php include "sidebar.php";?>
<style type="text/css">
	.sql_editor_output{
		height: 370px;
		background-color: #F5F5F5;
		padding: 5px;
		border: 1px solid var(--bg-color);
		
	}
	
	.data_array{
		color: #333333;
		font-size: 13px;
		border-width: 0px;
		height: 100%;
		overflow: scroll;
	}

	.sql_editor{
		width: 100%;
		height: 100%;
		height: 370px;
		padding: 10px;
		font-size: 20px;
		font-weight: bold;
		resize: none;
		border: 1px solid var(--bg-color);
		background-color: #F5F5F5;
		color: #1e272e;
	}
	.sql_editor:focus{
		outline: none;
		border: 1px solid var(--bg-color);
	}
	.sql_header{
		padding: 10px;
		background-color:var(--bg-color);
		color: var(--font-color);
		font-weight: bold;
	}
	.sql_btn{
		padding: 10px;
		font-weight: bold;
		background-color: var(--bg-color);
		color: var(--font-color);
		border-width: 0px;
		border-radius: 5px;
	}
	.sql_btn_area{
		padding: 5px;
	}
</style>
</head>
<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <section class="py-5">
          <div class="container px-5">
            <div class="row">
	        <div class="col-md-5">
		    <div class="sql_header">Write SQL Query</div>
		    <textarea placeholder="Write SQL Query Here" class="sql_editor" id="sql_editor"></textarea>
		    <div class="sql_btn_area pull-right">
			<button class="sql_btn" onclick="sql_editor_run()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Run</button>
			<button class="sql_btn" onclick="sql_editor()"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reload</button>
		    </div>
	        </div>
                <div class="col-md-7">
		    <div class="sql_header">Query Output</div>
		    <div class="sql_editor_output" id="sql_editor_output"></div>
	        </div>
            </div>
          </div>
        </section>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/ajax.js"></script>
    <script src="js/add_ajax.js"></script>
    <script src="js/sql_editor_script.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
