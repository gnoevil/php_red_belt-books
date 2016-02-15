<!DOCTYPE html>
<html>
<head>
	<title>Add a New Book</title>
</head>
<body>
	<a href="">Home</a> || <a href="">Logout</a>
	<h2>Add a New Book Title and a Review</h2>
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