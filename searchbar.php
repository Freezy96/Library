<div class="well">
	<form class="form-inline" method="GET" action="search.php">
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-search"></i></div>
				<input type="text" name="search" class="form-control" placeholder="Search">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">by</label>
			<select class="form-control" name="searchby">
				<option>Title</option>
				<option>Author</option>
				<option>Subject</option>
				<option>ISBN</option>
				<option>Call Number</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary btn-md">Search</button>
	</form>
</div>