<?php

namespace TopicHtml\Tpl;

use TopicHtml\Part\Part;


/**
 * 试题模板
 * User: Administrator
 * Date: 2021/6/1
 * Time: 16:15
 */
class TplNormal
{
    //行内样式数组
    private $style_arr = array();
    //html内容数组
    private $html_content_arr = array();
    //组件类数组
    private $part_class_arr = array();
    //是否使用行内样式
    private $is_use_inline_style = true;
    //模板结构
    private $tpl_structure = array();
    //css 样式数组
    private $css_style_arr = array();

    //组件HTML数组
    private static $part_html_arr = array();
    //当前级组件对象
    private static $cur_part_obj;

    /**
     * @return array
     */
    public function getStyleArr()
    {
        return $this->style_arr;
    }

    /**
     * @param array $style_arr
     */
    public function setStyleArr($style_arr)
    {
        $this->style_arr = $style_arr;
    }

    /**
     * @return array
     */
    public function getHtmlContentArr()
    {
        return $this->html_content_arr;
    }

    /**
     * @param array $html_content_arr
     */
    public function setHtmlContentArr($html_content_arr)
    {
        $this->html_content_arr = $html_content_arr;
    }

    /**
     * @return array
     */
    public function getPartClassArr()
    {
        return $this->part_class_arr;
    }

    /**
     * @param array $part_class_arr
     */
    public function setPartClassArr($part_class_arr)
    {
        $this->part_class_arr = $part_class_arr;
    }

    /**
     * @return bool
     */
    public function getIsUseInlineStyle()
    {
        return $this->is_use_inline_style;
    }

    /**
     * @param bool $is_use_inline_style
     */
    public function setIsUseInlineStyle($is_use_inline_style)
    {
        $this->is_use_inline_style = $is_use_inline_style;
    }

    /**
     * @return array
     */
    public function getCssStyleArr()
    {
        return $this->css_style_arr;
    }

    /**
     * @param array $css_style_arr
     */
    public function setCssStyleArr($css_style_arr)
    {
        $this->css_style_arr = $css_style_arr;
    }


    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        //css 样式
        $css_style_arr = array(
            '.topic_border' . Part::$css_class_suffix.',.topic_answer_parse_border'. Part::$css_class_suffix => array(
                'font-size' => '12px',
                'line-height' => '16px',
                'vertical-align' => 'middle',
                'text-align' => 'justify',
//                'padding' => '10px',
                'overflow' => 'hidden',
//                'border' => '1px solid red'
            ),
            '.topic_border' . Part::$css_class_suffix . ' img,'.'.topic_answer_parse_border' . Part::$css_class_suffix . ' img' => array(
                'vertical-align' => 'middle',
            )
        );
        $this->setCssStyleArr($css_style_arr);

        //基础模板
        $this->setTplStructure($this->getBaseTpl());
    }

    /**
     * @return array
     */
    public function getTplStructure()
    {
        return $this->tpl_structure;
    }

    /**
     * @param array $tpl_structure
     */
    public function setTplStructure($tpl_structure)
    {
        $this->tpl_structure = $tpl_structure;
    }


    /**
     * 添加css样式
     * @param $css_style_arr
     */
    public function addCssStyle($css_style_arr)
    {
        foreach ($css_style_arr as $key => $value) {
            if (isset($this->css_style_arr[$key])) {
                foreach ($value as $k => $v) {
                    $this->css_style_arr[$key][$k] = $v;
                }
            } else {
                $this->css_style_arr[$key] = $value;
            }
        }

    }

    /**
     * 获取css 标签样式内容
     */
    public function getCssStyleLabelContent()
    {
        $label_content_arr = array();
        $label_content_arr[] = "<style>";
        foreach ($this->css_style_arr as $class_name => $style_arr) {
            $_style_arr = array();
            foreach ($style_arr as $key => $value) {
                $_style_arr[] = $key . ':' . $value;
            }
            $label_content_arr[] = $class_name . '{' . implode(';', $_style_arr) . '}';
        }
        $label_content_arr[] = "</style>";

        return implode(PHP_EOL, $label_content_arr);
    }


    /**
     * 获取HTML
     * @return mixed
     */
    public function getTplHtml()
    {
        self::$part_html_arr = array();
        $tpl_structure = $this->getTplStructure();

        $this->__getHtml($tpl_structure);

        return implode('', self::$part_html_arr);
    }

    /**
     * 答案和解析
     */
    public function getTplHtmlAnswerParse()
    {
        self::$part_html_arr = array();
        $tpl_structure = array(
            'topic_answer_parse_border' => array(//部件名称（默认div）
                //包含的子部件
                'part_arr' => array(
                    'topic_answer' => array(),//试题答案
                    'topic_parse' => array(),//试题解析
                )
            ),
        );

        $this->__getHtml($tpl_structure);

        return implode('', self::$part_html_arr);
    }

    /**
     * 获取HTML
     * @return mixed
     */
    private function __getHtml($arr)
    {
        foreach ($arr as $part_name => $value) {
            if (isset($value['part_arr']) && is_array($value['part_arr']) && $value['part_arr']) {
                $this->__getHtml($value['part_arr']);

                if (self::$part_html_arr) {
                    self::$cur_part_obj = $this->getPartObj($part_name, $value);
                    self::$cur_part_obj->setHtmlContent(implode('', self::$part_html_arr));
                    self::$part_html_arr = array();
                    self::$part_html_arr[] = self::$cur_part_obj->getPart();
                }
                continue;
            } elseif (is_array($value)) {
                //其它属性
            } else {
                $part_name = $value;
            }

            $part_obj = $this->getPartObj($part_name, $value);

            self::$part_html_arr[] = $part_obj->getPart();
        }
    }

    /**
     * 获取部件对象
     * @param $part_name
     * @param array $value
     * @return Part
     */
    private function getPartObj($part_name, $value = array())
    {
        if (isset($this->part_class_arr[$part_name])) {
            $part_obj = $this->part_class_arr[$part_name];
        } else {
            $part_obj = new Part($part_name);
        }

        if (isset($this->html_content_arr[$part_name]) && $this->html_content_arr[$part_name]) {
            $part_obj->setHtmlContent($this->html_content_arr[$part_name]);
        }
        if (isset($value['style_arr']) && $value['style_arr']) {
            $part_obj->setStyleArr($value['style_arr']);
        }
        if (isset($value['label_name']) && $value['label_name']) {
            $part_obj->setHtmlLabel($value['label_name']);
        }
        if (isset($value['extra_class_arr']) && $value['extra_class_arr']) {
            $part_obj->setExtraClassNameArr($value['extra_class_arr']);
        }
        if (isset($value['attribute_arr']) && $value['attribute_arr']) {
            $part_obj->setAttributeArr($value['attribute_arr']);
        }

        return $part_obj;
    }


    /**
     * 通过key设置样式
     * @param $part_name 部件名称
     * @param $style_arr 样式数组  如：array('color' => 'red')
     */
    public function setStyleByPartName($part_name, $style_arr)
    {
        if (!isset($this->style_arr[$part_name])) {
            $this->style_arr[$part_name] = array();
        }
        foreach ($style_arr as $k => $v) {
            $this->style_arr[$part_name][$k] = $v;
        }
    }

    /**
     * 获取标签样式
     * @return string
     */
    public function getStyleLable()
    {
        $style_str = "<style>";

        $_st_arr = array();
        foreach ($this->getStyleArr() as $part_name => $style_arr) {
            $_style_arr = array();
            foreach ($style_arr as $key => $value) {
                $_style_arr[] = $key . ':' . $value;
            }
            $_st_arr[] = '.' . $part_name . '{' . implode(':', $_style_arr) . '}';
        }
        $style_str .= implode(';', $_st_arr);

        $style_str .= "</style>";

        return $style_str;
    }

    /**
     * 模板结构结构
     * @return array
     */
    private function getBaseTpl()
    {

        $tpl_structure = array(
            'topic_border' => array(//部件名称（默认div）
                //包含的子部件
                'part_arr' => array(
//                    'topic_header' => array(),//试题题号上部模块
//                    'topic_no_wrap' => array(),//题号模块
                    'topic_title' => array(),//题干模块
                    'topic_option' => array(),//选项模块
                ),
//                'label_name' => 'img',//hmtl标签名称
//                'attribute_arr' => array('src'=>'http://27/1590550332524382.png'),//属性数组
//                'style_arr' => array('border' => '1px solid red'),//行内样式
//                'extra_class_arr' => array('border2'),//增加额外内名称

            ),
        );

        return $tpl_structure;
    }

    /**
     * 添加tpl组件（二级）
     * @param $part_name
     * @param $add_part_arr
     */
    public function addTplPart($part_name, $add_part_arr)
    {
        $this->tpl_structure['topic_border']['part_arr'][$part_name] = $add_part_arr;

    }
}