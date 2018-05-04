<?php
  namespace Model;
 
	class table
  {
    public $stringAttribute = '';
    public $columns = [];
    public $typeCol = [];
    public $rows = [];
    public $sort = false;
    public $style = 'table_blur';
    public $name;
    public function __construct(string $name)
    {
      $this->name = $name;
      return $this;
    }
    public function setAttr(array $data = [])
    {
      $attr = '';
      foreach ($data as $item)
      {
        if (is_array($item))
        {
          $attr .= $item[0] . '="' . $item[1] .'" ';
        }
        else 
        {
          $attr .= $item;
        }
      }
      $this->stringAttribute = $attr;
      return $this;
    }
    public function setSort()
    {
      $this->sort = true;
      return $this;
    }
    public function setStyle(string $name)
    {
      $this->style = $name;
      return $this;
    }
    public function addColumn(string $type,string $value)
    {
      $this->columns[] = $value;
      $this->typeCol[] = $type;
      return $this;
    }
    public function addRows(array $data = [])
    {
      $table = [];
      foreach ($data as $rows => $col)
      {
        foreach ($col as  $val)
        {
          if ($val === false) $val = '&#9746;';
          if ($val === true) $val = '&#9745;';
          $table[$rows+1][] = $val;
        }
      }
      $this->rows = $table;
      return $this;
    }
	}
?>