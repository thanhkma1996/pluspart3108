<?php
namespace	Magenest\Movie\Plugin\Minicart;
class Image
{
    public function aroundGetItemData($subject, $proceed, $item)
    {
        $result = $proceed($item);

        //$options = $item->getProduct()->getTypeInstance(true)->getOrderOptions($item->getProduct());
        if ($result['product_sku']=='NMD-Gray')
        {
            $result['product_name'] = 'NMD-Gray';
            $result['product_image']['src'] = 'http://localhost/magento2/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/6/3/63601443046-adidas-nmdr1-charcoal-grey-201306_1_2_1.jpg';
        }
        else if ($result['product_sku']=='NMD-Red')
        {
            $result['product_name'] = 'NMD-Red';
            $result['product_image']['src'] = 'http://localhost/magento2/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/i/m/img02_2_1.jpg';
        }
        else
        {
            $result['product_name'] = 'NMD-Dark';
            $result['product_image']['src'] = 'http://localhost/magento2/pub/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/a/d/adidas-originals-nmd-women-4_4_1.jpg';
        }
        return $result;
    }
}