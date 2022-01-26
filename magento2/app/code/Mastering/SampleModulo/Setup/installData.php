<?php

namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' =>  'Item 1'
            ]
        );


        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' =>  'Item 2'
            ]
        );

        $setup->endSetup();
    }
}
