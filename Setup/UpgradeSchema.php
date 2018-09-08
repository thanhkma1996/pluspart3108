<?php
/**
 * Created by PhpStorm.
 * User: hahoang
 * Date: 22/01/2018
 * Time: 13:46
 */
namespace Magenest\Movie\Setup;
use	Magento\Framework\Setup\UpgradeSchemaInterface;
use	Magento\Framework\Setup\ModuleContextInterface;
use	Magento\Framework\Setup\SchemaSetupInterface;
class UpgradeSchema	implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.1') < 0) {
            $installer = $setup;
            $installer->startSetup();
            $connection = $installer->getConnection();
            $table = $installer -> getConnection()->newTable($installer->getTable('magenest_actor')
            )->addColumn(
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'Actor ID'

            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,['nullable' => false],
                'Name'
            );
            $installer->getConnection()->createTable($table);



            $table = $installer -> getConnection()-> newTable($installer->getTable('magenest_director')
            )->addColumn(
                'director_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
            'Director ID'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,['nullable' => false],
                'Name'
             );
            $installer->getConnection()->createTable($table);



            $table = $installer->getConnection()->newTable($installer->getTable('magenest_movie')
            )->addColumn(
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null, [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
                'Movie ID'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,['nullable' => false],
                'Name'
            )->addColumn(
                'description',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,['nullable' => false],
                'description'
            )->addColumn(
                'rating',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,['nullable' => false],
                'Rating'
            )->addColumn(
                'director_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,['nullable' => false],
                'Director ID'
            );
                $installer->getConnection()->createTable($table);


            $table = $installer->getConnection()->newTable($installer->getTable('magenest_movie_actor')
            )->addColumn(
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,['nullable' => false],
                'Movie ID'
            )->addColumn(
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,['nullable' => false],
                'Actor ID'
            );
            $installer->getConnection()->createTable($table);
                        $installer->endSetup();
        }
    }
}

