<?php $this->load->view('partials/navigation') ?>

<h1 class="page-header">Profile</h1>
<h4>Welcome !! <?php echo 'Current User' ;?>
</h4>
<h3><u>Recent Book Reviews</u></h3>

	<form action="/Books/add" method="post">
    	Book Title:<input type="text" name="title">
    	<label>Author:</label>
			Choose From List:<select name="author_name">
	    		//<option value=""></option>
	    		//<option value=""></option>
			</select>
			Or add a new author:<input type="text" name="">
			<label>Review:</label><br>
			<textarea name="review"></textarea>
			Rating:<select name="rating">
	    		<option value="1">1</option>
	    		<option value="2">2</option>
	    		<option value="3">3</option>
	    		<option value="4">4</option>
	    		<option value="5">5</option>
			stars. </select>
			<input type="submit" value="Add Book and Review">
	</form>
</body>
</html>
