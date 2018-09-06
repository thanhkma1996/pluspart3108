<?php
namespace Magenest\PartTimePlus\Setup;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
class UpgradeSchema implements UpgradeSchemaInterface {
    public function upgrade(SchemaSetupInterface $setup,ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.0') < 0) {
            $installer = $setup;
            $installer->startSetup();
            $connection = $installer->getConnection();
//Install new database table
            $table = $installer->getConnection()->newTable(
                $installer->getTable('magenest_parttimeplus')
            )->addColumn(

                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'ID'

            )->addColumn(
                'customerprefix',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                ['nullable' => false],
                'customerprefix'
            )->addColumn(
                'firstname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255, [
                'unsigned' => true,
                'nullable' => false],
                'fristname'
            )->addColumn(
                'lastname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'lastname'
            )->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                11, [
                'nullable' => false,

            ],
                'email'


            );
            $installer->getConnection()->createTable($table);
            $installer->endSetup();
        }


    }
}