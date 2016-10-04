<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>Category</h1>
	<?php
	// echo "<pre>";
	// print_r($data);
	?>
	<div id="body">
		<form>
			<select name="parent_category" id="parent_category">
				<option value="0">--Select category--</option>
				<?php 
				foreach ($data as $value_data) { ?>
					<option value="<?php echo $value_data->id; ?>"><?php echo $value_data->cat_name; ?></option>
				<?php
				}
				?>
			</select>
			<input type="text" name="new_category" id="new_category">
			<button id="submit_category">Submit</button>
		</form>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
$(function(){ // start of doc ready.
   $("#submit_category").click(function(e){
      e.preventDefault();  // stops the jump when an anchor clicked.
      var old_cat = $('#parent_category option:selected').val();
      var new_cat = $('#new_category').val();
      alert(old_cat);
      alert(new_cat);
     // var title = $(this).text(); // anchors do have text not values.

      // $.ajax({
      //   url: 'faq/get_faq_data',
      //   data: {'title': title}, // change this to send js object
      //   type: "post",
      //   success: function(data){
      //      //document.write(data); just do not use document.write
      //      console.log(data);
      //   }
      // });
   });
}); // end of doc ready
</script>

</body>
</html>