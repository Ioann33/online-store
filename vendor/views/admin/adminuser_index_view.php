<?php if (!empty($message)):?>
    <div>
        <ul style="color: #1dff00">
            <li><?=$message?></li>
        </ul>
    </div>
<?php endif;?>
<table class="table table" style="color: #f0f0f0">
    <thead>
    <tr>
        <th>Name</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($page)>0):?>
        <tr>
            <td><?=$page[0]['login']?></td>
            <td><?=$page[0]['email']?></td>
            <td><?=$page[0]['password']?></td>
            <td>
                <div class="button">
                    <form action="<?=Route::url('AdminUserController', 'edit')?>" method="post" class="button">
                        <input type="hidden" name="id" value="<?=$page[0]['id']?>">
                        <button class="btn btn-warning"> <i class="fa fa-paste"> </i> </button>
                    </form>
                </div>
            </td>
        </tr>
        <?php array_shift($page)?>
        <?php foreach ($page as $value):?>
            <tr>
                <td><?=$value['login']?></td>
                <td><?=$value['email']?></td>
                <td><?=$value['password']?></td>
                <td>
                    <div class="button">
                        <form action="<?=Route::url('AdminUserController', 'edit')?>" method="post" class="button">
                            <input type="hidden" name="id" value="<?=$value['id']?>">
                            <button class="btn btn-warning"> <i class="fa fa-paste"> </i> </button>
                        </form>
                        <form action="<?=Route::url('AdminUserController', 'delete')?>" method="post" class="button">
                            <input type="hidden" name="id" value="<?=$value['id']?>">
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>
    </tbody>
</table>
<a href="<?=Route::url('AdminUserController', 'create')?>" class="btn btn-success"><i class="fa fa-plus"></i> Create new user</a>