<?php
    include("header.php");

    $pagename = "admission.php";
	$tablename = "admission";

	if(isset($name)){
		insert("$tablename");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Student Admission</title>


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="admin/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="admin/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="admin/vendors/styles/style.css">


</head>
<body>
	<div class="mobile-menu-overlay"></div>

	    <div class="main-container">
		    <div class="pd-ltr-20 xs-pd-20-10">
			    <div class="min-height-200px">

				<!-- horizontal Basic Forms Start -->
                    <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-blue h4" style="color:#5fcf80;">Student Form</h4>
                                <p class="mb-30">Apply Admission</p>
                            </div>
                        </div>
                        <form id="reg_form" action="#" method="post">
                            <div class="form-group">
                                <label>Student Name</label>
                                <input class="form-control" name="name" type="text" placeholder="Enter Student Name" required>
                            </div>
                            <div class="form-group">
							    <label>Father Name</label>
							    <input class="form-control" name="fname" type="text" placeholder="Enter Father Name" required>
						    </div>
                            <div class="form-group">
                                <label>Class</label>
                                <select required class="form-control" name="class">
                                    <option>Select Option</option>
                                    <option>10Th Class</option>
                                    <option>11Th Class</option>
                                    <option>12Th Class</option>
                                </select>
						    </div>
                            <div class="form-group">
							<label>Phone</label>
							<input class="form-control" name="phone" value="" type="numbers" placeholder="Enter Phone No." required>
                            </div>
                            <div class="form-group">
                                <label>Aadhar Card No.</label>
                                <input class="form-control" name="aadhar" value="" type="numbers" placeholder="Enter Addhar Card No." required>
                            </div>
                            <div class="form-group">
                                <label>Bank Account No.</label>
                                <input class="form-control" name="account" value="" type="numbers" placeholder="Enter Bank Account No." required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label><br>
                                <input type="radio" name="gender" required value="Male">&nbsp;Male &nbsp;
                                <input type="radio" name="gender" required value="Female">&nbsp;Female 
                            </div>
                            <div class="form-group">
                                <label>District</label>
                                <input class="form-control" required name="district" value="Fazilka" type="text">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" required name="address" value="" type="text" placeholder="Enter Address">
                            </div>
                            <br>
                            <br>
                            <input class="btn btn-primary" type="submit" value="submit">
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                
                </div>		
            </div>
        </div>
    </div>  
</body>
</html>

<?php
    include("footer.php");
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
