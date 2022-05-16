<a href="<?=Route::url('AdminController', 'index')?>" class="btn btn-dark"><i class="fa fa-chevron-left"></i> Back</a>
<h2>Categories Dashboard</h2>

<?php if (!empty($message)):?>
    <div>
        <ul style="color: #efeeee">
            <li><?=$message?></li>
        </ul>
    </div>
<?php endif;?>


<table class="table table-dark table-hover">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>POSSIBLE ACTIONS</th>
    </thead>
    <tbody>
        <?php if (count($page)>0):?>
        <?php foreach ($page as $value):?>
        <tr>
            <td><?=$value['id']?></td>
            <td><?=$value['name']?></td>
            <td>
                <div class="button">
                    <form action="<?=Route::url('AdminCategoryController', 'edit')?>" method="POST" class="button">
                        <input type="hidden" name="id" value="<?=$value['id']?>">
                        <button class="btn btn-secondary">Edit</button>
                    </form>
                    <form action="<?=Route::url('AdminCategoryController', 'delete')?>" method="POST" class="button">
                        <input type="hidden" name="id" value="<?=$value['id']?>">
                        <button class="btn btn-secondary">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>
</table>
<a href="<?=Route::url('AdminCategoryController', 'create')?>" class="btn btn-dark"><i class="fa fa-plus"></i> Create</a>