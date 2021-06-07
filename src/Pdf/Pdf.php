<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/6/4
 * Time: 9:58
 */
namespace TopicHtml\Pdf;

class Pdf
{
    //纸张尺寸
    private $paper_size = '176mm*250mm';
    //phantomjs版本（默认2.1）
    private $phantomjs_ver = '2.1';
    //html文件
    private $html_file = '';
    //PDF文件
    private $pdf_file = '';
    //是否是命令行
    private $is_cli = true;
    //phantomjs_exec
    private $phantomjs_exec = '/usr/local/phantomjs/bin/phantomjs';

    public function __construct()
    {
        $this->is_cli = preg_match("/cli/i", php_sapi_name()) ? true : false;
        $this->html_file = __DIR__.'/tmp/test.html';
        $this->pdf_file = __DIR__.'/tmp/test.pdf';
    }

    /**
     * 设置phantomjs版本（2.1,1.9）
     * @param string $phantomjs_ver
     */
    public function setPhantomjsVer($phantomjs_ver)
    {
        if (in_array($phantomjs_ver, array('1.9', '2.1'))) {
            $this->phantomjs_ver = $phantomjs_ver;
        } else {
            throw new \Exception("设置phantomjs版本必须是【1.9或2.1】");
        }
    }

    /**
     * 设置纸张尺寸（B5:176mm*250mm）
     * @param string $paper_size
     */
    public function setPaperSize($paper_size)
    {
        if (count(explode('*', $paper_size)) == 2) {
            $this->paper_size = $paper_size;
        } else {
            throw new \Exception("设置纸张尺寸格式不正确，例：176mm*250mm");
        }
    }

    /**
     * @param string $html_file
     */
    public function setHtmlFile($html_file)
    {
        $this->html_file = $html_file;
    }

    /**
     * @param string $pdf_file
     */
    public function setPdfFile($pdf_file)
    {
        $this->pdf_file = $pdf_file;
    }

    /**
     * @param bool $is_cli
     */
    public function setIsCli($is_cli)
    {
        $this->is_cli = $is_cli;
    }

    /**
     * @return string
     */
    public function getPhantomjsExec()
    {
        return $this->phantomjs_exec;
    }

    /**
     * @param string $phantomjs_exec
     */
    public function setPhantomjsExec($phantomjs_exec)
    {
        $this->phantomjs_exec = $phantomjs_exec;
    }

    /**
     * 保存html文件
     * @param $html_content
     * @return bool|int
     */
    public function saveHtmlFile($html_content)
    {
        return file_put_contents($this->html_file, $html_content);
    }


    /**
     * 生成PDF
     */
    public function createPdf()
    {
        $error = array();
        $result = array(
            'status' =>1 ,
            'data' =>'' ,
            'msg' =>'生成成功' ,
        );
        $output = $this->htmlToPdf($this->html_file, $this->pdf_file, $this->paper_size);

        if (strpos($output, 'Error') !== false) {
            $error[] = '错误信息是：' . $output;
        }

        if ($error) {
            $result['msg'] = implode(',', $error);
            $result['status'] = 0;
        }else{
            $result['data'] = array(
                'html_path' => $this->html_file,
                'pdf_path' => $this->pdf_file,
            );
        }

        return $result;
    }

    /**
     * html生成PDF方法(phantomjs 1.9)
     * @param $html_file html地址
     * @param $pdf_file PDF地址
     * @param $paper_size PDF纸张尺寸
     * @return mixed
     */
    private function htmlToPdf($html_file, $pdf_file, $paper_size)
    {
        if (strpos($html_file, 'http') !== 0) {
            $html_file = 'file:///' . $html_file;
        }

        $html2pdf_js = __DIR__.'/../Static/html2pdf/html2pdf_' . $this->phantomjs_ver . '.js';
        $pdf_title = 'xxxx';
        $cmd = "{$this->phantomjs_exec} {$html2pdf_js} {$html_file} {$pdf_file} {$paper_size} '{$pdf_title}'";

        $output = shell_exec($cmd);

        if ($this->is_cli) {
            echo '时间是：' . date('Y-m-d H:i:s') . PHP_EOL;
            echo '生成pdf命令是：【' . $cmd . '】' . PHP_EOL;

            echo PHP_EOL;
            echo '------------------------------ html2pdf 输出信息开始 ------------------------------ ' . PHP_EOL;
            echo $output;
            echo '------------------------------ html2pdf 输出信息结束 ------------------------------ ' . PHP_EOL;
            echo PHP_EOL;
        }

        return $output;
    }
}