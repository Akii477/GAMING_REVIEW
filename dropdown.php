<style type="text/css">
	.dropbtn {
  background-color: #1e1d2b;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  margin-left: 20px;
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

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #1d2466;
}
</style>

<div class="dropdown">
  <button class="dropbtn">Category</button>
  <div class="dropdown-content">
  <a href="javascript:submitform('Action')">Action</a>
  <a href="javascript:submitform('Racing')">Racing</a>
  <a href="javascript:submitform('Arcade')">Arcade</a>
  <a href="javascript:submitform('Adventure')">Adventure</a>
  </div>
</div>
<form id="hii" action="acategory.php" style="display: none;">
  
<input type="hidden" name="hi" id="hihi">


</form>
<script type="text/javascript">
  
function submitform(v) {
  document.getElementById('hihi').value=v;
  document.getElementById('hii').submit();
}

</script>