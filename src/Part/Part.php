<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/1
 * Time: 17:00
 */

namespace TopicHtml\Part;

class Part
{

    //部件名称
    protected $part_name = '';
    //样式class名称
    protected $style_class_name = '';
    //样式数组
    protected $style_arr = array();
    //部件HTML内容
    protected $html_content = '';
    //是否显示
    protected $is_show = true;
    //html 标签
    protected $html_label = 'div';
    //额外的样式类
    protected $extra_class_name_arr = array();
    //属性数组
    private $attribute_arr = array();
    //css类名后缀
    static public $css_class_suffix = '_xxxxx';


    public function __construct($part_name = '')
    {
        if ($part_name) {
            $this->part_name = $part_name;
        }
        $this->setStyleClassName($this->part_name);
        $this->setStyleId($this->part_name);
    }

    /**
     * @return string
     */
    public function getPartName()
    {
        return $this->part_name;
    }

    /**
     * @param string $part_name
     */
    public function setPartName($part_name)
    {
        $this->part_name = $part_name;
    }


    /**
     * @return string
     */
    public function getStyleClassName()
    {
        return $this->style_class_name;
    }

    /**
     * @param string $style_class_name
     */
    public function setStyleClassName($style_class_name)
    {
        $this->style_class_name = $style_class_name;
    }

    /**
     * @return string
     */
    public function getStyleId()
    {
        return $this->style_id;
    }

    /**
     * @param string $style_id
     */
    public function setStyleId($style_id)
    {
        $this->style_id = $style_id;
    }

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
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->html_content;
    }

    /**
     * @param string $html_content
     */
    public function setHtmlContent($html_content)
    {
        $this->html_content = $html_content;
    }

    /**
     * @return bool
     */
    public function isShow()
    {
        return $this->is_show;
    }

    /**
     * @param bool $is_show
     */
    public function setIsShow($is_show)
    {
        $this->is_show = $is_show;
    }

    /**
     * @return string
     */
    public function getHtmlLabel()
    {
        return $this->html_label;
    }

    /**
     * @param string $html_label
     */
    public function setHtmlLabel($html_label)
    {
        $this->html_label = $html_label;
    }

    /**
     * @return array
     */
    public function getExtraClassNameArr()
    {
        return $this->extra_class_name_arr;
    }

    /**
     * @param array $extra_class_name_arr
     */
    public function setExtraClassNameArr($extra_class_name_arr)
    {
        $this->extra_class_name_arr = $extra_class_name_arr;
    }

    /**
     * @return array
     */
    public function getAttributeArr()
    {
        return $this->attribute_arr;
    }

    /**
     * @param array $attribute_arr
     */
    public function setAttributeArr($attribute_arr)
    {
        $this->attribute_arr = $attribute_arr;
    }


    /**
     * 获取部件HTML
     * @return string
     */
    public function getPart()
    {
        //行内样式
        $style = '';
        if ($this->getStyleArr()) {
            $_st_arr = array();
            foreach ($this->getStyleArr() as $key => $value) {
                $_st_arr[] = $key . ':' . $value;
            }

            $style = implode(';', $_st_arr);
        }

        //属性
        $attribute_str_arr = array();
        foreach ($this->getAttributeArr() as $key => $value) {
            $attribute_str_arr[] = $key . '="' . $value . '"';
        }

        //html
        $str = '';
        if ($this->isShow()) {
            //类名
            $class_name_arr = $this->getExtraClassNameArr();
            $class_name_arr[] = $this->style_class_name . self::$css_class_suffix;
            $class_name_arr = array_reverse($class_name_arr);
//            $str .= '<'.$this->html_label.' class="' . $this->style_class_name . '" id="' . $this->style_id . '" style="' . $style . '">';
            $str .= '<' . $this->html_label . ' class="' . implode(' ', $class_name_arr) . '" style="' . $style . '"  ' . implode(' ', $attribute_str_arr) . '>';
            $str .= $this->getHtmlContent();
            if (!in_array($this->html_label, array('img'))) {
                $str .= "</{$this->html_label}>";
            }
        }

        return $str;
    }

}