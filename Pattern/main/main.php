<table class="<?= $obj->style ?>" id="<?= $obj->name ?>" <?php echo $obj->stringAttribute ?>>
  <thead>
    <tr>
      <th data-type="number" data-sort="A"></th>
      <?php foreach ($obj->columns as $key => $val): ?>
      <th data-type="<?= $obj->typeCol[$key] ?>" data-sort="A"><?= $val ?></th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody id="tbody-<?= $obj->name ?>">
    <?php foreach ($obj->rows as $key => $cell): ?>
      <tr>
        <td><?= $key ?></td>
        <?php foreach ($cell as $val): ?>
        <td><?= $val ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

