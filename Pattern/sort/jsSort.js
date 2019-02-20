<script>
var <?= $obj->name ?> = document.getElementById('<?= $obj->name ?>');

<?= $obj->name ?>.onclick = function(e) 
{
  if (e.target.tagName != 'TH') return;
  if (e.target.getAttribute('data-sort')!='A')
  {
    e.target.setAttribute('data-sort','A');
    sortGridA(e.target.cellIndex, e.target.getAttribute('data-type'));
  }
  else
  {
    e.target.setAttribute('data-sort','B');
    sortGridB(e.target.cellIndex, e.target.getAttribute('data-type'));
  } 
};

function sortGridA(colNum, type) 
{
  var tbody = <?= $obj->name ?>.getElementsByTagName('tbody')[0];
  var rowsArray = [].slice.call(tbody.rows);
  var compare;

  switch (type) 
  {
    case 'number':
      compare = function(rowA, rowB) 
      {
        return rowA.cells[colNum].innerHTML - rowB.cells[colNum].innerHTML;
      };
      break;
    case 'boolean':
      compare = function(rowA, rowB) 
      {
        return rowA.cells[colNum].innerHTML > rowB.cells[colNum].innerHTML;
      };
      break;
    case 'string':
      compare = function(rowA, rowB) 
      {
        return rowA.cells[colNum].innerHTML > rowB.cells[colNum].innerHTML;
      };
      break;
  }
  rowsArray.sort(compare);
  <?= $obj->name ?>.removeChild(tbody);
  for (var i = 0; i < rowsArray.length; i++) 
  {
    tbody.appendChild(rowsArray[i]);
  }
  <?= $obj->name ?>.appendChild(tbody);

}

function sortGridB(colNum, type) 
{
  var tbody = <?= $obj->name ?>.getElementsByTagName('tbody')[0];
  var rowsArray = [].slice.call(tbody.rows);
  var compare;

  switch (type) 
  {
    case 'number':
      compare = function(rowA, rowB) 
      {
        return rowB.cells[colNum].innerHTML - rowA.cells[colNum].innerHTML ;
      };
      break;
    case 'boolean':
      compare = function(rowA, rowB) 
      {
        return rowA.cells[colNum].innerHTML < rowB.cells[colNum].innerHTML;
      };
      break;
    case 'string':
      compare = function(rowA, rowB) 
      {
        return rowA.cells[colNum].innerHTML < rowB.cells[colNum].innerHTML;
      };
      break;
  }
  rowsArray.sort(compare);
  <?= $obj->name ?>.removeChild(tbody);
  for (var i = 0; i < rowsArray.length; i++) 
  {
    tbody.appendChild(rowsArray[i]);
  }
  <?= $obj->name ?>.appendChild(tbody);

}
</script>