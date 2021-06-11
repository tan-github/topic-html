<?php
/**
 * 一般试题html
 * User: Administrator
 * Date: 2021/6/4
 * Time: 16:57
 */

namespace TopicHtml\Topic;


use TopicHtml\Part\TopicOption;

class TopicNormal extends TopicBase
{

    public function __construct()
    {
        parent::__construct();

    }

    public function getTopicHtmlContent(&$topic_info, $params = array())
    {

        // TODO: Implement getTopicHtmlContent() method.
        $subject_id = $topic_info['subject_id'];
        $html_content_arr = $this->getPhysicTopicHtmlContent($topic_info);

        $topic_option_obj = new TopicOption();
        if (in_array($subject_id, array(3, 6, 51))) {
            $topic_option_obj->setIsAllSubject(false);
        }
        $part_class_arr = array(
            'topic_option' => $topic_option_obj,
        );

        $tpl_obj = $this->getTplObj();

        //试题题干和选项
        $tpl_obj->setHtmlContentArr($html_content_arr);
        $tpl_obj->setPartClassArr($part_class_arr);

        $topic_html = $tpl_obj->getTplHtml();

        //试题答案和解析
        $tpl_obj->setHtmlContentArr($html_content_arr);
        $answer_parse_html = $tpl_obj->getTplHtmlAnswerParse();

        $kps = array();
        if (isset($topic_info['kps']) && $topic_info['kps']) {
            foreach ($topic_info['kps'] as $_kps) {
                $kps[] = $_kps['kp_name'];
            }
        }

        return array(
            'topic_type' => $topic_info['type_id'],
            'topic_kps' => $kps,
            'topic_html' => $topic_html,
            'answer_parse_html' => $answer_parse_html,
        );
    }

    private function getPhysicTopicHtmlContent(&$topic_info)
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
//            'topic_no_desc' => "考点：" . implode(',', $kps),
//            'topic_title' => $topic_info['title'],
            'topic_title' => Image::resetImgSize($topic_info['title']),
            'topic_option' => $topic_option_arr,
            'topic_answer' => '【答案】 '.implode(',',$topic_answer_arr),
            'topic_parse' => '【解析】 '.(isset($topic_info['parse_content'])?Image::resetImgSize($topic_info['parse_content']):'略'),
        );

        return $html_content_arr;
    }

}