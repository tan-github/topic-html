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

        .clearfix::after {
            content: \'.\';
            height: 0;
            display: block;
            visibility: hidden;
            clear: both;
        }

        .topic-common {
            font-size: '.$this->topic_font_size.';
            font-family: \''.$this->topic_font_fam.'\';
        }

        .topic-stem' . TopicHtmlArr::$class_suffix . ' {
            line-height: 16px;
            text-align: justify;
            vertical-align: middle;
            margin-bottom: 8px;
        }

        .option-ul' . TopicHtmlArr::$class_suffix . ' {
            list-style: none;
            margin-bottom: 8px;
        }

        .option-li' . TopicHtmlArr::$class_suffix . ' {
            position: relative;
            line-height: 16px;
        }
        
        .option-li' . TopicHtmlArr::$class_suffix . ' .option-label' . TopicHtmlArr::$class_suffix . ' {
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .option-li' . TopicHtmlArr::$class_suffix . ' .option-content' . TopicHtmlArr::$class_suffix . ' {
            margin-left: 12px;
            text-align: justify;
        }

        .answer' . TopicHtmlArr::$class_suffix . ' {
            display: -webkit-flex;
            display: flex;
            margin-bottom: 6px;
        }
        
        .answer' . TopicHtmlArr::$class_suffix . ' .long-empty {
            display: -webkit-flex;
            display: flex;
        }

        .answer' . TopicHtmlArr::$class_suffix . ' .answer-label' . TopicHtmlArr::$class_suffix . ' {
            margin-left: -5px;
        }

        .answer' . TopicHtmlArr::$class_suffix . ' .answer-content' . TopicHtmlArr::$class_suffix . ' img {
            vertical-align: middle;
        }

        .analysis' . TopicHtmlArr::$class_suffix . ' .analysis-label' . TopicHtmlArr::$class_suffix . ' {
            margin-left: -5px;
            margin-right: -5px;
        }

        .analysis' . TopicHtmlArr::$class_suffix . ' .analysis-content' . TopicHtmlArr::$class_suffix . ' {
            text-align: justify;
            line-height: 16px;
            display: inline
        }

        .analysis' . TopicHtmlArr::$class_suffix . ' .analysis-content' . TopicHtmlArr::$class_suffix . '  img {
            vertical-align: middle;
        }
        
        .y-4 li {
            margin-bottom: 6px;
        }

        .y-4 li:last-child {
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
            margin-bottom: 6px;
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