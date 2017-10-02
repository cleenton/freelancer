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
    <div style="margin-top: -30px; margin-left:80%; position:absolute;">
    <?php echo anchor('auth/logout', 'logout');  ?></div>
</div>
</nav>
</div>
</div>

<table class="table table-bordered">
    <tr><th>id</th><th>Nama</th><th>Alamat</th><th>Saldo</th></tr>

<?php

echo "<hr>";
foreach($data as $b){
    echo "<tr>
    <td>$b->id</td>
    <td>$b->name</td>
    <td>$b->address</td>
    <td>$b->saldo</td>

    </tr>";
}
?>

</table>
</div> 
    </body>
</html>



<!-- <?php

?> -->
