<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

if (@$_GET['mesaj']=='ok') {?>

	<script>alert('MESAJ GONDERİLDİ')</script>
	
<?php  }?>

<?php 

if (@$_GET['mesaj']=='no') {
	# code...
}
 ?>



	<div class="container">
  <form action="mesaj.php" method="POST">

    <label for="fname">First Name</label>
    <input type="text" id="hackeradi" name="firstname" placeholder="Your name.." required>

    

    <label for="sebep">Reason?</label>
    <select id="sebep" name="sebep">
      <option value="bugbildir">bug notification</option>
      <option value="zonesil">delete a zone</option>
      <option value="diger">other</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit" name="gonder">

  </form>

  <style type="text/css">
  	

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

  </style>
</div>
</body>
</html>
