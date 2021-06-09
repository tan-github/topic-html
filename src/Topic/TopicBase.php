<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/2
 * Time: 13:03
 */

namespace TopicHtml\Topic;

use TopicHtml\Part\TopicNo;
use TopicHtml\Part\TopicOption;
use TopicHtml\Part\TopicTitle;
use TopicHtml\Tpl\TplNormal;

abstract class TopicBase
{
    //模板对象
    private $tpl_obj;
    //css 标签样式内容
    private $css_style_content = '';
    //字母数组
    protected $letter_arr = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "O", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");


    public function __construct()
    {
        $this->setTplObj(new TplNormal());
    }

    /**
     * @return TplNormal
     */
    public function getTplObj()
    {
        return $this->tpl_obj;
    }

    /**
     * @param TplNormal $tpl_obj
     */
    public function setTplObj($tpl_obj)
    {
        $this->tpl_obj = $tpl_obj;
    }

    /**
     * @return array
     */
    public function getLetterArr()
    {
        return $this->letter_arr;
    }


    /**
     * 获取css 标签样式内容
     * @return string
     */
    public function getCssStyleContent()
    {
        return $this->tpl_obj->getCssStyleLabelContent() . $this->css_style_content;
    }

    /**
     * @param string $css_style_content
     */
    public function setCssStyleContent($css_style_content)
    {
        $this->css_style_content = $css_style_content;
    }


    /**
     * 获取试题html内容
     * @param $topic_info
     * @return mixed
     */
    abstract public function getTopicHtmlContent(&$topic_info, $params);

}