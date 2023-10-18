<div class="container">
  <div class="row mb-2">
    <div class="col-lg-4">
    <form name="vupdate" action="vaccination-yes.php" method="post">
        <?php 
            //dynamic query
      $dquery= "SELECT * FROM  location";
      $result_set = mysqli_query($con, $dquery);
    
      $location_list = "";
      while ( $result = mysqli_fetch_assoc($result_set) ) {
        $location_list .= "<option value=\"{$result['Event_id']}\">{$result['location']}</option>";
      }
      //dynamic query
        ?>
        <label for="location">location</label>
        <select class="form-control" name="location" id="location">
            <?php echo   $location_list; ?>
        </select>
    </div>
    <div class="col-lg-4" style="float: right;position:relative; left:33%">
        <label for="date">date</label>
			<select class="form-control" name="date" id="date">
	
			</select>
        </form>
    </div>
   
  </div>
<!-- end of 1st drop down in new product.php-->
<!--script end of the page in new product.php -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
			$("#location").on("change", function(){
				var locationId = $("#location").val();
				var getURL     = "get-vaccine-location?location_id=" + locationId;
				$.get(getURL, function(data, status){
					$("#date").html(data);
				});
			});
    });	
 
</script>



<!--get-vacccie-location.php -->
if ( isset($_GET['location_id']) ) {

$location_id = mysqli_real_escape_string($con, $_GET['location_id']);

$query 		= "SELECT * FROM tblevent WHERE id='$location_id'";
$result_set = mysqli_query($con, $query);

$date_list = "";
while ( $result = mysqli_fetch_assoc($result_set) ) {
    $date_list .= "<option value=\"{$result['start']}\">{$result['start']}</option>";
}
echo $date_list;
} else {
echo "<option>Error</option>";
}

<!--3 table join query -->
$result = mysqli_query($con,"SELECT * FROM tblappoinments 
JOIN tbl_events on tblappoinments.Event_id=tbl_events.id
JOIN tblcandidate on tblappoinments.VC_no=tblcandidate.VC_no");
    $i=1;
    while($row = mysqli_fetch_array($result)) {}

