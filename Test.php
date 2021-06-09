<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/1
 * Time: 17:00
 */

require_once 'vendor/autoload.php';
date_default_timezone_set('PRC');

class Test
{
    public function geTest()
    {
        $obj = new \TopicHtml\Topic\PhysicsTopic();
        $obj->setProductTopicType(0);
        $topic_content = $this->getTopicContent();
        $html = $obj->getTopicHtmlContent($topic_content[0]);
        $css = $obj->getCssStyleContent();

        return array($html,$css);
    }

    public function getTopicContent()
    {

        $str = '[
    {
        "id": 201511100000276,
        "type_id": 1,
        "basic_type_id": 1,
        "is_large_topic": 0,
        "type_name": "单选题",
        "difficulty": 1,
        "subject_id": 12,
        "create_time": 1590652297,
        "update_time": 1620716293,
        "subject_name": "物理",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "word：【100所名校】2018-2019学年福建省三明市第一中学高一下学期开学考试物理试题（陈明伟编辑）（陈明伟审）(10+7+0)（2020-05-28 15:18:10）",
        "title": "<p>钓鱼岛群岛自古以来就是中国领土，其附近海域是渔民祖祖辈辈传统的谋生渔场。我国派出海监编队到钓鱼岛海域护渔。如图所示，中国海监46船（甲）和中国海监49船（乙），在钓鱼岛领海内开展例行维权巡航。甲、乙两船并排行驶，甲船上的船员看见钓鱼岛向东移，乙船内的船员发现甲船没有动。如果以钓鱼岛为参照物，上述事实说明（ ）<br/><img src=\"http://tkimgs.zhixinhuixue.net/image/editor/2021/01/21/1611207638449186.png\" title=\"1611207638449186.png\" alt=\"image.png\" width=\"214\" height=\"102\" style=\"width: 214px; height: 102px;\"/></p>",
        "parse_content": "<p>甲船上的船员看见钓鱼岛向东移，以钓鱼岛为参照物，甲船向西运动，乙船内的船员发现甲船没有动。甲、乙两船的速度、行驶的方向应该是一样的。即甲、乙两船以相等的速度都向西运动，故选项D正确。</p>",
        "items": [
            {
                "type_id": 1,
                "options": [
                    {
                        "option_id": 683,
                        "option_content": "<p>甲船向西运动，乙船不动<br/></p>",
                        "option_correct": 0,
                        "option_score": ""
                    },
                    {
                        "option_id": 684,
                        "option_content": "<p>乙船向西运动，甲船不动<br/></p>",
                        "option_correct": 0,
                        "option_score": ""
                    },
                    {
                        "option_id": 685,
                        "option_content": "<p>甲船向西运动，乙船向东运动<br/></p>",
                        "option_correct": 0,
                        "option_score": ""
                    },
                    {
                        "option_id": 686,
                        "option_content": "<p>甲、乙两船以相等的速度都向西运动<br/></p>",
                        "option_correct": 1,
                        "option_score": ""
                    }
                ],
                "list_type": 3
            }
        ],
        "slave": [],
        "kps": [
            {
                "kp_id": 3105,
                "kp_name": "参考系与坐标系"
            }
        ],
        "specials": [],
        "tag": [
            {
                "tag_name": "试题来源",
                "type": 3,
                "field_name": "tag_12_43",
                "field_value": [
                    "2019福建三明一中开学考"
                ]
            },
            {
                "tag_name": "年份",
                "type": 1,
                "field_name": "tag_12_52",
                "field_value": [
                    251
                ]
            },
            {
                "tag_name": "教学进度",
                "type": 2,
                "field_name": "tag_12_159",
                "field_value": [
                    782
                ]
            },
            {
                "tag_name": "物理思想",
                "type": 2,
                "field_name": "tag_12_155",
                "field_value": [
                    769
                ]
            },
            {
                "tag_name": "题型方法",
                "type": 2,
                "field_name": "tag_12_8",
                "field_value": [
                    109
                ]
            },
            {
                "tag_name": "物理学科素养",
                "type": 2,
                "field_name": "tag_12_13",
                "field_value": [
                    41
                ]
            },
            {
                "tag_name": "试题情景",
                "type": 2,
                "field_name": "tag_12_14",
                "field_value": [
                    30
                ]
            },
            {
                "tag_name": "题型类别",
                "type": 2,
                "field_name": "tag_12_11",
                "field_value": [
                    70
                ]
            },
            {
                "tag_name": "新颖等级",
                "type": 1,
                "field_name": "tag_12_55",
                "field_value": [
                    254
                ]
            },
            {
                "tag_name": "考试类型",
                "type": 2,
                "field_name": "tag_12_17",
                "field_value": [
                    84,
                    85,
                    86
                ]
            }
        ],
        "custom_column": [],
        "experience_degree": 0.86,
        "difficulty_degree": 0.86,
        "parse_video": "",
        "teacher_tips": "",
        "teaching_quality": "",
        "teaching_thought": "",
        "relation_method": "",
        "uses": {
            "total": 0,
            "school": 0,
            "oneself": 0
        }
    }
]';

        return json_decode($str, true);
    }
}

$test = new Test();
list($html_content_arr,$css) = $test->geTest();

$html_content = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Title</title>
'.$css.'<br><br>
</head><body>'.$html_content_arr['topic_html'].$html_content_arr['answer_parse_html'].'</body></html>';


$pdf_obj = new \TopicHtml\Pdf\Pdf();
$pdf_obj->setPhantomjsExec('/usr/local/phantomjs/bin/phantomjs');//2.1

//$pdf_obj->setPhantomjsExec('/usr/local/phantomjs-1.9.8/bin/phantomjs');//1.9
//$pdf_obj->setPhantomjsVer('1.9');

//$pdf_obj->setHtmlFile('/www/topic-html/src/Pdf/tmp/test222.html');
//$pdf_obj->saveHtmlFile($html_content);

$rs = $pdf_obj->createPdf();
//$topic_content = $test->getTopicContent();
var_dump($rs);
