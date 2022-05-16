


<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Attention</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php if (!empty($errors)):?>

                <div>
                    <ul style="color: #ff0015">
                        <?php foreach($errors as $error):?>
                            <li><?= $error?></li>
                        <?php endforeach;?>
                    </ul>
                </div>

            <?php endif;?>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Ok</button>
            </div>
        </div>
    </div>
</div>

<a href="<?=Route::url('AdminCategoryController', 'index')?>" class="btn btn-dark"><i class="fa fa-chevron-left"></i> Back</a>
<div class="container">
    <div class="row-cols-lg-3">
        <h2 class="mt-4">Create a new category</h2>
        <form class="mt-4" action="<?=Route::url('AdminCategoryController', 'save')?>" method="POST">

            <div class="mb-4">
                <label for="categoryName" class="form-label">Name category</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enter a category name</div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

