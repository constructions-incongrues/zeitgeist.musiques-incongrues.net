<?php

/**
 * LUM_CommentHas_LUM_EntityTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_CommentHas_LUM_EntityTable extends PluginLUM_CommentHas_LUM_EntityTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_CommentHas_LUM_EntityTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_CommentHas_LUM_Entity');
    }
}