<?php
	include ('header.php');

	$pagename = "announcement.php";
	$tablename = "announcement";

	if(isset($announcement)){
		insert("$tablename");
	}

	if (isset($id)) {
		destroy($id, $tablename);
	}
?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Form</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Student Class</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								January 2021
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Export List</a>
								<a class="dropdown-item" href="#">Policies</a>
								<a class="dropdown-item" href="#">View Assets</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Default Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Student Forms</h4>
						<p class="mb-30"></p>
					</div>
				</div>
				<form id="reg_form" action="#" method="post">
					<div class="form-group row">
						<div class="col-md-4">		
						</div>
						<div class="col-md-4">
							<label class="col-sm-12 col-md-2 col-form-label">Announcement</label>
							<input class="form-control" type="text" name="announcement" placeholder="Student Class">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label"></label>
						<div class="col-md-2">		
						</div>
						<div class="col-md-4">
							<input class="btn btn-primary btn-block" type="submit" value="submit">
						</div>
					</div>
					<br>
					<br>
				</form>
				<div class="table-responsive"> 
				  <h3 style="text-align:center;">Announcement Data</h3>
				  <br>         
				  <table class="table">
				    <thead>
				      <tr>
				      	<th>Ser No.</th>
				        <th>State</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$stu_class = select("announcement");
				    		if($stu_class != null)
				    			$count=1;{
				    				foreach ($stu_class as $stu_row) {
				    					$stu_id    = $stu_row['id'];
				    					$stu_announcement = $stu_row['announcement'];

				    					echo'<tr>
				    						<td> '.$count.' </td>
				    						<td> '.$stu_announcement.' </td>
				    						<td> <div class="btn btn-danger" onclick="del('.$stu_id.', this)"> Delete</div> </td>
				    					</tr>';
				    					$count++;
				    				}
				    			}
				    	?>
				    </tbody>
				  </table>
				  </div>
			</code></pre>
		</div>
	</div>
</div>
<!-- Default Basic Forms End -->
</div>
<?php
	include ('footer.php');
?>	

<!-- start insert script -->

<script type="text/javascript">
	$('document').ready(function(e){
		$('#reg_form').on('submit', (function(e){
			e.preventDefault();

			$.ajax({
				url: "<?php echo $pagename; ?>",
				type: "post",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(data){
					alert("data submitted");
					window.location = "<?php echo $pagename; ?>";
				},
				error: function(){
					alert("something went wrong");
				}
			});
		}));
	});
</script>

<!-- start insert script -->	

<script>
	function del(id, o){
		if(confirm('Are you sure want to delete')){
			var p=o.parentNode.parentNode;
			p.parentNode.removeChild(p);

			$.ajax({
				url: "<?php echo $pagename ?>",
				type: "post",
				data: {"id":id},
				success:function(data){
					alert("deleted");
					window.location = "<?php echo $pagename; ?>";
				},
				error: function(){
					alert("something went wrong")
				}
			});
		}
	}
</script>