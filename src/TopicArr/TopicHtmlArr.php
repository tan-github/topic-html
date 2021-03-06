<?php
/**
 * 试题html数组
 * User: Administrator
 * Date: 2021/9/30
 * Time: 15:11
 */

namespace TopicHtml\TopicArr;


class TopicHtmlArr
{
    //字母数组
    protected $letter_arr = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "O", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    //css类名后缀
    static public $class_suffix = '-202109';
    /**
     * 默认是全学科
     * @var bool
     */
    private $is_all_subject = true;
    /**
     * 是否显示答案和解析，例：【答案】
     * @var bool
     */
    private $is_show_answer_parse = true;

    /**
     *
     */
    private $topic_arr_obj = null;

    /**
     * @param bool $is_all_subject
     */
    public function setIsAllSubject($is_all_subject)
    {
        $this->is_all_subject = $is_all_subject;
    }

    /**
     * @param bool $is_show_answer_parse
     */
    public function setIsShowAnswerParse($is_show_answer_parse)
    {
        $this->is_show_answer_parse = $is_show_answer_parse;
    }



    public function getTopicHtmlArr(&$topic_info, $params = array())
    {
        $topic_arr_obj = new TopicArr();
        $this->topic_arr_obj = $topic_arr_obj;
        $topic_arr = $topic_arr_obj->getTopicArr($topic_info,$params);

        $basic_type_id = isset($topic_info['basic_type_id']) ? $topic_info['basic_type_id'] : 0;
        
        $topic_arr['topic_title'] = $this->getTopicTitle($topic_arr['topic_title']);
        $topic_arr['topic_option'] = $this->getTopicOption($topic_arr['topic_option'],$topic_arr['is_select_topic']);
        $topic_arr['topic_answer'] = $this->getTopicAnswer($topic_arr['topic_answer'],$basic_type_id);
        $topic_arr['topic_parse'] = $this->getTopicParse($topic_arr['topic_parse']);


        return $topic_arr;
    }

    private function getTopicTitle($topic_title)
    {
        $str = '<div class="topic-common topic-stem' . self::$class_suffix . '">' . $topic_title . '</div>';

        return $str;
    }

    private function getTopicOption($option_arr,$is_select_topic = 0)
    {
        //选择题
        if (is_array($option_arr) && $option_arr && $is_select_topic) {
            //数学：0纵向 1横向 2一排两个
            //全学科：1:纵向排列 2:横向排列 3:一排两个
            $list_type = $option_arr['list_type'];

            if ($this->is_all_subject) {
                if ($list_type == 2) {
                    $ul_class = 'x-4';
                } elseif ($list_type == 3) {
                    $ul_class = 'xy-2';
                } else {
                    $ul_class = 'y-4';
                }
            }else{
                if ($list_type == 1) {
                    $ul_class = 'x-4';
                } elseif ($list_type == 2) {
                    $ul_class = 'xy-2';
                } else {
                    $ul_class = 'y-4';
                }
            }


            $li_str_arr = array();
            foreach (array_values($option_arr['options']) as $key => $option) {
                $letter = isset($this->letter_arr[$key]) ? $this->letter_arr[$key] : '';
                $li_str_arr[] = '<li class="option-li' . self::$class_suffix . '">
            <span class="option-label' . self::$class_suffix . '">' . $letter . '.</span>
            <div class="option-content' . self::$class_suffix . '">'. $option['option_content'] . '</div>
        </li>';
            }

            $ul_str = '<ul class="topic-common option-ul' . self::$class_suffix . ' clearfix '.$ul_class.'">' . implode('', $li_str_arr) . '</ul>';

            return $ul_str;
        }

    }

    private function getTopicAnswer($topic_answer,$basic_type_id = 0)
    {

        if ($this->is_show_answer_parse) {
            $txt = '<span class="answer-label' . self::$class_suffix . '">【答案】</span>';
        }else{
            $txt = '';
        }
        $str = '<div class="topic-common answer' . self::$class_suffix . '">
            ' . $txt . '
            <div class="'.($basic_type_id == 6?'long-empty':'answer-content' . self::$class_suffix . '').'">' . $topic_answer . '</div>
        </div>';

        return $str;
    }

    private function getTopicParse($topic_parse)
    {
        if ($this->is_show_answer_parse) {
            $txt = '<span class="analysis-label' . self::$class_suffix . '">【解析】</span>';
        }else{
            $txt = '';
        }
        $str = '<div class="topic-common analysis' . self::$class_suffix . '">
            ' . $txt . '
            <div class="analysis-content' . self::$class_suffix . '">' . $topic_parse . '</div>
        </div>';

        return $str;
    }
}