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