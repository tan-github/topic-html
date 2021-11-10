<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/1
 * Time: 17:00
 */

require_once __DIR__.'/vendor/autoload.php';
date_default_timezone_set('PRC');

class Test
{
    public function geTest()
    {
        $obj = new \TopicHtml\TopicArr\TopicHtmlArr();
        $topic_content = $this->getTopicContent();
        $topic_arr = array();
        $obj->setIsAllSubject(false);
        foreach ($topic_content as $_topic_content) {
            $topic_arr[] = $obj->getTopicHtmlArr($_topic_content);
        }

        $css = (new \TopicHtml\TopicArr\TopicCss())->getTopicCss();


        return array($topic_arr,$css);
    }

    public function getTopicContent()
    {

        $str = '[
    {
        "id": 607025067,
        "is_large_topic": 0,
        "type_id": 2,
        "title": "<p><img src=\"http://zxhx-pro-1302712961.cos.ap-beijing.myqcloud.com/teacher/uploadfiles/wording/607/2021/11/04/16f17f1237c900f2b4d093c3654649e1.png\" style=\"width: 151.2pt; height: 21.6pt\" width=\"202\" height=\"29\"/></p>",
        "topic_type": 2,
        "bank_type": 0,
        "school_id": 607,
        "type_name": "多选题",
        "difficulty": 3,
        "subject_id": 51,
        "create_time": 1636013437,
        "update_time": 1636027541,
        "subject_name": "高考数学",
        "teacher_tips": "",
        "source": "word上传试题",
        "experience_degree": 0.61,
        "relation_topic": "753605,747016,588187,588183,752868,752866,752854,752701,588182",
        "teaching_quality": 4,
        "source_title": "word上传试题",
        "parse_video": "",
        "parse_content": "",
        "difficulty_degree": 0.61,
        "kps": [
            {
                "topic_id": 607025067,
                "kp_id": 743,
                "kp_name": "直线的方程",
                "section_id": 360,
                "section_name": "<p>直线的方程</p>",
                "chapter_id": 358,
                "chapter_name": "<p>第十三章 直线和圆的方程</p>"
            },
            {
                "topic_id": 607025067,
                "kp_id": 746,
                "kp_name": "对称问题及应用",
                "section_id": 361,
                "section_name": "<p>直线的交点坐标与距离公式</p>",
                "chapter_id": 358,
                "chapter_name": "<p>第十三章 直线和圆的方程</p>"
            }
        ],
        "specials": [
            {
                "topic_id": 607025067,
                "special_id": 582,
                "special_name": "&lt;p&gt;直线的方程&lt;/p&gt;",
                "method_id": 1203,
                "method_name": "直线方程的两点式和截距式方程",
                "kp_id": 743,
                "kp_name": "直线的方程",
                "section_id": 360,
                "section_name": "<p>直线的方程</p>",
                "chapter_id": 358,
                "chapter_name": "<p>第十三章 直线和圆的方程</p>"
            },
            {
                "topic_id": 607025067,
                "special_id": 585,
                "special_name": "&lt;p&gt;对称问题及应用&lt;/p&gt;",
                "method_id": 1209,
                "method_name": "对称问题及应用",
                "kp_id": 746,
                "kp_name": "对称问题及应用",
                "section_id": 361,
                "section_name": "<p>直线的交点坐标与距离公式</p>",
                "chapter_id": 358,
                "chapter_name": "<p>第十三章 直线和圆的方程</p>"
            }
        ],
        "items": [
            {
                "type_id": 2,
                "type_name": "多选题",
                "list_type": 0,
                "title": "",
                "options": [
                    {
                        "option_id": 0,
                        "option_content": "<p><img src=\"http://zxhx-pro-1302712961.cos.ap-beijing.myqcloud.com/teacher/uploadfiles/wording/607/2021/11/04/5b97bf0e443187f90a31f102cc306164.png\" style=\"width: 325px; height: 37px;\" width=\"325\" height=\"37\"/></p>",
                        "option_correct": 1,
                        "option_score": 0
                    },
                    {
                        "option_id": 0,
                        "option_content": "<p><img src=\"http://zxhx-pro-1302712961.cos.ap-beijing.myqcloud.com/teacher/uploadfiles/wording/607/2021/11/04/2edd6a289c6c3559a48acd4432036c1d.png\" style=\"width: 255px; height: 35px;\" width=\"255\" height=\"35\"/></p>",
                        "option_correct": 1,
                        "option_score": 0
                    },
                    {
                        "option_id": 0,
                        "option_content": "<p><img src=\"http://zxhx-pro-1302712961.cos.ap-beijing.myqcloud.com/teacher/uploadfiles/wording/607/2021/11/04/c98b048ff0b754f07fe1330ee5e056de.png\" style=\"width: 425px; height: 44px;\" width=\"425\" height=\"44\"/></p>",
                        "option_correct": 0,
                        "option_score": 0
                    },
                    {
                        "option_id": 0,
                        "option_content": "<p><img src=\"http://zxhx-pro-1302712961.cos.ap-beijing.myqcloud.com/teacher/uploadfiles/wording/607/2021/11/04/45776ab712444abc1fa85a658e601927.png\" style=\"width: 415px; height: 46px;\" width=\"415\" height=\"46\"/></p>",
                        "option_correct": 0,
                        "option_score": 0
                    }
                ]
            }
        ],
        "uses": {
            "total": null,
            "school": 0,
            "oneself": 0
        },
        "slave": null,
        "affiliate": []
    }
]';

        return json_decode($str, true);
    }
}

$test = new Test();
list($_html_content_arr,$css) = $test->geTest();

$html_content = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Title</title>
'.$css.'<br><br>
</head><body>';

foreach ($_html_content_arr as $html_content_arr) {
    $html_content .= '【'.$html_content_arr['topic_id'].'】'.$html_content_arr['topic_title'] . $html_content_arr['topic_option'] . $html_content_arr['topic_answer'] . $html_content_arr['topic_parse'];
}
$html_content .= '</body></html>';


$pdf_obj = new \TopicHtml\Pdf\Pdf();
$pdf_obj->setPhantomjsExec('/usr/local/phantomjs-2.1.1/bin/phantomjs');//2.1

//$pdf_obj->setPhantomjsExec('/usr/local/phantomjs-1.9.8/bin/phantomjs');//1.9
//$pdf_obj->setPhantomjsVer('1.9');

$pdf_obj->setHtmlFile(__DIR__.'/src/Pdf/tmp/test_arr.html');
$pdf_obj->setPdfFile(__DIR__.'/src/Pdf/tmp/test_arr.pdf');
$pdf_obj->saveHtmlFile($html_content);

$rs = $pdf_obj->createPdf();
//$topic_content = $test->getTopicContent();
var_dump($rs);
