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
        <?php foreach ($page as $value):?>
            <tr>
                <td><?=$value['login']?></td>
                <td><?=$value['email']?></td>
                <td><?=$value['password']?></td>
                <td>
                <td>
                    <form action="" method="post" class="button">
                        <input type="hidden" name="index" value="<?=$value['id']?>">
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    <form action="" method="post" class="button">
                        <input type="hidden" name="index" value="<?=$value['id']?>">
                        <button class="btn btn-warning"><i class="fa fa-paste"></i></button>
                    </form>
                </td>
                </td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>
    </tbody>
</table>
<a href="/userauth.php?action=create" class="btn btn-success"><i class="fa fa-plus"></i>Create new user</a>