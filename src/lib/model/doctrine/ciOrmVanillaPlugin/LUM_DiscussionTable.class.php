<?php

/**
 * LUM_DiscussionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_DiscussionTable extends PluginLUM_DiscussionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_DiscussionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_Discussion');
    }
}