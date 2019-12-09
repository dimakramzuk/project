<?php


class Project extends Developer
{
    private $costProjectForMonth;
    private $costProjectForHour;

    private $arrMonth=[];
    private $arrHour=[];


    function  setCostProjectForMonth($costProjectForMonth,$month=1) {
        $this->costProjectForMonth=$costProjectForMonth*$month;
        $this->getCount();
    }

    function  setCostProjectForHour($costProjectForHour,$hour=1) {
        $this->costProjectForHour=$costProjectForHour*$hour;
        $this-> getCount();
    }

    function  getCount() {
        array_push($this->arrMonth, $this->costProjectForMonth);
        array_push($this->arrHour,$this->costProjectForHour);
    }

    function  getCostProject() {
        echo "Стоимость проекта:<br>";
        echo "Фиксированая ставка:".array_sum($this->arrMonth)." \t руб<br>";
        echo "Фиксированая почасовая ставка:".array_sum($this->arrHour)." \t руб<br>";
        $total= array_sum($this->arrMonth)+array_sum($this->arrHour);
        echo "Общая сумма:".$total." \t руб<br>";
    }
}