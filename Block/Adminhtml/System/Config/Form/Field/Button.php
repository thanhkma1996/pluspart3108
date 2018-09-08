<?php
namespace Magenest\Movie\Block\Adminhtml\System\Config\Form\Field;
use Magento\Framework\App\Config\ScopeConfigInterface;
class Button extends \Magento\Config\Block\System\Config\Form\Field{
    const BUTTON_TEMPLATE = 'system/config/button/button1.phtml';

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (!$this->getTemplate()){
            $this->setTemplate(static::BUTTON_TEMPLATE);
        }
        RETURN $this;
    }

    public function getAjaxCheckUrl()
    {
        return $this->getUrl('adminhtml/system_config/edit/section/movie');
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $this->addData(
            [
                'id'=> 'addbutton_button',
                'button_label'=> __('Reload'),
                'onclick'=>'javascript:check(); '
            ]
        );
        return $this->_toHtml();
    }
}