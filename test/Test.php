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
        $obj->setProductTopicType(1);
        $topic_content = $this->getTopicContent();
        $html = $obj->getTopicHtmlContent($topic_content[0]);
        $css = $obj->getCssStyleContent();

        return array($html,$css);
    }

    public function getTopicContent()
    {

        $str = '[
    {
        "id": 201511100000050,
        "type_id": 7,
        "basic_type_id": 8,
        "is_large_topic": 0,
        "type_name": "解答题",
        "difficulty": 1,
        "subject_id": 12,
        "create_time": 1590550844,
        "update_time": 1590550844,
        "subject_name": "物理",
        "is_stop": 0,
        "relation_topic": [],
        "source": "云题库",
        "source_title": "word：（13道）【100所名校】2019届重庆南开中学高三下学期适应性考试理科综合物理试题（解析版）（侯编辑）（陈明伟审）（2020-05-27 11:31:24）",
        "title": "竖直平面内有两竖直放置的不计电阻的光滑导轨，间距<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332933196.png\" style=\"width: 32.85pt; height: 13.8pt\" data-type=\"math\"  width=\"44\" height=\"18\" />，导轨上端接电阻<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332748682.png\" style=\"width: 12.1pt; height: 13.25pt\" data-type=\"math\"  width=\"16\" height=\"18\" />，导轨间分布着如图所示的磁场，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332161612.png\" style=\"width: 19pt; height: 13.8pt\" data-type=\"math\"  width=\"25\" height=\"18\" />、<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332613749.png\" style=\"width: 17.85pt; height: 13.8pt\" data-type=\"math\"  width=\"24\" height=\"18\" />之间无磁场，高度差<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332578693.png\" style=\"width: 48.95pt; height: 17.3pt\" data-type=\"math\"  width=\"65\" height=\"23\" />，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332208281.png\" style=\"width: 17.85pt; height: 13.8pt\" data-type=\"math\"  width=\"24\" height=\"18\" />、<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332168509.png\" style=\"width: 17.3pt; height: 13.8pt\" data-type=\"math\"  width=\"23\" height=\"18\" />之间有磁场，磁感应强度<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332451095.png\" style=\"width: 45.5pt; height: 15.55pt\" data-type=\"math\"  width=\"61\" height=\"21\" />，高度差也为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332843557.png\" style=\"width: 48.95pt; height: 17.3pt\" data-type=\"math\"  width=\"65\" height=\"23\" />，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332367441.png\" style=\"width: 17.3pt; height: 13.8pt\" data-type=\"math\"  width=\"23\" height=\"18\" />、<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332225640.png\" style=\"width: 20.15pt; height: 13.8pt\" data-type=\"math\"  width=\"27\" height=\"18\" />之间无磁场，高度差<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332866821.png\" style=\"width: 40.9pt; height: 17.3pt\" data-type=\"math\"  width=\"55\" height=\"23\" />，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332528487.png\" style=\"width: 20.15pt; height: 13.8pt\" data-type=\"math\"  width=\"27\" height=\"18\" />下方有磁场<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332929120.png\" style=\"width: 15pt; height: 17.3pt\" data-type=\"math\"  width=\"20\" height=\"23\" />。一质量<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332030040.png\" style=\"width: 51.25pt; height: 16.15pt\" data-type=\"math\"  width=\"68\" height=\"22\" />的不计电阻的导体棒从<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332916063.png\" style=\"width: 19pt; height: 13.8pt\" data-type=\"math\"  width=\"25\" height=\"18\" />位置静止释放，进入磁场<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332148159.png\" style=\"width: 13.8pt; height: 13.25pt\" data-type=\"math\"  width=\"18\" height=\"18\" />区域刚好匀速运动，整个过程导体棒始终保持水平且和导轨接触良好，重力加速度<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332090400.png\" style=\"width: 55.85pt; height: 17.85pt\" data-type=\"math\"  width=\"74\" height=\"24\" />，求：<br/><img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332109634.png\" style=\"width: 100.2pt; height: 133.65pt\" width=\"134\" height=\"178\" /><br/><br/>（1）导体棒刚进入磁场<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332279569.png\" style=\"width: 13.8pt; height: 17.3pt\" data-type=\"math\"  width=\"18\" height=\"23\" />时的速度<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332361092.png\" style=\"width: 10.95pt; height: 17.3pt\" data-type=\"math\"  width=\"15\" height=\"23\" />；<br/>（2）定值电阻<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332671326.png\" style=\"width: 12.1pt; height: 13.25pt\" data-type=\"math\"  width=\"16\" height=\"18\" />的阻值；<br/>（3）要使导体棒刚进入<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332361610.png\" style=\"width: 15pt; height: 17.3pt\" data-type=\"math\"  width=\"20\" height=\"23\" />区域也匀速，磁感应强度<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332204510.png\" style=\"width: 15pt; height: 17.3pt\" data-type=\"math\"  width=\"20\" height=\"23\" />为多大。",
        "parse_content": "（1）进入磁场前，导体棒做自由落体运动，<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332202260.png\" style=\"width: 66.8pt; height: 31.1pt\" data-type=\"math\"  width=\"89\" height=\"41\" />，解得<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332637833.png\" style=\"width: 47.8pt; height: 17.3pt\" data-type=\"math\"  width=\"64\" height=\"23\" />；<br/>（2）导体棒刚好匀速，则<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332550073.png\" style=\"width: 65.1pt; height: 32.85pt\" data-type=\"math\"  width=\"87\" height=\"44\" />，解得<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332832152.png\" style=\"width: 39.15pt; height: 13.25pt\" data-type=\"math\"  width=\"52\" height=\"18\" />；<br/>（3）离开<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332157124.png\" style=\"width: 13.8pt; height: 17.3pt\" data-type=\"math\"  width=\"18\" height=\"23\" />磁场时，导体棒的速度仍然为<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332459944.png\" style=\"width: 10.95pt; height: 17.3pt\" data-type=\"math\"  width=\"15\" height=\"23\" />，根据动能定理可得进入<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332769283.png\" style=\"width: 15pt; height: 17.3pt\" data-type=\"math\"  width=\"20\" height=\"23\" />的速度满足<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332194227.png\" style=\"width: 108.3pt; height: 31.1pt\" data-type=\"math\"  width=\"144\" height=\"41\" />，解得<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332476533.png\" style=\"width: 48.95pt; height: 17.3pt\" data-type=\"math\"  width=\"65\" height=\"23\" />；<br/>导体棒刚进入<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332529564.png\" style=\"width: 15pt; height: 17.3pt\" data-type=\"math\"  width=\"20\" height=\"23\" />区域也匀速，则<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332280203.png\" style=\"width: 66.25pt; height: 32.85pt\" data-type=\"math\"  width=\"88\" height=\"44\" />，解得<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332288895.png\" style=\"width: 50.1pt; height: 17.3pt\" data-type=\"math\"  width=\"67\" height=\"23\" />",
        "items": [
            {
                "type_id": 7,
                "options": [
                    {
                        "option_id": 72,
                        "option_content": "（1）<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332732339.png\" style=\"width: 27.05pt; height: 13.8pt\" data-type=\"math\"  width=\"36\" height=\"18\" /> ；<br/>（2）<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332835415.png\" style=\"width: 19pt; height: 13.25pt\" data-type=\"math\"  width=\"25\" height=\"18\" /> ；<br/>（3）<img src=\"http://tkimgs.zhixinhuixue.net/image/word/2020/05/27/1590550332949800.png\" style=\"width: 25.9pt; height: 13.8pt\" data-type=\"math\"  width=\"35\" height=\"18\" />",
                        "option_correct": 1,
                        "option_score": ""
                    }
                ],
                "list_type": 0
            }
        ],
        "slave": [],
        "kps": [],
        "specials": [],
        "tag": [],
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
list($html_content,$css) = $test->geTest();

$html = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Title</title>
'.$css.'<br><br><br><br><br>
</head><body>'.$html_content.'</body></html>';

file_put_contents('test.html', $html);



$pdf_obj = new \TopicHtml\Pdf\Pdf();
//$pdf_obj->setPhantomjsExec('/usr/local/phantomjs/bin/phantomjs');//2.1
$pdf_obj->setPhantomjsExec('/usr/local/phantomjs-1.9.8/bin/phantomjs');//1.9
$pdf_obj->setPhantomjsVer('1.9');

//$pdf_obj->setHtmlFile('/www/topic-html/src/Pdf/tmp/test222.html');
$pdf_obj->saveHtmlFile($html);

$rs = $pdf_obj->createPdf();
//$topic_content = $test->getTopicContent();
var_dump($rs);
