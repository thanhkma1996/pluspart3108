<?php
/**
 * Created by PhpStorm.
 * User: dukeant
 * Date: 2/3/18
 * Time: 6:31 PM
 */
namespace Magenest\Movie\Block\Adminhtml\MagenestMovie\Edit;
use \Magento\Backend\Block\Widget\Form\Generic;
use function PHPSTORM_META\type;

class Form extends Generic
{
    protected $systemStore;
    protected $status;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Store\Model\System\Store $systemStore,
        array $data = []
    ) {
        $this->_systemStore = $systemStore;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    protected function _construct()
    {
        parent::_construct();
        $this->setId('grid_form');
        $this->setTitle(__('Movie Information'));
    }

    protected function _prepareForm()
    {
        $model=$this->_coreRegistry->registry('movie_movie_edit');
        $form = $this->_formFactory->create(
            ['data' =>
                [
                    'id' => 'edit_form',
                    'action' => $this->getData('action'),
                    'method' => 'post'
                ]
            ]
        );
        $form->setHtmlIdPrefix('movie_id');
        $fieldset = $form->addFieldset(
            'general_fieldset',
            [
                'legend' => __('Movie Information'),
                'class' => 'fieldset-wide'
            ]
        );
        if($model->getId()!=null) {
            $fieldset->addField(
                'movie_id',
                'text',
                [
                    'name' => 'movie_id',
                    'label' => __('Movie ID'),
                    'title' => __('Movie ID'),
                    'require' => true
                ]
            );
        };
        $fieldset->addField(
            'name',
            'text',
            [
                'name' => 'name',
                'label'=>__('Name'),
                'title'=>__('Name'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'description',
            'text',
            [
                'name'=> 'description',
                'label'=>__('Description'),
                'title'=>__('Description'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'director_id',
            'text',
            [
                'name'=>'director_id',
                'label'=>__('Director ID'),
                'title'=>__('Director ID'),
                'require'=>true
            ]
        );

        $fieldset->addField(
            'rating',
            'select',
            [
                'name'=>'rating',
                'label'=>__('Rating'),
                'title'=>__('Rating'),
                'require'=>true,
                'options' => ['0' => __('Select rating of movie'),
                    '1' => __('1'),
                    '2' => __('2'),
                    '3' => __('3'),
                    '4' => __('4'),
                    '5' => __('5'),
                    '6' => __('6'),
                    '7' => __('7'),
                    '8' => __('8'),
                    '9' => __('9'),
                    '10' => __('10')]
            ]

        );

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}