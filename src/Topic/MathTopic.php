<?php
/**
 * 数学题
 * User: Administrator
 * Date: 2021/6/4
 * Time: 16:57
 */

namespace TopicHtml\Topic;


use TopicHtml\Part\Part;
use TopicHtml\Part\TopicOption;

class MathTopic extends TopicBase
{
    //0=>array(错题，) 1=>array(提分题，)
    private $product_topic_type = 0;
    //选择题题干和选项是否分离
    private $topic_option_detach = false;

    /**
     * @return int
     */
    public function getProductTopicType()
    {
        return $this->product_topic_type;
    }

    /**
     * @param int $product_topic_type
     */
    public function setProductTopicType($product_topic_type)
    {
        $this->product_topic_type = $product_topic_type;
        $this->setCssStyleContent($this->getCssByType());
    }

    /**
     * @param bool $topic_option_detach
     */
    public function setTopicOptionDetach($topic_option_detach)
    {
        $this->topic_option_detach = $topic_option_detach;
    }



    public function __construct()
    {
        parent::__construct();

    }

    public function getTopicHtmlContent(&$topic_info, $params = array())
    {

        // TODO: Implement getTopicHtmlContent() method.
        $html_content_arr = $this->getMathTopicHtmlContent($topic_info);

        $part_class_arr = array(
            'topic_option' => TopicOption::class,
        );

        $tpl_obj = $this->getTplObj();
        $tpl_obj->setIsAllSubject(false);

        //模板结构
//        $this->editTpl();

        //试题题干和选项
        $tpl_obj->setHtmlContentArr($html_content_arr);
        $tpl_obj->setPartClassArr($part_class_arr);

        $topic_html = $tpl_obj->getTplHtml();

        //试题答案和解析
        $tpl_obj->setHtmlContentArr($html_content_arr);
        $answer_parse_html = $tpl_obj->getTplHtmlAnswerParse();

        if ($this->topic_option_detach) {
            //设置选项不显示
            $tpl_obj->setIsShowOption(false);
            //单独获取选项html
            $topic_option_obj = new TopicOption();
            $topic_option_obj->setIsAllSubject(false);
            $style_arr = $topic_option_obj->getOptionUlObj()->getStyleArr();
            $style_arr['font-size'] = '10px';
            $style_arr['padding-left'] = '25px';
            $topic_option_obj->getOptionUlObj()->setStyleArr($style_arr);
            $topic_option_obj->setHtmlContent(isset($html_content_arr['topic_option'])?$html_content_arr['topic_option']:array());
            $option_html = $topic_option_obj->getPart();
        }else{
            $option_html = '';
        }

        $methods = array();
        if (isset($topic_info['specials']) && $topic_info['specials']) {
            foreach ($topic_info['specials'] as $_methods) {
                $methods[] = $_methods['method_name'];
            }
        }

        return array(
            'topic_type' => $topic_info['type_id'],
            'subject_id' => $topic_info['subject_id'],
            'source' => $topic_info['source'],
            'difficulty_degree' => $topic_info['difficulty_degree'],
            'teacher_tips' => Image::resetImgSize(isset($topic_info['teacher_tips'])?$topic_info['teacher_tips']:''),
            'topic_methods' => $methods,
            'topic_html' => $topic_html,
            'option_html' => $option_html,
            'answer_parse_html' => $answer_parse_html,
        );
    }

    private function getMathTopicHtmlContent(&$topic_info)
    {
//        $subject_id = $topic_info['subject_id'];
//        $topic_type = $topic_info['type_id'];

        $topic_option_arr = array();//选项
        $topic_answer_arr = array();//试题答案
        foreach ($topic_info['items'] as $item) {
            $type_id = $item['type_id'];
            foreach ($item['options'] as $k => $option) {
                if (in_array($type_id, array(1, 2))) {
                    if ($option['option_correct']) {
                        $topic_answer_arr[] = isset($this->letter_arr[$k]) ? $this->letter_arr[$k] : '';
                    }
                    //处理选项图片
                    $item['options'][$k]['option_content'] = Image::resetImgSize($option['option_content']);
                }else{
                    $topic_answer_arr[] = Image::resetImgSize($option['option_content']);
                }
            }
            $topic_option_arr = $item;
        }


        $html_content_arr = array(
            'topic_id' => $topic_info['id'],
//            'topic_no' => isset($topic_info['topic_no']) ? $topic_info['topic_no'] : 1,
//            'topic_no_desc' => "考点：" . implode(',', $methods),
//            'topic_title' => $topic_info['title'],
            'topic_title' => Image::resetImgSize($topic_info['title']),
            'topic_option' => $topic_option_arr,
            'topic_answer' => '【答案】 '.implode(',',$topic_answer_arr),
            'topic_parse' => '【解析】 '.(isset($topic_info['parse_content'])?Image::resetImgSize($topic_info['parse_content']):'略'),
        );

//        $this->editHtmlContent($html_content_arr);
        return $html_content_arr;
    }

    private function getCssByType()
    {

        return "<style></style>";

    }
}