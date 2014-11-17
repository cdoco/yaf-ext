<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-11-11
 * Time: 下午3:25
 */

class CreateExcel {

    /*
     * @array(array('header','title'=>array(),'data'=>array())))
     */

    private  $_excelDatas = array();

    /**
     * @当前第几个PART
     */
    private  $_partNum    = 0;

    public function setHeader($string){
        $this->_partNum ++;
        $this->_excelDatas[$this->_partNum]['header'] = $string;
    }

    public function setTitle(array $arr){
        $this->_excelDatas[$this->_partNum]['title'] = $arr;
    }
    public function setData(array $data){
        $this->_excelDatas[$this->_partNum]['data']  = $data;
    }

    protected function _generateExcel(){
        $excel  = new PHPExcel();
        $sheet1 = $excel->getActiveSheet();
        $sheet1->getDefaultStyle()
            ->getAlignment()
            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
            ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $rowIdx = 0;
        foreach($this->_excelDatas as $data){

            //表块的增加
            ++$rowIdx;
            $maxCol = count($data['title']);
            //开始写入头部了
            if(!empty($data['header'])){
                if($maxCol > 1){
                    $sheet1->mergeCellsByColumnAndRow(0, $rowIdx, $maxCol - 1, $rowIdx);
                }
                $sheet1->setCellValueByColumnAndRow(0, $rowIdx, $data['header']);
                ++ $rowIdx;
            }

            self::_writeRow($sheet1, $data['title'], $rowIdx);
            ++ $rowIdx;
            foreach ($data['data'] as $row)
            {
                $rowIdx += self::_writeSupRow($sheet1,$row,$rowIdx);
            }

        }
        return $excel;
    }
    private static function _writeRow($sheet, Array $data, $rowIdx)
    {
        $titleCnt   = count($data);
        for ($i = 0; $i < $titleCnt; ++ $i)
        {
            $sheet->setCellValueByColumnAndRow($i, $rowIdx, $data[$i]);
        }
    }
    private static  function _writeSupRow($sheet1, Array $data, $rowIdx){

        $return  = self::_getDataRowColNum($data);
        if($return['R'] == 0) $return['R'] = 1;
        $locNum = 0;
        foreach($data as $v){

            if(is_array($v)){
                $locRowIdx = 0;
                foreach($v as $child){

                    $locColNum = $locNum;
                    foreach($child as $r){
                        $sheet1->mergeCellsByColumnAndRow($locColNum, $rowIdx+$locRowIdx,$locColNum, $rowIdx+$locRowIdx);
                        $sheet1->setCellValueByColumnAndRow($locColNum, $rowIdx+$locRowIdx, $r);
                        ++ $locColNum;
                    }
                    ++ $locRowIdx;
                }
                $locNum += $return[$locNum]['L'];
            }else{
                $sheet1->mergeCellsByColumnAndRow($locNum, $rowIdx,$locNum, $rowIdx+$return['R']-1);
                $sheet1->setCellValueByColumnAndRow($locNum, $rowIdx, $v);
                $locNum ++;

            }

        }
        return $return['R'];
    }



    public function saveExcel($fileName)
    {
        $writer = new PHPExcel_Writer_Excel5($this->_generateExcel());
        $writer->save($fileName);
    }

    public function echoExcel($name)
    {
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=".$name.".xls");
        header("Content-Transfer-Encoding: binary ");
        $this->saveExcel('php://output');
    }

    private static  function _getDataRowColNum ($data){
        $i = 0;
        $return = array('R'=>0);

        foreach($data as $v){

            if(is_array($v)){
                $return[$i] = array(
                    'L' => count($v[0]),//这里只能是二维数组了 如果不是 不好意思了我还真不好处理
                );
                $R = count($v);
                if($return['R'] < $R){
                    $return['R'] = $R;//跨行的高度
                }
            }
            $i++;
        }
        return $return;
    }
}
?>
