<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/9/30
 * Time: 16:05
 */

namespace TopicHtml\TopicArr;


class TopicCss
{
    private $topic_font_size = '9pt';
    private $topic_font_fam = 'STSongti';

    /**
     * @param string $topic_font_size
     */
    public function setTopicFontSize($topic_font_size)
    {
        $this->topic_font_size = $topic_font_size;
    }

    /**
     * @param string $topic_font_fam
     */
    public function setTopicFontFam($topic_font_fam)
    {
        $this->topic_font_fam = $topic_font_fam;
    }



    public function getTopicCss()
    {
        $str = '<style>
        * {
            margin: 0;
            padding: 0;
        }

        .topic-comm {
            font-size: '.$this->topic_font_size.';
            font-family: \''.$this->topic_font_fam.'\';
        }

        .clearfix::after {
            content: \' . \';
            height: 0;
            display: block;
            visibility: hidden;
            clear: both;
        }

        .topic' . TopicHtmlArr::$class_suffix . ' {
            line-height: 16px;
            vertical-align: middle;
            text-align: justify;
        }

        .option-ul' . TopicHtmlArr::$class_suffix . ' {
            list-style: none;
            margin: 4px 0 6px;
        }

        .option-li' . TopicHtmlArr::$class_suffix . ' {
            position: relative;
            line-height: 15px;
        }
        
        .option-li' . TopicHtmlArr::$class_suffix . '>span {
            position: absolute;
        }
        
        .option-li' . TopicHtmlArr::$class_suffix . '>p {
           padding-left: 14px;
        }

        .answer' . TopicHtmlArr::$class_suffix . ' {
            display: -webkit-flex;
            display: flex;
            margin-bottom: 5px;
        }

        .analysis' . TopicHtmlArr::$class_suffix . ' p {
            text-align: justify;
            line-height: 16px;
            display: inline
        }
        
        .y-4 li {
            margin-bottom: 4px;
        }

        .y-4 li:nth-child(4) {
            margin-bottom: 0px;
        }

        .xy-2 {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .xy-2 li {
            width: 50%;
            margin-bottom: 4px;
            box-sizing: border-box;
        }

        .xy-2 li:nth-child(odd) {
            padding-right: 10px;
        }

        .xy-2 li:nth-child(n+3) {
            margin-bottom: 0px;
        }

        .x-4 {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .x-4 li {
            width: 25%;
        }
        
        .x-4 li:nth-child(-n+3) {
            padding-right: 10px;
        }

    </style>';

        return $str;
    }
}