<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Table</title>
    <link href="Pattern\style\table_blur.css?version=1.1" rel="stylesheet">
  </head>
  <body>
    <?php
      use Model\table as table;
      use Model\Render as Render;
      
      spl_autoload_register(
        function($class)
        {
          $path = str_replace('\\', '/', $class) . '.php';
          
          if (file_exists($path))
            include_once $path;
        }
      );
      $table = new table('table1');
      $Render = new Render;
      $table->addRows([
          ['Артем', 72, 38, 98, 92, 71, 39, false],
          ['Марк',   24, 11, 27, 15, 33, 39,  true],
          ['Радислав', 92, 70, 38, 77, 45, 37, false],
          ['Саша',  11, 24, 5, 90, 56, 87,   false],
          ['Юра',  19, 3, 1, 98, 93, 11,   false]])
        ->setSort()
        ->setStyle('table_blur')
        ->setAttr([['align','center']])
        ->addColumn('string', 'Имя')
        ->addColumn('number', 'Не нужные цифры')
        ->addColumn('number', 'Не нужные цифры')
        ->addColumn('number', 'Не нужные цифры')
        ->addColumn('number', 'Не нужные цифры')
        ->addColumn('number', 'Не нужные цифры')
        ->addColumn('number', 'Не нужные цифры')
        ->addColumn('boolean', 'Сдал экзамен');
      $Render->drawTable($table);
    ?>  
  </body>
</html>