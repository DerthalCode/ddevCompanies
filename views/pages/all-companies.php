<?php require 'views/_partials/head.view.php';?>
<div class="container">
<form>
</form>
<button type="submit" class="btn btn-primary" onclick="window.location='/add-task';">Add company</button>
<h3>Companys list:</h3>
<table class="table table-dark table-striped">
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>PVM CODE</th>
                <th>Adress</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Activities</th>
                <th>Manager</th>
                <th></th>
            </tr>
        <?php foreach($task->allTasks() as $company):?>
            <tr>
                    <td><?=$company['companyName'];?></td>
                    <td><?=$company['code'];?></td>
                    <td><?=$company['pvmCode'];?></td> 
                    <td><?=$company['address'];?></td>
                    <td><?=$company['phone'];?></td> 
                    <td><?=$company['email'];?></td> 
                    <td><?=$company['activities'];?></td> 
                    <td><?=$company['manager'];?></td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uzduotis-<?=$company['id'];?>">Šalinti</button></td>
            </tr> 
                            <!-- Modal -->
            <div class="modal fade" id="uzduotis-<?=$company['id'];?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     Ar tikrai norite ištrinti <?=$company['companyName'];?> ?
                    </div>
                    <div class="modal-footer">
                        <a href="/delete-task/id/<?=$company['id'];?>" class="btn btn-success">Patvirtinti</a>
                        <button type="button" class="btn-danger" data-bs-dismiss="modal">Atšaukti</button>
                    </div>
                    </div>
                </div>
                </div>   
        <?php endforeach;?>
    </table>
</div>
<?php require 'views/_partials/htmlEnd.php';?>