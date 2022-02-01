<?php require 'views/_partials/head.view.php';?>
<div class="container">
<h2>Home page of companies</h2>
    <div class="row">
        <button type="submit" class="btn btn-primary" onclick="window.location='/add-task';">Add new company</button>
        <button type="submit" class="btn btn-primary" onclick="window.location='/all-companies';">All companies</button>
    </div>
    <div class="row">
        <form action="" method="post">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button type="submit" class="btn btn-primary btn-sm" name="ieskoti">Search</button>
        </form>
    </div>
<?php if(isset($ats) && count($ats) > 0): ?>
    <table class="table table-dark table-striped ">
        <thead>
            <th>id</th>
            <th>company</th>
            <th>code</th>
            <th>pvmCode</th>
            <th>address</th>
            <th>phone</th>
            <th>email</th>
            <th>activities</th>
            <th>manager</th>
        </thead>
    <tbody>
        <?php foreach($ats as $k => $v):?> //
        <tr>
        <td><?=$v['id'];?></td>
        <td><?=$v['companyName'];?></td>
        <td><?=$v['code'];?></td>
        <td><?=$v['pvmCode'];?></td>
        <td><?=$v['address'];?></td>
        <td><?=$v['phone'];?></td>
        <td><?=$v['email'];?></td>
        <td><?=$v['activities'];?></td>
        <td><?=$v['manager'];?></td>
        </tr>
        <?php endforeach;?>  
    </tbody>
    </table>  
    <?php elseif(isset($ats) && count($ats) == 0): ?>
        <span style="text-align:center">Duomenu nera</span>
    <?php endif ?>

</div>
<?php require 'views/_partials/htmlEnd.php';?>
