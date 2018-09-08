<?php
namespace	Magenest\Movie\Block\Adminhtml;
class	MagenestMovie	extends	\Magento\Backend\Block\Widget\Grid\Container
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_Movie';
        $this->_controller = 'adminhtml_movie';
//        $this->removeButton('add');
        parent::_construct();
        $this->buttonList->update('add','label','Add Movie');


    }

//    protected function _addNewButton()
//    {
//        $this->addButton(
//            'add_button',
//            [
//                'label' => __('Add Movie'),
//                'onclick' => 'setLocation(\'' . $this->getUrl('movie/add/index') . '\')',
//                'class' => 'add primary'
//            ]
//        );
//    }
}