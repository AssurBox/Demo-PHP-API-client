<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "SystemStatus") {?>active<?php }?>" href="systemstatus.php">Check System</a>
	  </li>
	  	  
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "requestcard") {?>active<?php }?>" href="requestcard.php">Request green card</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "requestlist") {?>active<?php }?>" href="requestlist.php">Requests list</a>
	  </li>
	  
	  <!--<li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	  -->
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
	  </li>
	</ul>
</div>