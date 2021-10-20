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
        $topic_arr = $obj->getTopicHtmlArr($topic_content[0]);

        $css = (new \TopicHtml\TopicArr\TopicCss())->getTopicCss();


        return array($topic_arr,$css);
    }

    public function getTopicContent()
    {

        $str = '[
    {
        "id": 201511100117144,
        "type_id": 20,
        "basic_type_id": 1,
        "type_name": "选择题",
        "subject_id": 41,
        "resource_type": 1,
        "is_large_topic": 0,
        "difficulty": 1,
        "experience_degree": 0.86,
        "difficulty_degree": 0.86,
        "create_time": 1608688922,
        "update_time": 1631864427,
        "subject_name": "数学",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "word：广东省惠州市惠阳区2018-2019学年九年级(上)期中数学试卷（已编辑魏佳怡）（2020-12-23 09:55:59）",
        "title": "<p>下列方程中， 一元二次方程有（ ）<br/>①<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/11/27/1606447354968821.png\" data-type=\"math\"  width=\"127\" height=\"25\" style=\"white-space: normal; width: 95.25pt; height: 18.75pt;\"/>；②<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/23/1608688594909933.png\" style=\"width: 82.85pt; height: 17.85pt\" data-type=\"math\"  width=\"110\" height=\"24\"/>；③<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/23/1608688594350411.png\" style=\"width: 50pt; height: 30pt\" data-type=\"math\"  width=\"66.67\" height=\"40.0\"/>；④<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/11/03/1604372076759452.png\" data-type=\"math\"  width=\"108\" height=\"24\" style=\"white-space: normal; width: 81pt; height: 18pt;\"/>；⑤<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/23/1608688594263347.png\" data-type=\"math\"  width=\"88.0\" height=\"40.0\" style=\"width: 66pt; height: 30pt;\"/></p>",
        "parse_content": "<p>①二次项系数可能为0，错误；②方程含有两个未知数，错误；③不是整式方程，错误；④化简之后无二次项，变为一元一次方程，错误；⑤符合一元二次方程定义，正确．故选：B．<br/></p>",
        "items": [
            {
                "type_id": 20,
                "list_type": 2,
                "options": [
                    {
                        "option_id": 276414,
                        "option_content": "<p><img class=\"gsImgLatex mathType\" width=\"6\" height=\"12\" src=\"http://tkimgs.zhixinhuixue.net/image/word/2021/09/17/1631864145325437.gif\" />个</p>",
                        "option_correct": 1,
                        "option_score": ""
                    },
                    {
                        "option_id": 276415,
                        "option_content": "<p><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/23/1608688594476810.png\" style=\"width: 8pt; height: 13pt\" data-type=\"math\"  width=\"10.67\" height=\"17.33\"/>个</p>",
                        "option_correct": 0,
                        "option_score": ""
                    },
                    {
                        "option_id": 276416,
                        "option_content": "<p><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/23/1608688594769810.png\" style=\"width: 10.2pt; height: 12.75pt\" data-type=\"math\"  width=\"14\" height=\"17\"/>个</p>",
                        "option_correct": 0,
                        "option_score": ""
                    },
                    {
                        "option_id": 276417,
                        "option_content": "<p><img class=\"gsImgLatex mathType\" width=\"7\" height=\"11\" src=\"http://tkimgs.zhixinhuixue.net/image/word/2021/09/17/1631864145150301.gif\" />个</p>",
                        "option_correct": 0,
                        "option_score": ""
                    }
                ]
            }
        ],
        "slave": [],
        "kps": [
            {
                "kp_id": 13305,
                "kp_name": "一元二次方程的定义"
            }
        ],
        "specials": [],
        "affiliate": [
            {
                "topic_affiliate_id": 417070,
                "topic_id": 201511100117144,
                "field_name": "试题质量（※）",
                "field_key": "tag_41_82",
                "field_value": 454
            },
            {
                "topic_affiliate_id": 417071,
                "topic_id": 201511100117144,
                "field_name": "数学素养（※）",
                "field_key": "tag_41_24",
                "field_value": 142
            },
            {
                "topic_affiliate_id": 417072,
                "topic_id": 201511100117144,
                "field_name": "教学进度（※）",
                "field_key": "tag_41_31",
                "field_value": 155
            },
            {
                "topic_affiliate_id": 417073,
                "topic_id": 201511100117144,
                "field_name": "题类",
                "field_key": "tag_41_25",
                "field_value": 165
            },
            {
                "topic_affiliate_id": 417074,
                "topic_id": 201511100117144,
                "field_name": "试题来源",
                "field_key": "tag_41_62",
                "field_value": "2018广东惠州期中"
            },
            {
                "topic_affiliate_id": 417075,
                "topic_id": 201511100117144,
                "field_name": "年份（※）",
                "field_key": "tag_41_153",
                "field_value": 752
            },
            {
                "topic_affiliate_id": 417076,
                "topic_id": 201511100117144,
                "field_name": "试题类型（※）",
                "field_key": "tag_41_28",
                "field_value": 175
            },
            {
                "topic_affiliate_id": 417077,
                "topic_id": 201511100117144,
                "field_name": "地区（※）",
                "field_key": "tag_41_29",
                "field_value": 370
            },
            {
                "topic_affiliate_id": 2778596,
                "topic_id": 201511100117144,
                "field_name": "",
                "field_key": "field_41_20_13",
                "field_value": "<p><span style=\"font-family: 宋体, SimSun;\">此题五个方程将一元二次方程需要注意的五个方面都概括到了，①<span style=\"font-family: 宋体, SimSun;\">“二次项的系数不等于</span><span style=\"font-family: 宋体, SimSun;\">0</span><span style=\"font-family: 宋体, SimSun;\">”；</span>②“一个未知数”；③<span style=\"font-family: 宋体, SimSun;\">“整式方程”</span>；④“化简后”；还有一个<span style=\"font-family: 宋体, SimSun;\">“未知数的最高次数是2”</span>．判断是否为一元二次方程严格按照这五个方面去排除即可.</span></p>"
            }
        ],
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
</head><body>'.$html_content_arr['topic_title'].$html_content_arr['topic_option'].$html_content_arr['topic_answer'].$html_content_arr['topic_parse'].'</body></html>';


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
