<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Collect 工廠
 * @param  array       $arr  陣列
 * @return Collection 物件
 */
// function collect($arr)
// {
//     $collect = new Collection($arr);
//     return $collect;
// }
/**
 * 集合物件 - 陣列的快速操作
 */
Class Collection
{
    private $arr = [];

    private $result = [];

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    /**
     * 指定某欄位值當索引
     * @param   $key [description]
     * @return Collection 物件
     */
    public function keyBy($key)
    {
        if ( ! $this->arr) {
            $this->result = [];
            return $this;
        }

        $tmp = [];
        foreach ($this->arr as $value) {
            $k = $value[$key] . '';
            $tmp[$k] = $value;
        }
        $this->result = $tmp;
        return $this;
    }

    /**
     * 指定某欄位值分組
     * @param   $key 索引
     * @return Collection 物件
     */
    public function groupBy($key)
    {
        if ( ! $this->arr) {
            $this->result = [];
            return $this;
        }

        $tmp = [];
        foreach ($this->arr as $value) {
            $k = $value[$key] . '';
            $tmp[$k][] = $value;
        }
        $this->result = $tmp;
        return $this;
    }


    /**
     * 取出索引陣列的某個欄位值集合成一個陣列
     * @param  stirng $key 欄位
     * @return Collection 物件
     */
    public function pluck($key)
    {
        if ( ! $this->arr) {
            $this->result = [];
            return $this;
        }

        $tmp = [];
        foreach ($this->arr as $value) {
            $tmp[] = $value[$key];
        }
        $this->result = $tmp;
        return $this;
    }

    /**
     * 依某欄位排序
     * @return array
     */
    public function sortBy($key, $asc = true)
    {
        $this->result = $this->arr;
        usort($this->result, function ($a, $b) use ($key, $asc) {
            if ($a[$key] == $b[$key]) {
                return 0;
            } 
            $v = ($a[$key] > $b[$key]) ? 1 : -1;
            $v = ($asc) ? $v : $v * -1;
            return $v;
        });
        return $this;
    }

    /**
     * 取得結果
     * @return array
     */
    public function toArray()
    {
        return $this->result;
    }
}


/* End of file collect_helper.php */
/* Location: ./application/helpers/collect_helper.php */
