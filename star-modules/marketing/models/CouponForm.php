<?php
/**
 * Created by PhpStorm.
 * User: chalin
 * Date: 6/10/2015
 * Time: 2:13 PM
 */
namespace star\marketing\models;

use Yii;

class CouponForm extends Coupon
{
    public $total;

    public $total_price;
    public $qty;
    public $category_id;
    public $shippingFee;

    public $type;
    public $number;
}