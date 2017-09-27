<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
        
        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
    <body>

<div class="container">
<div class="col-md-12 ">
<div class="row">
<nav class="navbar" style="background-color:lightblue; border-radius:0 padding-left: 200px;;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">
        <img alt="Brand" src="https://www.kioson.com/assets/images/logo-kioson1.png" width="100" height="30">  
      </a>
    </div>
    <?php echo anchor('auth/logout', 'logout');  ?>
</div>
</nav>
</div>

<?php
echo form_open('content/edit_simpan_profile');
?>

<?php
echo form_hidden('id', $this->uri->segment(3));
?>

<table>
    <tr><td>ID Freelancer</td><td> <?php echo form_input('id',$edit_profile['id'],array('placeholder'=>'ID Freelancer'));?></td></tr>
    <tr><td>Name</td> <td><?php echo form_input('name',$edit_profile['name'],array('placeholder'=>'Nama'));?></td></tr>
    <tr><td>Address</td> <td><?php echo form_input('address',$edit_profile['address'],array('placeholder'=>'Alamat'));?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Edit');?>
    </td></tr>
</table>


<?php
echo form_close();
?>
</div>
</div>
</body>
</html>