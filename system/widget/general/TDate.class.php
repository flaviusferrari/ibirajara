<?php
/*
 * classe TDate
 *  responsável por receber uma data e transformá-la em uma data 
 *  válida do Mysql *
 */
class TDate
{
    private $day;
    private $month;
    private $year;
    private $data;


    /*
     * método __construct()
     *  recebe a data e a converte para um formato válido
     * @param $date = Data
     */
    public function __construct($date) 
    {
        $pos = strpos($date, "/");
        
        if ($pos == false)
        {
            $p_dt = explode('-',$date);
            $this->day   = $p_dt[2];
            $this->month = $p_dt[1];
            $this->year  = $p_dt[0];
            
            $this->data = $p_dt[2].'/'.$p_dt[1].'/'.$p_dt[0];           
        }
        else
        {            
            $p_dt = explode('/',$date);
            
            $this->day   = $p_dt[0];
            $this->month = $p_dt[1];
            $this->year  = $p_dt[2];
            
            $this->data = $p_dt[2].'-'.$p_dt[1].'-'.$p_dt[0];            
        }
    }
    
    /*
     * método getDate()
     *  retorna a data
     */
    public function getDate()
    {
        return $this->data;
    }
    
    
    /**
     * Método getDataExtenso()
     *   retorna a data escrita por extenso
     */
    public function getDataExtenso()
    {
        switch ($this->month)
        {
            case 1:
                $mes = 'Janeiro';
                break;
            
            case 2:
                $mes = "Fevereiro";
                break;

            case 3:
                $mes = "Março";
            break;

            case 4:
                $mes = "Abril";
            break;

            case 5:
                $mes = "Maio";
            break;

            case 6:
                $mes = "Junho";
            break;

            case 7:
                $mes = "Julho";
            break;

            case 8:
                $mes = "Agosto";
            break;

            case 9:
                $mes = "Setembro";
            break;

            case 10:
                $mes = "Outubro";
            break;

            case 11:
                $mes = "Novembro";
            break;

            case 12:
                $mes = "Dezembro";
            break;
        }
        
        $dtExtenso = $this->day . ' de ' . $mes . ' de ' . $this->year;
        
        return $dtExtenso;
    }
}