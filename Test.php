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
        $obj = new \TopicHtml\Topic\TopicNormal();
        $topic_content = $this->getTopicContent();
        $html = $obj->getTopicHtmlContent($topic_content[0]);
        $css = $obj->getCssStyleContent();

        return array($html,$css);
    }

    public function getTopicContent()
    {

        $str = file_get_contents('test_json.txt');

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
$pdf_obj->saveHtmlFile($html_content);

$rs = $pdf_obj->createPdf();
//$topic_content = $test->getTopicContent();
var_dump($rs);
