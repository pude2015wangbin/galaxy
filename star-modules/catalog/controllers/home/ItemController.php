<?php

namespace star\catalog\controllers\home;

use star\catalog\models\Item;
use yii\web\Controller;

class ItemController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id){
        /** @var  $itemModel  \star\catalog\models\Item*/
        $itemModel = Item::find()->where(['item_id'=>$id])->one();
        return $this->render('view', [
            'itemModel' => $itemModel,
            'itemImages' => $itemModel->itemImgs,
            'skuModels' => $itemModel->skus,
        ]);
    }

    public function actionList(){
        $items = Item::getItemsByCategory('商品分类');
        return $this->render('list',[
            'items' => $items
        ]);
    }
}