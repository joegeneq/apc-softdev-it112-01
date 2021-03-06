<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'user_id',
            'username',
            //'product_id',
            ['label' => 'Product Name', 'attribute' => 'product_id', 'value' => 'product.name'],
            //'qty',
            ['label' => 'Quantity', 'attribute' => 'qty'],
            ['label' => 'Order ID', 'attribute' => 'id'],
            'date',
            'Status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
