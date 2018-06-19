<?php require './templates/partials/header.php';?>
<table class="table-bordered">
<thead>
<tr>
<td>№</td>
<td>Заголовок</td>
<td>Описание</td>
<td>Картинка</td>
<td>Удалить</td>
</tr>
</thead>
<tbody>
<?php foreach ($products as $product) {?>
  <tr>
  <td><?php echo $product -> id;?></td>
  <td><?php echo $product->title; ?></td>
  <td><?php echo $product->description; ?></td>
  <td><img class="imgm img-thumbnail" src="<?php echo $product->image; ?>" ></td>
  <td>
    <form method="POST" action="/admin/products">
      <input type="hidden" name="id" value="<?php echo $product->id; ?>">
      <button class="clous" type="submit" class="btn btn-primary" id="delProductButton">x</button>
    </form>
  </td>
  </tr>
  </tbody>
 <?php } ?>
</table>

<?php require './templates/partials/footer.php';?>
