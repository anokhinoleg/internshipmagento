<?php
/**
 * Created by PhpStorm.
 * User: skywalker
 * Date: 14.08.18
 * Time: 14:55
 */

class Skywalker_InternshipBlog_Model_Observer
{
    public function updateDate($event)
    {
        if (!$event->getData('event')->getObject()->isObjectNew()) {
            $updatedAt = new DateTime();
            $updatedAt = $updatedAt->format("Y-m-d H:i:s");
            $event->getData('event')->getObject()->setData('updated_at', $updatedAt);
        }
    }
}