<?php require 'views/_partials/head.view.php';?>

<div class="container">
  <?php if(isset($error)): ?>
  <?php foreach($error as $k => $e): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong><?=$e;?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endforeach ?>    
  <?php endif ?>    
  <form method="post">
  <div class="form-group">
      <input type="text" class="form-control" name="companyName" placeholder="Company name" >
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="code" placeholder="Code">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="pvmCode" placeholder="pvmCode">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="address" placeholder="Adress">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="phone" placeholder="Phone number">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="activities" placeholder="Activities">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="manager" placeholder="Manager">
    </div>
  <button type="submit" class="btn btn-primary" name ="save">SUBMIT</button> 
  </form>
</div>
<?php require 'views/_partials/htmlEnd.php';?>