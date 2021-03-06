<?php
/**
 * 试题序号题ID部件
 * User: Administrator
 * Date: 2021/6/1
 * Time: 17:04
 */

namespace TopicHtml\Part;

class TopicNo extends Part
{
    /**
     * 部件名称
     * @var string
     */
    protected $part_name = 'topic_no';

    /**
     * 题号文本对象
     * @var string
     */
    private $topic_no_text;

    /**
     * 题号后说明对象
     * @var string
     */
    private $topic_no_desc;

    public function __construct($part_name = '')
    {
        parent::__construct($part_name);

        $this->topic_no_text = new TopicLabel();
        $this->topic_no_text->setStyleClassName('topic_no_text');
        $this->topic_no_desc = new TopicLabel();
        $this->topic_no_desc->setStyleClassName('topic_no_desc');

    }

    public function getPart()
    {
        $html_content = $this->getHtmlContent();
        if (is_array($html_content)) {

        }
        return parent::getPart(); // TODO: Change the autogenerated stub
    }
}