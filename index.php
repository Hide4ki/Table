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
              ['Mike',  10000, true],
              ['Jim',   8000,  true],
              ['Alice', 11250, false],
              ['Bob',  7000,   true]
            ])
            ->setSort()
            ->setStyle('table_blur')
            ->setAttr([['align','center']])
            ->addColumn('string', 'Name')
            ->addColumn('number', 'Salary')
            ->addColumn('boolean', 'Full Time Employee');
      $Render->drawTable($table);
    ?>  
  </body>
</html>