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
    <div class="navbar-right" style="padding-right: 30px; padding-top: 15px;">
    <?php echo anchor('auth/logout', 'logout');  ?>
</div>
</nav>
</div>
</div>

<table class="table table-bordered">
    <tr><th>id</th><th>Nama</th><th>Alamat</th><th>Saldo</th><th>ID Freelancer</th></tr>

<?php

echo "<hr>";
foreach($data as $b){
    echo "<tr>
    <td>$b->id</td>
    <td>$b->name</td>
    <td>$b->address</td>
    <td>$b->saldo</td>
    <td>$b->freelancer_id</td>

    </tr>";
}
?>

</table>
</div> 
    </body>
</html>



<!-- <?php

?> -->
