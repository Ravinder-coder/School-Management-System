<?php
	include ('header.php');

	$pagename = "smartroom.php";
	$tablename = "smartroom";

	if(isset($title)){
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
								<li class="breadcrumb-item active" aria-current="page">Slider</li>
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
						<h4 class="text-blue h4">Slider</h4>
						<p class="mb-30"></p>
					</div>
				</div>

				<!-- start upload image form -->

				<form id="uploadForm" name="uploadForm" action="#" method="post">
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-5">
								<img src="image/uploder.png" style="margin-left: 145px; width: 180px; height: 180px;" id="updateimg" >
							</div>
						<div class="col-md-4"></div>
					</div>

					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-5">
								<input type="file" name="myimage" id="myimage" style="display: none;">
							</div>
						<div class="col-md-4"></div>
					</div>

					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-5">
								<input type="submit"  id="mee" style="display: none;">
							</div>
						<div class="col-md-4"></div>
					</div>
				</form>

				<!-- end upload image form -->

				<form id="reg_form" action="#" method="post">
					<div class="form-group row">
						<div class="col-md-4">		
						</div>
						<div class="col-md-4">
							<label class="col-sm-12 col-md-5 col-form-label">Title</label>
							<input class="form-control" type="text" name="title" placeholder="Enter Title">
						</div>
					</div>
                    <div class="form-group row">
						<div class="col-md-4">		
						</div>
						<div class="col-md-4">
							<label class="col-sm-12 col-md-5 col-form-label">Content</label>
							<input class="form-control" type="text" name="content" placeholder="Enter Content">
						</div>
					</div>
                    <div class="form-group row">
						<div class="col-md-4">		
						</div>
						<div class="col-md-4">
							<label class="col-sm-12 col-md-5 col-form-label">Features</label>
							<input class="form-control" type="text" name="features" placeholder="Enter Features">
							<input class="form-control" type="hidden" name="imageurl" id="imageurl"> 
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
				 <h3 style="text-align:center;">Smart Room Data</h3>
				  <br>         
				  <table class="table">
				    <thead>
				      <tr>
				      	<th>Ser No.</th>
				        <th>Title</th>
                        <th>Content</th>
                        <th>Features</th>
				        <th>Image</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$stu_class = select("smartroom");
				    		if($stu_class != null)
				    			$count=1;{
				    				foreach ($stu_class as $stu_row) {
				    					$stu_id    = $stu_row['id'];
				    					$stu_title = $stu_row['title'];
                                        $stu_content = $stu_row['content'];
                                        $stu_features = $stu_row['features'];
				    					$stu_imageurl  = $stu_row['imageurl'];

				    					echo'<tr>
				    						<td> '.$count.' </td>
				    						<td> '.$stu_title.' </td>
                                            <td> '.$stu_title.' </td>
                                            <td> '.$stu_title.' </td>
				    						<td> <img src='.$imgpathurl.$stu_imageurl.' style="height:130px; width:130px;"> </td>
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

<!-- end insert script -->		

<!-- start upload image script -->		
	
	<script type="text/javascript">
		$('document').ready(function(e){

			$('#updateimg').click(function(){
				$('#myimage').trigger('click');
			});

				$('#myimage[type="file"]').change(function(){
					//alert("A fiel has been selected");
					$('#updateimg').attr('src' , "");
					$('#mee').trigger('click');
				});
			

		});
	</script>


	<script>


	$("#uploadForm").on('submit',(function(e) {

			e.preventDefault();

		$.ajax({
			url: "onlyimgapi.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)	{
			    console.log("done");
				$('#updateimg').attr('src', "<?php echo $imgpathurl ?>"+data);
				$('#imageurl').val(""+data);
			},

			error: function (jqXHR, exception) {
					var msg = '';

				if (jqXHR.status === 0) {
					msg = 'Not connect.\n Verify Network.';
				}
				else if (jqXHR.status == 404) {
					msg = 'Requested page not found. [404]';
				}
				else if (jqXHR.status == 500) {
					msg = 'Internal Server Error [500].';
				}
				else if (exception === 'parsererror') {
					msg = 'Requested JSON parse failed.';
				}
				else if (exception === 'timeout') {
					msg = 'Time out error.';
				}
				else if (exception === 'abort') {
					msg = 'Ajax request aborted.';
				}
				else {
					msg = 'Uncaught Error.\n' + jqXHR.responseText;
				}
					$('#post').html(msg);
    			},


			});

		}));


	</script>

<!-- end upload image script -->	

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