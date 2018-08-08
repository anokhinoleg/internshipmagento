<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 07.08.18
 * Time: 15:02
 */

class Skywalker_Internship_Model_Observer
{
    public function addStringToTheBottom($event)
    {
        $content = $event->getData('event')->getData('data_object')->getContent();
        $event->getData('event')->getData('data_object')->setData('content', $content);
    }
}