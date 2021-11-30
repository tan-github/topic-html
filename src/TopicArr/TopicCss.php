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
    private $topic_font_fam = 'SimSun';

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
            page-break-inside: avoid !important;
        }

        .topic-common img {
            vertical-align: middle;
        }

        .topic-stem' . TopicHtmlArr::$class_suffix . ' {
            line-height: 1.25em;
            text-align: justify;
            margin-bottom: 1em;
        }

        .option-ul' . TopicHtmlArr::$class_suffix . ' {
            list-style: none;
            margin-bottom: 1em;
        }

        .option-li' . TopicHtmlArr::$class_suffix . ' {
            position: relative;
            line-height: 1.25em;
        }
        
        .option-li' . TopicHtmlArr::$class_suffix . ' .option-label' . TopicHtmlArr::$class_suffix . ' {
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .option-li' . TopicHtmlArr::$class_suffix . ' .option-content' . TopicHtmlArr::$class_suffix . ' {
            margin-left: 1em;
            text-align: justify;
        }

        .answer' . TopicHtmlArr::$class_suffix . ' {
            display: -webkit-flex;
            display: flex;
            margin-bottom: 0.5em;
        }
        
        .answer' . TopicHtmlArr::$class_suffix . ' .long-empty {
            display: -webkit-flex;
            display: flex;
        }

        .answer' . TopicHtmlArr::$class_suffix . ' .answer-label' . TopicHtmlArr::$class_suffix . ' {
            margin-left: -0.4em;
        }

        .analysis' . TopicHtmlArr::$class_suffix . ' {
            position: relative;
        }

        .analysis' . TopicHtmlArr::$class_suffix . ' .analysis-label' . TopicHtmlArr::$class_suffix . ' {
            position: absolute;
            left: -0.4em;
        }

        .analysis' . TopicHtmlArr::$class_suffix . ' .analysis-content' . TopicHtmlArr::$class_suffix . ' {
            text-align: justify;
            text-indent: 3.5em;
            line-height: 1.25em;
        }
        
        .y-4 li {
            margin-bottom: 0.5em;
        }

        .y-4 li:last-child {
            margin-bottom: 0;
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
            margin-bottom: 0.5em;
            box-sizing: border-box;
        }

        .xy-2 li:nth-child(odd) {
            padding-right: 1em;
        }

        .xy-2 li:nth-child(n+3) {
            margin-bottom: 0;
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
            padding-right: 1em;
        }

    </style>';

        return $str;
    }
}