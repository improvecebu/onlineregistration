<h3>Apps</h3>
<p><?php echo anchor('apps/add', 'Add App'); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Token</th>
    <th></th>
  </tr>
  <?php foreach ($apps as $app): ?>
  <tr>
    <td><?php echo $app->id; ?></td>
    <td><?php echo $app->name; ?></td>
    <td><?php echo $app->token; ?></td>
    <td>
      <?php echo anchor('apps/edit/' . $app->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteApp('<?php echo $app->id; ?>', <?php echo $app->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteApp(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'apps/delete/' + id;
    } else {
      return false;
    }
  }
</script>