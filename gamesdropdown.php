<style type="text/css">
	.dropbtn {
  
  
color: white;
border: none;

  cursor: pointer;
 
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  margin-left: 20px;
 
}

.dropdown-content a {
  color:red;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}



.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  color: #ccff0f;;
}
</style>

<div class="dropdown">
  <button class="dropbtn">Category</button>
  <div class="dropdown-content">
  <a href="aaction.php">Action</a>
  <a href="#">Racing</a>
  </div>
</div>