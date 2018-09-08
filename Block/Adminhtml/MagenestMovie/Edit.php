<?php
/**
 * Created by PhpStorm.
 * User: dukeant
 * Date: 2/3/18
 * Time: 6:14 PM
 */
namespace Magenest\Movie\Block\Adminhtml\MagenestMovie;
use Magento\Backend\Block\Widget\Form\Container as FormContainer;
use Magento\Framework\Registry;
use Magento\Backend\Block\Widget\Context;
class Edit extends FormContainer{
    protected $coreRegistry;

    public function __construct(
        Context $context,
        Registry $registry,
        array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getHeaderText()
    {
        $magenestMovie = $this->coreRegistry->registry('magenest_movie_edit');
        if ($magenestMovie->getId())
        {
            return __("Edit Option '%1'", $this->escapeHtml($magenestMovie->getTitle()));
        }
        return __('New Option');
    }
    protected function _construct()
    {
        parent::_construct();
        $this->_objectId='id';
        $this->_blockGroup='Magenest_Movie';
        $this->_controller = 'adminhtml_magenestMovie';
        $this->buttonList->update('save', 'label', __('Save Movie'));
        $this->removeButton('back');

        $this->addButton(
            'back_button',
            [
                'label' => __('Back'),
                'onclick' => 'setLocation(\'' . $this->getUrl('movie/movie/index') . '\')',
                'class' => 'back'
            ],
            -1
        );
    }
}