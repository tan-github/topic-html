<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/4
 * Time: 16:57
 */

namespace TopicHtml\Topic;


use TopicHtml\Part\TopicOption;

class PhysicsTopic extends TopicBase
{
    //0=>array(错题，) 1=>array(提分题，)
    private $product_topic_type = 0;

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

    public function __construct()
    {
        parent::__construct();

    }

    public function getTopicHtmlContent(&$topic_info, $params = array())
    {

        // TODO: Implement getTopicHtmlContent() method.
        $html_content_arr = $this->getPhysicTopicHtmlContent($topic_info);

        $part_class_arr = array(
            'topic_option' => TopicOption::class,
        );


        $tpl_obj = $this->getTplObj();
        //模板结构
        $this->editTpl();

        $tpl_obj->setHtmlContentArr($html_content_arr);
        $tpl_obj->setPartClassArr($part_class_arr);

        $html = $tpl_obj->getTplHtml();


        return $html;
    }

    private function getPhysicTopicHtmlContent(&$topic_info)
    {
//        $subject_id = $topic_info['subject_id'];
//        $topic_type = $topic_info['type_id'];
//        $parse_content = $topic_info['parse_content'];

        $topic_option_arr = array();
        foreach ($topic_info['items'] as $item) {
            foreach ($item['options'] as $option) {
                $topic_option_arr[] = $option['option_content'];
            }
            $topic_option_arr = $item;
        }
        $kps = array();
        if (isset($topic_info['kps']) && $topic_info['kps']) {
            foreach ($topic_info['kps'] as $_kps) {
                $kps[] = $_kps['kp_name'];
            }
        }


        $html_content_arr = array(
            'topic_id' => $topic_info['id'],
            'topic_no' => isset($topic_info['topic_no'])?$topic_info['topic_no']:1,
            'topic_no_desc' => "考点：" . implode(',', $kps),
            'topic_title' => $topic_info['title'],
            'topic_option' => $topic_option_arr,
        );

        $this->editHtmlContent($html_content_arr);
        return $html_content_arr;
    }

    /**
     * 编辑模板
     */
    private function editTpl()
    {
        if ($this->product_topic_type == 1) {//提分题
            $topic_header_part = array(
                'label_name' => 'img',
                'attribute_arr' => array('src' => 'http://zsyapi.testing.xueping.com/statics/images/physics_isp/train.png'));

            $this->getTplObj()->addTplPart('topic_header', $topic_header_part);
        } else {
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
            $this->getTplObj()->addTplPart('topic_no_wrap', $topic_no_wrap_part);
        }

    }

    /**
     * 编辑html内容
     * @param $html_content_arr
     */
    private function editHtmlContent(&$html_content_arr)
    {
        if ($this->product_topic_type == 1) {//提分题
            $html_content_arr['topic_no'] = $html_content_arr['topic_no'] . '.【' . $html_content_arr['topic_id'] . '】';
        } else {
            $html_content_arr['topic_no'] = '第' . $html_content_arr['topic_no'] . '题.【' . $html_content_arr['topic_id'] . '】';
        }
    }

    private function getCssByType()
    {
        $style_0 = "<style>
        .topic_no {
            color: #ffffff;
            text-align: center;
            line-height: 4.5mm;
            height: 4.5mm;
            padding-left: 3mm;
            position: relative;
            display: inline-block;
        }

        .topic_no:after {
            position: absolute;
            content: '';
            width: 2.28mm;
            height: 2.28mm;
            background: #fff;
            border-radius: 50%;
            left: -0.9mm;
            top: 50%;
            margin-top: -1mm;
        }

        .topic_no_desc {
            margin-left: 1mm;
            line-height: 3.8mm;
        }

    </style>";
        $style_1 = "<style>
        .topic_header {
            position: absolute;
            width: 18mm;
            margin-top: -2.4mm;
            margin-left: -3.3mm;
        }
    </style>";


        $style_name = 'style_' . $this->product_topic_type;

        return $$style_name;

    }
}