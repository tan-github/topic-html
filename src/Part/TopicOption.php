<?php
/**
 * 试题选项部件
 * User: Administrator
 * Date: 2021/6/1
 * Time: 18:06
 */

namespace TopicHtml\Part;


class TopicOption extends Part
{
    /**
     * 部件名称
     * @var string
     */
    protected $part_name = 'topic_option';
    private $option_ul_obj;
    private $option_li_obj;

    public function __construct($part_name = '')
    {
        parent::__construct($part_name);

        $this->option_ul_obj = new TopicOptionUl();
        $this->option_li_obj = new TopicOptionLi();
    }

    public function getPart()
    {
        $option_arr = $this->getHtmlContent();

        //选择题
        if (is_array($option_arr) && $option_arr && in_array($option_arr['type_id'], array(1, 2))) {
            //数学：0纵向 1横向 2一排两个
            //全学科：1:纵向排列 2:横向排列 3:一排两个
            $list_type = $option_arr['list_type'];
            $list_type = $list_type == 0 ? 1 : $list_type;

            if ($list_type == 2) {
                $rate = 25;
            } elseif ($list_type == 3) {
                $rate = 50;
            } else {
                $rate = 100;
            }

            //li
            $style = array('width' => $rate . '%', 'float' => 'left');
            $li_html = '';

            foreach ($option_arr['options'] as $option) {
                $this->option_li_obj->setStyleArr($style);
                $this->option_li_obj->setHtmlContent($option['option_content']);
                $li_html .= $this->option_li_obj->getPart();
            }

            //ul
            $style = array(
                'list-style-type' => 'upper-alpha',
//                'padding' => '0px',
                'padding-left' => '20px',
                'display' => 'block',
                'visibility' => 'hidden',
                'clear' => 'both',
            );
            $this->option_ul_obj->setStyleArr($style);
            $this->option_ul_obj->setHtmlContent($li_html);
            $ul_html = $this->option_ul_obj->getPart();

            //option
            $style = array();
            $this->setStyleArr($style);
            $this->setHtmlContent($ul_html);

            return parent::getPart(); // TODO: Change the autogenerated stub
        }


        return '';
    }
}