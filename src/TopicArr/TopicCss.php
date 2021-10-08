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

        .topic_comm {
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
        }

        .option-li' . TopicHtmlArr::$class_suffix . ' {
            display: -webkit-flex;
            display: flex;
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
    </style>';

        return $str;
    }
}