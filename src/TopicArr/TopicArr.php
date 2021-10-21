<?php
/**
 * 试题数组
 * User: Administrator
 * Date: 2021/9/30
 * Time: 14:21
 */
namespace TopicHtml\TopicArr;

use TopicHtml\Topic\Image;

class TopicArr
{
    //字母数组
    protected $letter_arr = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "O", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    /**
     * 获取试题数组
     * @param $topic_info
     * @param array $params
     * @return array
     */
    public function getTopicArr(&$topic_info, $params = array())
    {
        if(!$topic_info) return array();

        $is_select_topic = $this->isSelectTopic($topic_info);
        $topic_option_arr = array();//选项
        $topic_answer_arr = array();//试题答案
        foreach ($topic_info['items'] as $item) {
            foreach ($item['options'] as $k => $option) {
                if ($is_select_topic) {
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

        $methods = array();
        if (isset($topic_info['specials']) && $topic_info['specials']) {
            foreach ($topic_info['specials'] as $_methods) {
                $methods[] = $_methods['method_name'];
            }
        }

        $kps = array();
        if (isset($topic_info['kps']) && $topic_info['kps']) {
            foreach ($topic_info['kps'] as $_kps) {
                $kps[] = $_kps['kp_name'];
            }
        }

        $topic_arr = array(
            'topic_id' => $topic_info['id'],
            'type_id' => $topic_info['type_id'],
            'is_select_topic' => $is_select_topic,
            'basic_type_id' => isset($topic_info['basic_type_id']) ? $topic_info['basic_type_id'] : 0,
            'source' => isset($topic_info['source']) ? $topic_info['source'] : '',
            'topic_type' => $topic_info['type_id'],
            'subject_id' => $topic_info['subject_id'],
            'difficulty_degree' => $topic_info['difficulty_degree'],
            'teacher_tips' => Image::resetImgSize(isset($topic_info['teacher_tips']) ? $topic_info['teacher_tips'] : ''),
            'topic_methods' => $methods,
            'topic_kps' => $kps,
            'topic_title' => Image::resetImgSize($topic_info['title']),
            'topic_option' => $topic_option_arr,
            'topic_answer' => implode(',', $topic_answer_arr),
            'topic_parse' => (isset($topic_info['parse_content']) ? Image::resetImgSize($topic_info['parse_content']) : '略'),
        );

        return $topic_arr;
    }

    /**
     * 判断是否是选择题
     * @param $item
     * @return bool
     */
    private function isSelectTopic(&$topic_info)
    {
        $basic_type_id = isset($topic_info['basic_type_id']) ? $topic_info['basic_type_id'] : 0;
        $type_id = $topic_info['type_id'];

        if (in_array($basic_type_id, array(1, 2, 3, 4))) {
            return true;
        }

        if (in_array($type_id, array(1, 2))) {
            return true;
        }

        return false;
    }
}