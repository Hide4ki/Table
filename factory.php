<?php
  namespace Table;
  use Table\Model\table as table;
  use Table\Model\Render as render;
  define('MAIN', __DIR__);
	class Factory
  {
    public function start($name) {
        $table = new table($name);
        $Render = new Render;
        $table->addRows([
          ['Артем',   32,  true],
          ['Марк',    45,  true],
          ['Радислав', 56, false],
          ['Саша',    67,  true],
          ['Юра',     78,  true]])
        ->setSort()
        ->setStyle('table_blur')
        ->setAttr([['align','center']])
        ->addColumn('string', 'Имя')
        ->addColumn('number', 'НЕ понтно че')
        ->addColumn('boolean', 'Сдал экзамен');
      $Render->drawTable($table);
    }
	}
?>