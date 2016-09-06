<?php
/* @var $this yii\web\View */
?>
<h1>Книги в продаже</h1>

<div class="row">

        <?foreach($models as $model):?>
            <div class="col-md-3">
                <div ><img src="data:image/jpeg;charset=utf-8;base64,<?=base64_encode($model->image);?>" class="img-thumbnail" style="max-width: 200px"></div>
                <div><b><?=$model->authorName;?></b></div>
                <div class="text-left">
                    <?=$model->description;?>
                </div>
            </div>
        <?endforeach;?>

</div>