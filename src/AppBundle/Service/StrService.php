<?php

namespace AppBundle\Service;

class StrService
{
    private $op1;
    private $op2;
    private $result;

    /**
     * StrService constructor.
     *
     */
    public function __construct()
    {
        $this->result;
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    public function mayusculasAction($op1)
    {
        $this->result = strtoupper($this->op1);
    }

    public function minusculasAction($op1)
    {
        $this->result = strtolower($this->op1);
    }

    public function combinaAction()
    {
        $this->result = $this->op1.$this->op2;
    }

    public function cuentaAction($op1)
    {

        $str = $op1;
        $cont = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] != " ") {
                $cont++;
            }
            else{
                $cont + 0;
            }
        }

       return $this->result = $cont;
    }

    public function numletraAction($op1, $op2)
    {
        $str = $this->$op1[$op2];

        return $this->result = $str;

    }
























}