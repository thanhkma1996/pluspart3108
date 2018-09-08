<?php
/**
 * Created by PhpStorm.
 * User: hahoang
 * Date: 10/02/2018
 * Time: 08:05
 */
namespace Magenest\Movie\Plugin\CheckoutCart;

class Image
{
    public function afterGetImage($item, $result , $name)
    {
        $x = $item->getItem();
        if($x['sku']=='NMD-Gray') {
            $name->setName('Adidas-NMD Gray');
            $result->setImageUrl('http://localhost/magento2/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/6/3/63601443046-adidas-nmdr1-charcoal-grey-201306_1_2_1.jpg');
        }
        else if($x['sku']=='NMD-Red') {
            $name->setName('Adidas-NMD Red');
            $result->setImageUrl('http://localhost/magento2/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/m/img02_2_1.jpg');
        }
        else{
            $name->setName('Adidas-NMD Dark');
            $result->setImageUrl('http://localhost/magento2/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/a/d/adidas-originals-nmd-women-4_4_1.jpg');
        }
        return $result;
    }
}