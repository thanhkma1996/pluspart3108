<?php
namespace	Magenest\Movie\Block\Adminhtml\Director;
use	Magento\Backend\Block\Widget\Grid	as	WidgetGrid;
class	Grid	extends	\Magento\Backend\Block\Widget\Grid\Extended
{
    /**					*	@var	\Magenest\Movie\Model\ResourceModel\MagenestMovie\Collection
     */
    protected	$_directorCollection;
    /**
     *	@param	\Magento\Backend\Block\Template\Context	$context
     *	@param	\Magento\Backend\Helper\Data	$backendHelper
     *	@para \Packt\HelloWorld\Model\ResourceModel\Subscription\Collection
    $subscriptionCollection
     *	@param	array	$data
     */
    public	function	__construct(
        \Magento\Backend\Block\Template\Context	$context,
        \Magento\Backend\Helper\Data	$backendHelper,
        \Magenest\Movie\Model\ResourceModel\MagenestActor\Collection  $directorCollection,
        array	$data	=	[]
    )	{
        $this->_directorCollection	=	$directorCollection;
        parent::__construct($context,	$backendHelper,	$data);
        $this->setEmptyText(__('No Director Found'));
    }
    /**
     *	Initialize	the	subscription	collection
     *
     *	@return	WidgetGrid
     */
    protected	function	_prepareCollection()
    {
        $this->setCollection($this->_directorCollection);
        return	parent::_prepareCollection();
    }
    /**
     *	Prepare	grid	columns
     *
     *	@return	$this
     */
    protected	function	_prepareColumns()
    {
        $this->addColumn(
            'name',
            [
                'header'	=>	__('Name Director'),
                'index'	=>	'name',
            ]
        );
        $this->addColumn(
            'director_id',
            [
                'header'	=>	__('Director ID'),
                'index'	=>	'director_id',
            ]
        );
        return	$this;
    }
//    public function	decorateStatus($value)	{
//        $class	='';
//        switch	($value)	{
//            case 'pending':$class = 'grid-severity-minor';
//                break;
//            case 'approved':$class	= 'grid-severity-notice';
//                break;
//            case 'declined':
//            default:$class	= 'grid-severity-critical';
//                break;
//        }
//        return '<span class="'.	$class	.'"><span>'	.$value	.'</span> </span>';
//    }
}