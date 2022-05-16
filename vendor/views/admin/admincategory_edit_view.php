<?php if (!empty($errors)):?>
    <div>
        <ul style="color: #ff0015">
            <?php foreach($errors as $error):?>
                <li><?= $error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif;?>

<a href="<?=Route::url('AdminCategoryController', 'index')?>" class="btn btn-dark"><i class="fa fa-chevron-left"></i> Back</a>
<div class="container">
    <div class="row-cols-lg-3">
        <h2 class="mt-4">Edit category</h2>
        <form class="mt-4" action="<?=Route::url('AdminCategoryController', 'update')?>" method="POST">
            <div class="mb-4">


                <label for="categoryName" class="form-label">New name category</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?=$category[0]['name'] ?>">
                <input type="hidden" name="id" value="<?=$category[0]['id']?>">
                <div id="emailHelp" class="form-text">Enter a new category name</div>

            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>