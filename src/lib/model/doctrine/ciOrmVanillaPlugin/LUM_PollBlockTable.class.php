<?php

/**
 * LUM_PollBlockTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_PollBlockTable extends PluginLUM_PollBlockTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_PollBlockTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_PollBlock');
    }
}