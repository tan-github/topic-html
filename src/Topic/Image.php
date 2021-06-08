<?php
/**
 * 试题图片处理
 * User: Administrator
 * Date: 2021/6/7
 * Time: 18:26
 */

namespace TopicHtml\Topic;


class Image
{
    //缩放比例
    static private $zoom_scale = 0.6;

    static private $units = array(
        'in' => 96,
        'cm' => 28,
        'mm' => 2.8,
        'pt' => 1.33,
        'pc' => 12,
    );

    /**
     * @return float
     */
    public static function getZoomScale()
    {
        return self::$zoom_scale;
    }

    /**
     * @param float $zoom_scale
     */
    public static function setZoomScale($zoom_scale)
    {
        self::$zoom_scale = $zoom_scale;
    }


    /**
     * 设置图片尺寸
     * @param $content
     * @return mixed
     */
    static public function resetImgSize($content)
    {
        preg_match_all('/(<img[^>]*[\s]+)((src)[\s]*=[\s]*(([\"]([^\"]*)[\"])|([\']([^\']*)[\'])|([^\s]*)))([^>]*>)/si', $content, $arr);

        foreach ($arr[0] as $v) {
            $process_str = self::imgProcess($v);

            $content = str_replace($v, $process_str, $content);
        }

        return $content;
    }

    static private function imgProcess($img)
    {
        $widthArr = array();
        $heightArr = array();
        $width = '';
        $height = '';
        preg_match('/[\s\'"]width\s*:\s*(\d+\.*\d*)\s*([a-zA-Z]+)*/si', $img, $widthArr);
        if ($widthArr) {
            $width = self::lengthProcess($widthArr);

        } else {
            preg_match('/[\s\'"]width\s*=\s*[\'"]\s*(\d+\.*\d*)\s*([a-zA-Z]+)*;?[\'"]/si', $img, $widthArr);
            if ($widthArr) {
                $width = self::lengthProcess($widthArr);
            }
        }
        if ($width) {
            $width = "width=" . $width;
        }
        preg_match('/[\s\'"]height\s*:\s*(\d+\.*\d*)\s*([a-zA-Z]+)*/si', $img, $heightArr);
        if ($heightArr) {
            $height = self::lengthProcess($heightArr);
        } else {
            preg_match('/[\s\'"]height\s*=\s*[\'"]\s*(\d+\.*\d*)\s*([a-zA-Z]+)*;?[\'"]/si', $img, $heightArr);
            if ($heightArr) {
                $height = self::lengthProcess($heightArr);
            }
        }
        if ($height) {
            $height = "height=" . $height;
        }
        $return_img = preg_replace('/<img[^>]*[\s]+(src[\s]*=[\s]*(([\"]([^\"]*)[\"])|([\']([^\']*)[\'])|([^\s]*)))([^>]*>)/si', "<img  " . $width . " " . $height . " $1 />", $img);

        return $return_img;
    }

    static private function lengthProcess($length_arr)
    {

        $length = self::$zoom_scale * $length_arr[1];
        $unit_keys = array_keys(self::$units);
        if (isset($length_arr[2])) {
            //将直接连接单位改为 单位换算
            if (in_array($length_arr[2], $unit_keys)) {
                $length = $length * self::$units[$length_arr[2]];
            } else {
                $length .= $length_arr[2];
            }
        }
        return $length;
    }
}