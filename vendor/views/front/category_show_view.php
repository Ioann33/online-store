<h2>Products</h2>
<?php if (!empty($page)):?>
    <div class="categories" style="color: #f0f0f0; display: flex">
        <?php foreach ($page  as $value):?>
            <div class="products" style="width: 200px; height: 200px; border: 1px solid #ffffff; text-align: center;margin: 20px; padding-top: 80px; background-image: url('<?=$value['photo']?>')">
                <a href="<?=Route::url('ProductController','index', $value['id'])?>" style="text-decoration: none"><?= $value['name']?></a>
            </div>
        <?php endforeach;?>
    </div>
<?php endif;?>