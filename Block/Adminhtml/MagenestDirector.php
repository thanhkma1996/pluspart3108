<?php
namespace	Magenest\Movie\Block\Adminhtml;
class	MagenestDirector	extends	\Magento\Backend\Block\Widget\Grid\Container
{
    protected	function	_construct()
    {
        $this->_blockGroup	=	'Magenest_Movie';
        $this->_controller	=	'adminhtml_director';
        parent::_construct();
    }
}