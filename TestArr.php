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
        "id": 201511100077769,
        "type_id": 20,
        "basic_type_id": 1,
        "type_name": "选择题",
        "subject_id": 41,
        "resource_type": 1,
        "is_large_topic": 0,
        "difficulty": 3,
        "experience_degree": 0.61,
        "difficulty_degree": 0.61,
        "create_time": 1603956342,
        "update_time": 1634546807,
        "subject_name": "数学",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "word：2019年内蒙古赤峰市中考数学试卷(已编辑)(已一审zl)（2020-10-29 08:46:23）",
        "title": "<p>如图，小聪用一张面积为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110189263.png\" style=\"width: 7.2pt; height: 14.4pt\" data-type=\"math\"  width=\"10\" height=\"19\"/>的正方形纸片，按如下方式操作：<br/>①将正方形纸片四角向内折叠，使四个顶点重合，展开后沿折痕剪开，把四个等腰直角三角形扔掉；<br/>②在余下纸片上依次重复以上操作，当完成第<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110173758.png\" style=\"width: 28.8pt; height: 14.4pt\" data-type=\"math\"  width=\"38\" height=\"19\"/>次操作时，余下纸片的面积为（ &nbsp;）<br/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110762628.png\" width=\"95\" height=\"95\"/></p>",
        "parse_content": "<p>正方形纸片四角向内折叠，使四个顶点重合，展开后沿折痕剪开，第一次：余下面积<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110961943.png\" style=\"width: 36pt; height: 28.8pt\" data-type=\"math\"  width=\"48\" height=\"38\"/>；第二次：余下面积<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110521910.png\" style=\"width: 43.2pt; height: 28.8pt\" data-type=\"math\"  width=\"58\" height=\"38\"/>；第三次：余下面积<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110228808.png\" style=\"width: 36pt; height: 28.8pt\" data-type=\"math\"  width=\"48\" height=\"38\"/>；当完成第<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110279624.png\" style=\"width: 28.8pt; height: 14.4pt\" data-type=\"math\"  width=\"38\" height=\"19\"/>次操作时，余下纸片的面积为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110538521.png\" style=\"width: 57.6pt; height: 28.8pt\" data-type=\"math\"  width=\"77\" height=\"38\"/>．故选C．</p>",
        "items": [
            {
                "type_id": 20,
                "list_type": 2,
                "options": [
                    {
                        "option_id": 207189,
                        "option_content": "<p><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110765178.png\" style=\"width: 21.6pt; height: 14.4pt\" data-type=\"math\"  width=\"29\" height=\"19\"/> </p>",
                        "option_correct": 0,
                        "option_score": ""
                    },
                    {
                        "option_id": 207190,
                        "option_content": "<p><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110326068.png\" style=\"width: 28.8pt; height: 28.8pt\" data-type=\"math\"  width=\"38\" height=\"38\"/> </p>",
                        "option_correct": 0,
                        "option_score": ""
                    },
                    {
                        "option_id": 207191,
                        "option_content": "<p><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110740210.png\" style=\"width: 28.8pt; height: 28.8pt\" data-type=\"math\"  width=\"38\" height=\"38\"/> </p>",
                        "option_correct": 1,
                        "option_score": ""
                    },
                    {
                        "option_id": 207192,
                        "option_content": "<p><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/10/29/1603933110219061.png\" style=\"width: 28.8pt; height: 28.8pt\" data-type=\"math\"  width=\"38\" height=\"38\"/></p>",
                        "option_correct": 0,
                        "option_score": ""
                    }
                ]
            }
        ],
        "slave": [],
        "kps": [
            {
                "kp_id": 12966,
                "kp_name": "规律型-图形的变化类"
            },
            {
                "kp_id": 13799,
                "kp_name": "利用正方形的性质求解"
            }
        ],
        "specials": [],
        "affiliate": [
            {
                "topic_affiliate_id": 379452,
                "topic_id": 201511100077769,
                "field_name": "试题来源",
                "field_key": "tag_41_62",
                "field_value": "2019内蒙古赤峰中考"
            },
            {
                "topic_affiliate_id": 379453,
                "topic_id": 201511100077769,
                "field_name": "试题质量（※）",
                "field_key": "tag_41_82",
                "field_value": 455
            },
            {
                "topic_affiliate_id": 379454,
                "topic_id": 201511100077769,
                "field_name": "数学素养（※）",
                "field_key": "tag_41_24",
                "field_value": "142|145|864"
            },
            {
                "topic_affiliate_id": 379455,
                "topic_id": 201511100077769,
                "field_name": "教学进度（※）",
                "field_key": "tag_41_31",
                "field_value": 157
            },
            {
                "topic_affiliate_id": 379456,
                "topic_id": 201511100077769,
                "field_name": "题类",
                "field_key": "tag_41_25",
                "field_value": "168|166"
            },
            {
                "topic_affiliate_id": 379457,
                "topic_id": 201511100077769,
                "field_name": "年份（※）",
                "field_key": "tag_41_153",
                "field_value": 751
            },
            {
                "topic_affiliate_id": 379458,
                "topic_id": 201511100077769,
                "field_name": "试题类型（※）",
                "field_key": "tag_41_28",
                "field_value": 171
            },
            {
                "topic_affiliate_id": 379459,
                "topic_id": 201511100077769,
                "field_name": "地区（※）",
                "field_key": "tag_41_29",
                "field_value": 351
            },
            {
                "topic_affiliate_id": 1463422,
                "topic_id": 201511100077769,
                "field_name": "数学思想",
                "field_key": "tag_41_23",
                "field_value": 163
            }
        ],
        "uses": {
            "total": 0,
            "school": 0,
            "oneself": 0
        }
    },
    {
        "id": 201511100114096,
        "type_id": 21,
        "basic_type_id": 5,
        "type_name": "填空题",
        "subject_id": 41,
        "resource_type": 1,
        "is_large_topic": 0,
        "difficulty": 3,
        "experience_degree": 0.61,
        "difficulty_degree": 0.61,
        "create_time": 1608176741,
        "update_time": 1634542405,
        "subject_name": "数学",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "word：河北省张家口市2019年中考数学一模试卷(魏薇已编辑)（张彦婷已一审）（舒已二审）（2020-12-17 11:31:00）",
        "title": "<p>我们把分子为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910754607.png\" style=\"width: 6pt; height: 12pt\" data-type=\"math\"  width=\"8.0\" height=\"16.0\"/>的分数叫做理想分数，如<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910235393.png\" style=\"width: 11pt; height: 30pt\" data-type=\"math\"  width=\"14.67\" height=\"40.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910765435.png\" style=\"width: 10pt; height: 30pt\" data-type=\"math\"  width=\"13.33\" height=\"40.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910537591.png\" style=\"width: 11pt; height: 30pt\" data-type=\"math\"  width=\"14.67\" height=\"40.0\"/>，…，任何一个理想分数都可以写成两个不同理想分数的和，如<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910219372.png\" style=\"width: 48pt; height: 30pt\" data-type=\"math\"  width=\"64.0\" height=\"40.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910790378.png\" style=\"width: 53pt; height: 30pt\" data-type=\"math\"  width=\"70.67\" height=\"40.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910942483.png\" style=\"width: 54pt; height: 30pt\" data-type=\"math\"  width=\"72.0\" height=\"40.0\"/>，…，根据对上述式子的观察，请思考：<br/>如果理想分数<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910299461.png\" style=\"width: 49pt; height: 30pt\" data-type=\"math\"  width=\"65.33\" height=\"40.0\"/>（<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910834959.png\" style=\"width: 9pt; height: 10pt\" data-type=\"math\"  width=\"12.0\" height=\"13.33\"/>是不小于<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910905258.png\" style=\"width: 9pt; height: 12pt\" data-type=\"math\"  width=\"12.0\" height=\"16.0\"/>的整数，且<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910825881.png\" style=\"width: 27pt; height: 13pt\" data-type=\"math\"  width=\"36.0\" height=\"17.33\"/>），那么<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910838706.png\" style=\"width: 35pt; height: 13pt\" data-type=\"math\"  width=\"46.67\" height=\"17.33\"/>______（用含<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910461270.png\" style=\"width: 9pt; height: 10pt\" data-type=\"math\"  width=\"12.0\" height=\"13.33\"/>的式子表示）．</p>",
        "parse_content": "<p>根据已知得：<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910884400.png\" style=\"width: 48pt; height: 30pt\" data-type=\"math\"  width=\"64.0\" height=\"40.0\"/>，有<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910425852.png\" style=\"width: 64.8pt; height: 14.4pt\" data-type=\"math\"  width=\"86\" height=\"19\"/>；<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910448724.png\" style=\"width: 53pt; height: 30pt\" data-type=\"math\"  width=\"70.67\" height=\"40.0\"/>，有<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910827920.png\" style=\"width: 64.8pt; height: 14.4pt\" data-type=\"math\"  width=\"86\" height=\"19\"/>；<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910896217.png\" style=\"width: 54pt; height: 30pt\" data-type=\"math\"  width=\"72.0\" height=\"40.0\"/>，有<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175910660523.png\" data-type=\"math\"  width=\"92\" height=\"21\"/>；…，所以如果理想分数<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175911171956.png\" style=\"width: 49pt; height: 30pt\" data-type=\"math\"  width=\"65.33\" height=\"40.0\"/>（<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175911212999.png\" style=\"width: 9pt; height: 10pt\" data-type=\"math\"  width=\"12.0\" height=\"13.33\"/>是不小于<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175911682820.png\" style=\"width: 9pt; height: 12pt\" data-type=\"math\"  width=\"12.0\" height=\"16.0\"/>的整数，且<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175911763565.png\" style=\"width: 27pt; height: 13pt\" data-type=\"math\"  width=\"36.0\" height=\"17.33\"/>），则<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175911298018.png\" style=\"width: 64.8pt; height: 14.4pt\" data-type=\"math\"  width=\"86\" height=\"19\"/>．故答案为：<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175911290155.png\" style=\"width: 28.8pt; height: 14.4pt\" data-type=\"math\"  width=\"38\" height=\"19\"/>．</p>",
        "items": [
            {
                "type_id": 21,
                "list_type": 1,
                "options": [
                    {
                        "option_id": 205387,
                        "option_content": "<p><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608175911415474.png\" style=\"width: 28.8pt; height: 14.4pt\" data-type=\"math\"  width=\"38\" height=\"19\"/><br/></p>",
                        "option_correct": 1,
                        "option_score": ""
                    }
                ]
            }
        ],
        "slave": [],
        "kps": [
            {
                "kp_id": 12964,
                "kp_name": "规律型-数字的变化类"
            }
        ],
        "specials": [],
        "affiliate": [
            {
                "topic_affiliate_id": 3069120,
                "topic_id": 201511100114096,
                "field_name": "试题质量（※）",
                "field_key": "tag_41_82",
                "field_value": 454
            },
            {
                "topic_affiliate_id": 3069121,
                "topic_id": 201511100114096,
                "field_name": "数学素养（※）",
                "field_key": "tag_41_24",
                "field_value": 866
            },
            {
                "topic_affiliate_id": 3069122,
                "topic_id": 201511100114096,
                "field_name": "教学进度（※）",
                "field_key": "tag_41_31",
                "field_value": 157
            },
            {
                "topic_affiliate_id": 3069123,
                "topic_id": 201511100114096,
                "field_name": "题类",
                "field_key": "tag_41_25",
                "field_value": 165
            },
            {
                "topic_affiliate_id": 3069124,
                "topic_id": 201511100114096,
                "field_name": "试题类型（※）",
                "field_key": "tag_41_28",
                "field_value": 172
            },
            {
                "topic_affiliate_id": 3069125,
                "topic_id": 201511100114096,
                "field_name": "试题来源",
                "field_key": "tag_41_62",
                "field_value": "2019河北张家口中考一模"
            },
            {
                "topic_affiliate_id": 3069126,
                "topic_id": 201511100114096,
                "field_name": "年份（※）",
                "field_key": "tag_41_153",
                "field_value": 751
            },
            {
                "topic_affiliate_id": 3069127,
                "topic_id": 201511100114096,
                "field_name": "地区（※）",
                "field_key": "tag_41_29",
                "field_value": 374
            },
            {
                "topic_affiliate_id": 3070045,
                "topic_id": 201511100114096,
                "field_name": "典型模型、辅助线",
                "field_key": "tag_41_164",
                "field_value": 831
            }
        ],
        "uses": {
            "total": 0,
            "school": 0,
            "oneself": 0
        }
    },
    {
        "id": 201511100110347,
        "type_id": 22,
        "basic_type_id": 8,
        "type_name": "解答题",
        "subject_id": 41,
        "resource_type": 1,
        "is_large_topic": 0,
        "difficulty": 5,
        "experience_degree": 0.21,
        "difficulty_degree": 0.21,
        "create_time": 1607592113,
        "update_time": 1634547262,
        "subject_name": "数学",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "word：2019-2020学年浙江省宁波市奉化区等南三县九年级（上）期末数学试卷（已编辑魏佳怡）（2020-12-10 17:09:10）",
        "title": "<p>定义：有两个相邻内角和等于另两个内角和的一半的四边形称为半四边形，这两个角的夹边称为对半线．<br/>(1)如图<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458227094.png\" style=\"width: 6pt; height: 12pt\" data-type=\"math\"  width=\"8.0\" height=\"16.0\"/>，在对半四边形<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458141088.png\" style=\"width: 35pt; height: 13pt\" data-type=\"math\"  width=\"46.67\" height=\"17.33\"/>中，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458694043.png\" style=\"width: 123pt; height: 31pt\" data-type=\"math\"  width=\"164.0\" height=\"41.33\"/>，求<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458989086.png\" style=\"width: 19pt; height: 12pt\" data-type=\"math\"  width=\"25.33\" height=\"16.0\"/>与<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458661857.png\" style=\"width: 19pt; height: 12pt\" data-type=\"math\"  width=\"25.33\" height=\"16.0\"/>的度数之和；<br/>(2)如图<img class=\"gsImgLatex mathType\" width=\"7\" height=\"11\" src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/18/1608261837603017.gif\" />，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458375413.png\" style=\"width: 11pt; height: 13pt\" data-type=\"math\"  width=\"14.67\" height=\"17.33\"/>为锐角<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458086300.png\" style=\"width: 33pt; height: 13pt\" data-type=\"math\"  width=\"44.0\" height=\"17.33\"/>的外心，过点<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458447783.png\" style=\"width: 11pt; height: 13pt\" data-type=\"math\"  width=\"14.67\" height=\"17.33\"/>的直线交<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458130978.png\" style=\"width: 20pt; height: 13pt\" data-type=\"math\"  width=\"26.67\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458854989.png\" style=\"width: 19pt; height: 13pt\" data-type=\"math\"  width=\"25.33\" height=\"17.33\"/>于点<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458436743.png\" style=\"width: 12pt; height: 12pt\" data-type=\"math\"  width=\"16.0\" height=\"16.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458998411.png\" style=\"width: 11pt; height: 12pt\" data-type=\"math\"  width=\"14.67\" height=\"16.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458808967.png\" style=\"width: 64pt; height: 13pt\" data-type=\"math\"  width=\"85.33\" height=\"17.33\"/>，求证：四边形<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458763648.png\" style=\"width: 35pt; height: 12pt\" data-type=\"math\"  width=\"46.67\" height=\"16.0\"/>是对半四边形；<br/>(3)如图<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458440870.png\" style=\"width: 8pt; height: 13pt\" data-type=\"math\"  width=\"10.67\" height=\"17.33\"/>，在<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458144072.png\" style=\"width: 33pt; height: 13pt\" data-type=\"math\"  width=\"44.0\" height=\"17.33\"/>中，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458996290.png\" style=\"width: 12pt; height: 12pt\" data-type=\"math\"  width=\"16.0\" height=\"16.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458505757.png\" style=\"width: 11pt; height: 12pt\" data-type=\"math\"  width=\"14.67\" height=\"16.0\"/>分别是<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458652450.png\" style=\"width: 20pt; height: 13pt\" data-type=\"math\"  width=\"26.67\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458594515.png\" style=\"width: 19pt; height: 13pt\" data-type=\"math\"  width=\"25.33\" height=\"17.33\"/>上一点，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458258720.png\" style=\"width: 64pt; height: 13pt\" data-type=\"math\"  width=\"85.33\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458992636.png\" style=\"width: 51pt; height: 13pt\" data-type=\"math\"  width=\"68.0\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458483485.png\" style=\"width: 12pt; height: 12pt\" data-type=\"math\"  width=\"16.0\" height=\"16.0\"/>为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458770121.png\" style=\"width: 20pt; height: 12pt\" data-type=\"math\"  width=\"26.67\" height=\"16.0\"/>的中点，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458156925.png\" style=\"width: 67pt; height: 13pt\" data-type=\"math\"  width=\"89.33\" height=\"17.33\"/>，当<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591458477479.png\" style=\"width: 19pt; height: 12pt\" data-type=\"math\"  width=\"25.33\" height=\"16.0\"/>为对半四边形<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459036850.png\" style=\"width: 35pt; height: 12pt\" data-type=\"math\"  width=\"46.67\" height=\"16.0\"/>的对半线时，求<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459194300.png\" style=\"width: 20pt; height: 13pt\" data-type=\"math\"  width=\"26.67\" height=\"17.33\"/>的长．<br/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459719632.png\" style=\"width: 1.5in; height: 0.9478521in\" width=\"144\" height=\"91\"/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459673610.png\" style=\"width: 0.96875in; height: 0.9559197in\" width=\"93\" height=\"92\"/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459633508.png\" style=\"width: 0.9375in; height: 0.9501684in\" width=\"90\" height=\"91\"/></p>",
        "parse_content": "<p>(1)由四边形内角和为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459559628.png\" style=\"width: 25pt; height: 13pt\" data-type=\"math\"  width=\"33.33\" height=\"17.33\"/>，可得<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459996118.png\" style=\"width: 138pt; height: 13pt\" data-type=\"math\"  width=\"184.0\" height=\"17.33\"/>，则<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459187380.png\" style=\"width: 150pt; height: 16pt\" data-type=\"math\"  width=\"200.0\" height=\"21.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459913450.png\" style=\"width: 89pt; height: 13pt\" data-type=\"math\"  width=\"118.67\" height=\"17.33\"/>；<br/>(2)如图<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459762223.png\" style=\"width: 9pt; height: 12pt\" data-type=\"math\"  width=\"12.0\" height=\"16.0\"/>，连接<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459953187.png\" data-type=\"math\"  width=\"26.67\" height=\"17.33\" style=\"width: 20pt; height: 13pt;\"/>，由三角形外心的性质可得，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459082750.png\" data-type=\"math\"  width=\"100.0\" height=\"17.33\" style=\"width: 75pt; height: 13pt;\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459490895.png\" data-type=\"math\"  width=\"156.0\" height=\"17.33\" style=\"width: 117pt; height: 13pt;\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459871780.png\" data-type=\"math\"  width=\"108.0\" height=\"17.33\" style=\"width: 81pt; height: 13pt;\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459414563.png\" data-type=\"math\"  width=\"109.33\" height=\"17.33\" style=\"width: 82pt; height: 13pt;\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459223935.png\" data-type=\"math\"  width=\"246.67\" height=\"21.33\" style=\"width: 185pt; height: 16pt;\"/>，则<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459222646.png\" data-type=\"math\"  width=\"146.67\" height=\"17.33\" style=\"width: 110pt; height: 13pt;\"/>，在四边形<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459408162.png\" data-type=\"math\"  width=\"46.67\" height=\"16.0\" style=\"width: 35pt; height: 12pt;\"/>中，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459592630.png\" data-type=\"math\"  width=\"146.67\" height=\"17.33\" style=\"width: 110pt; height: 13pt;\"/>，则另两个内角之和为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459385593.png\" data-type=\"math\"  width=\"33.33\" height=\"17.33\" style=\"width: 25pt; height: 13pt;\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459411152.png\" data-type=\"math\"  width=\"13.33\" height=\"12.0\" style=\"width: 10pt; height: 9pt;\"/>四边形<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459145865.png\" data-type=\"math\"  width=\"46.67\" height=\"16.0\" style=\"width: 35pt; height: 12pt;\"/>为对半四边形；</p><p>(3)若<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459214623.png\" style=\"width: 19pt; height: 12pt\" data-type=\"math\"  width=\"25.33\" height=\"16.0\"/>为对半线，则<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459217854.png\" style=\"width: 110pt; height: 13pt\" data-type=\"math\"  width=\"146.67\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459727847.png\" style=\"width: 59pt; height: 13pt\" data-type=\"math\"  width=\"78.67\" height=\"17.33\"/>，又<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459329259.png\" style=\"width: 57pt; height: 13pt\" data-type=\"math\"  width=\"76.0\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459485656.png\" style=\"width: 44pt; height: 13pt\" data-type=\"math\"  width=\"58.67\" height=\"17.33\"/>为等边三角形，<img class=\"gsImgLatex mathType\" width=\"172\" height=\"13\" src=\"http://tkimgs.zhixinhuixue.net/image/word/2021/04/24/1619246455151329.gif\" />，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459524632.png\" style=\"width: 67pt; height: 13pt\" data-type=\"math\"  width=\"89.33\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459219685.png\" style=\"width: 123pt; height: 13pt\" data-type=\"math\"  width=\"164.0\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459215318.png\" data-type=\"math\"  width=\"93\" height=\"19\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459936490.png\" style=\"width: 115pt; height: 13pt\" data-type=\"math\"  width=\"153.33\" height=\"17.33\"/>，又<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459647091.png\" style=\"width: 117pt; height: 13pt\" data-type=\"math\"  width=\"156.0\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459629364.png\" style=\"width: 90pt; height: 13pt\" data-type=\"math\"  width=\"120.0\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459666330.png\" style=\"width: 85pt; height: 12pt\" data-type=\"math\"  width=\"113.33\" height=\"16.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459896016.png\" style=\"width: 10pt; height: 9pt\" data-type=\"math\"  width=\"13.33\" height=\"12.0\"/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459447983.png\" style=\"width: 54pt; height: 31pt\" data-type=\"math\"  width=\"72.0\" height=\"41.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459728510.png\" data-type=\"math\"  width=\"100\" height=\"19\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459371178.png\" style=\"width: 52pt; height: 13pt\" data-type=\"math\"  width=\"69.33\" height=\"17.33\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459352368.png\" style=\"width: 12pt; height: 12pt\" data-type=\"math\"  width=\"16.0\" height=\"16.0\"/>是<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459478055.png\" style=\"width: 20pt; height: 12pt\" data-type=\"math\"  width=\"26.67\" height=\"16.0\"/>的中点，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459950720.png\" style=\"width: 44pt; height: 12pt\" data-type=\"math\"  width=\"58.67\" height=\"16.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459231362.png\" data-type=\"math\"  width=\"93\" height=\"41\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459858408.png\" style=\"width: 10pt; height: 9pt\" data-type=\"math\"  width=\"13.33\" height=\"12.0\"/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459905367.png\" style=\"width: 44pt; height: 59pt\" data-type=\"math\"  width=\"58.67\" height=\"78.67\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459589263.png\" style=\"width: 49pt; height: 30pt\" data-type=\"math\"  width=\"65.33\" height=\"40.0\"/>，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459860363.png\" data-type=\"math\"  width=\"193\" height=\"41\"/>．<br/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459458265.png\" style=\"width: 1.350877in; height: 0.8917542in\" width=\"130\" height=\"86\"/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459412955.png\" style=\"width: 0.8958333in; height: 0.8899781in\" width=\"86\" height=\"85\"/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/10/1607591459720948.png\" style=\"width: 0.9531255in; height: 0.9039326in\" width=\"92\" height=\"87\"/><br/></p>",
        "items": [
            {
                "type_id": 22,
                "list_type": 1,
                "options": [
                    {
                        "option_id": 197378,
                        "option_content": "<p>见解析<br/></p>",
                        "option_correct": 1,
                        "option_score": ""
                    }
                ]
            }
        ],
        "slave": [],
        "kps": [
            {
                "kp_id": 13659,
                "kp_name": "等边三角形判定和性质的综合应用"
            },
            {
                "kp_id": 13720,
                "kp_name": "多边形内角和问题"
            },
            {
                "kp_id": 13760,
                "kp_name": "有关三角形外接圆与外心的概念"
            },
            {
                "kp_id": 13827,
                "kp_name": "四边形其他综合问题"
            },
            {
                "kp_id": 14013,
                "kp_name": "综合利用相似三角形的性质和判定求解"
            },
            {
                "kp_id": 14131,
                "kp_name": "新定义问题"
            }
        ],
        "specials": [],
        "affiliate": [
            {
                "topic_affiliate_id": 252772,
                "topic_id": 201511100110347,
                "field_name": "线上一审",
                "field_key": "tag_41_63",
                "field_value": 381
            },
            {
                "topic_affiliate_id": 758895,
                "topic_id": 201511100110347,
                "field_name": "典型模型、辅助线",
                "field_key": "tag_41_164",
                "field_value": 833
            },
            {
                "topic_affiliate_id": 758896,
                "topic_id": 201511100110347,
                "field_name": "试题质量（※）",
                "field_key": "tag_41_82",
                "field_value": 455
            },
            {
                "topic_affiliate_id": 758897,
                "topic_id": 201511100110347,
                "field_name": "数学素养（※）",
                "field_key": "tag_41_24",
                "field_value": "864|145|144|142"
            },
            {
                "topic_affiliate_id": 758898,
                "topic_id": 201511100110347,
                "field_name": "教学进度（※）",
                "field_key": "tag_41_31",
                "field_value": 156
            },
            {
                "topic_affiliate_id": 758899,
                "topic_id": 201511100110347,
                "field_name": "题类",
                "field_key": "tag_41_25",
                "field_value": "168|165|167"
            },
            {
                "topic_affiliate_id": 758900,
                "topic_id": 201511100110347,
                "field_name": "试题来源",
                "field_key": "tag_41_62",
                "field_value": "2020浙江宁波期末"
            },
            {
                "topic_affiliate_id": 758901,
                "topic_id": 201511100110347,
                "field_name": "年份（※）",
                "field_key": "tag_41_153",
                "field_value": 750
            },
            {
                "topic_affiliate_id": 758902,
                "topic_id": 201511100110347,
                "field_name": "试题类型（※）",
                "field_key": "tag_41_28",
                "field_value": 174
            },
            {
                "topic_affiliate_id": 758903,
                "topic_id": 201511100110347,
                "field_name": "地区（※）",
                "field_key": "tag_41_29",
                "field_value": 379
            }
        ],
        "uses": {
            "total": 0,
            "school": 0,
            "oneself": 0
        }
    },
    {
        "id": 201511100537028,
        "type_id": 23,
        "basic_type_id": 6,
        "type_name": "多空题",
        "subject_id": 41,
        "resource_type": 1,
        "is_large_topic": 0,
        "difficulty": 1,
        "experience_degree": 0.86,
        "difficulty_degree": 0.86,
        "create_time": 1634782107,
        "update_time": 1634782107,
        "subject_name": "数学",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "云题库：孙（2021-10-21 10:08:27）",
        "title": "<p>测试111</p>",
        "parse_content": "<p>无</p>",
        "items": [
            {
                "type_id": 23,
                "list_type": 1,
                "options": [
                    {
                        "option_id": 1391048,
                        "option_content": "<p>1</p>",
                        "option_correct": 1,
                        "option_score": ""
                    },
                    {
                        "option_id": 1391049,
                        "option_content": "<p>2</p>",
                        "option_correct": 1,
                        "option_score": ""
                    }
                ]
            }
        ],
        "slave": [],
        "kps": [
            {
                "kp_id": 12849,
                "kp_name": "正数、负数的定义"
            }
        ],
        "specials": [],
        "affiliate": [],
        "uses": {
            "total": 0,
            "school": 0,
            "oneself": 0
        }
    },
    {
        "id": 201511100114139,
        "type_id": 24,
        "basic_type_id": 8,
        "type_name": "作图题",
        "subject_id": 41,
        "resource_type": 1,
        "is_large_topic": 0,
        "difficulty": 2,
        "experience_degree": 0.71,
        "difficulty_degree": 0.71,
        "create_time": 1608181951,
        "update_time": 1632807836,
        "subject_name": "数学",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "word：安徽省巢湖市2017-2018学年九年级(上)期中数学试卷（傅诗雨已编辑）（2020-12-17 11:56:43）",
        "title": "<p>如图，在边长为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469209860.png\" style=\"width: 6pt; height: 12pt\" data-type=\"math\"  width=\"8.0\" height=\"16.0\"/>个单位长度的小正方形组成的网格中，给出了格点<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469104076.png\" style=\"width: 33pt; height: 13pt\" data-type=\"math\"  width=\"44.0\" height=\"17.33\"/>（顶点是网格线的交点）和点<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469906102.png\" style=\"width: 12pt; height: 17pt\" data-type=\"math\"  width=\"16.0\" height=\"22.67\"/>．画出<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469275620.png\" style=\"width: 33pt; height: 13pt\" data-type=\"math\"  width=\"44.0\" height=\"17.33\"/>关于点<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469385792.png\" style=\"width: 12pt; height: 17pt\" data-type=\"math\"  width=\"16.0\" height=\"22.67\"/>的中心对称图形．<br/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469255793.png\" style=\"width: 136.8pt; height: 122.4pt\" width=\"182\" height=\"163\"/></p>",
        "parse_content": "<p>如图，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469790954.png\" style=\"width: 41pt; height: 13pt\" data-type=\"math\"  width=\"54.67\" height=\"17.33\"/>为所作．<br/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/12/17/1608177469522303.png\" width=\"258\" height=\"218\"/></p>",
        "items": [
            {
                "type_id": 24,
                "list_type": 1,
                "options": [
                    {
                        "option_id": 205467,
                        "option_content": "<p>见解析<br/></p>",
                        "option_correct": 1,
                        "option_score": ""
                    }
                ]
            }
        ],
        "slave": [],
        "kps": [
            {
                "kp_id": 13951,
                "kp_name": "作图-中心对称"
            }
        ],
        "specials": [],
        "affiliate": [
            {
                "topic_affiliate_id": 266877,
                "topic_id": 201511100114139,
                "field_name": "线上一审",
                "field_key": "tag_41_63",
                "field_value": 381
            },
            {
                "topic_affiliate_id": 659697,
                "topic_id": 201511100114139,
                "field_name": "试题质量（※）",
                "field_key": "tag_41_82",
                "field_value": 454
            },
            {
                "topic_affiliate_id": 659698,
                "topic_id": 201511100114139,
                "field_name": "数学素养（※）",
                "field_key": "tag_41_24",
                "field_value": 145
            },
            {
                "topic_affiliate_id": 659699,
                "topic_id": 201511100114139,
                "field_name": "教学进度（※）",
                "field_key": "tag_41_31",
                "field_value": 157
            },
            {
                "topic_affiliate_id": 659700,
                "topic_id": 201511100114139,
                "field_name": "题类",
                "field_key": "tag_41_25",
                "field_value": 165
            },
            {
                "topic_affiliate_id": 659701,
                "topic_id": 201511100114139,
                "field_name": "试题来源",
                "field_key": "tag_41_62",
                "field_value": "2018安徽巢湖期中"
            },
            {
                "topic_affiliate_id": 659702,
                "topic_id": 201511100114139,
                "field_name": "年份（※）",
                "field_key": "tag_41_153",
                "field_value": 752
            },
            {
                "topic_affiliate_id": 659703,
                "topic_id": 201511100114139,
                "field_name": "试题类型（※）",
                "field_key": "tag_41_28",
                "field_value": 175
            },
            {
                "topic_affiliate_id": 659704,
                "topic_id": 201511100114139,
                "field_name": "地区（※）",
                "field_key": "tag_41_29",
                "field_value": 365
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
