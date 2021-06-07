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

class TopicNormal
{
    private $tpl_obj;
    //css 标签样式内容
    private $css_style_content = '';

    public function __construct()
    {
        $this->tpl_obj = new TplNormal();
    }

    /**
     * 获取css 标签样式内容
     * @return string
     */
    public function getCssStyleContent()
    {
        return $this->tpl_obj->getCssStyleLabelContent().$this->css_style_content;
    }

    /**
     * @param string $css_style_content
     */
    public function setCssStyleContent($css_style_content)
    {
        $this->css_style_content = $css_style_content;
    }


    public function getTopicHtmlContent($topic_info)
    {
        $topic_id = $topic_info['id'];
        $subject_id = $topic_info['subject_id'];
        $topic_type = $topic_info['type_id'];
        $topic_title = $topic_info['title'];
        $topic_items = $topic_info['items'];
        $parse_content = $topic_info['parse_content'];
        $topic_answer = array();


        $topic_option_arr = array();
        foreach ($topic_items as $item) {
            foreach ($item['options'] as $option) {
                if ($option['option_correct']) {
                    $topic_answer[] = 'A';
                }
                $topic_option_arr[] = $option['option_content'];
            }
            $topic_option_arr = $item;
        }

        $html_content_arr = array(
            'topic_no' => "第1题【{$topic_id}】",
            'topic_no_desc' => "考点：xxxxxx",
            'topic_title' => $topic_title,
            'topic_option' => $topic_option_arr,
        );
        $part_class_arr = array(
            'topic_no' => TopicNo::class,
            'topic_title' => TopicTitle::class,
            'topic_option' => TopicOption::class,
        );




        $tpl_obj = &$this->tpl_obj;
        //模板结构
        $topic_header_part = array(
            'label_name' => 'img',
            'attribute_arr' => array('src' => 'http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332524382.png'));
        $topic_no_wrap_part = array(
            'part_arr' => array(
                'topic_no' => array(
                    'label_name' => 'label',
                    'style_arr' => array('background' => '#666666'),
                ),
                'topic_no_desc' => array(
                    'label_name' => 'label'
                )
            )
        );

        $tpl_obj->addTplPart('topic_header',$topic_header_part);
        $tpl_obj->addTplPart('topic_no_wrap',$topic_no_wrap_part);

        $tpl_obj->setHtmlContentArr($html_content_arr);
        $tpl_obj->setPartClassArr($part_class_arr);

        $html = $tpl_obj->getTplHtml();


        return $html;

    }

}