<?php

/**
 * LUM_UserFieldTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_UserFieldTable extends PluginLUM_UserFieldTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_UserFieldTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_UserField');
    }
}