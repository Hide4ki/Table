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
          $path = __DIR__ . '/' . strtolower(str_replace('\\', '/', $class)) . '.php'; 
          if (file_exists($path)) 
          { 
            require_once $path; 
          } 
          else 
          { 
            echo $path; 
          } 
        }
      ); 
      define('MAIN', __DIR__);
      $table = new table('table1');
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
    ?>  
  </body>
</html>