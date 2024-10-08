<?php if (empty($joke) || $userId == $joke->authorId): ?>
<form action="" method="post">
  <input type="hidden" name="joke[id]" value="<?=$joke->id ?? ''?>">
  <label for="joketext">Type your joke here:</label>
  <textarea id="joketext" name="joke[joketext]" rows="3" cols="40"><?=$joke->joketext ?? ''?></textarea>

  <p>Select categories for this joke:</p>
  <?php foreach ($categories as $category): ?>
  <input type="checkbox" name="category[]" value="<?=$category->id?>" /> <label><?=$category->name?></label>

  <?php endforeach; ?>

  <input type="submit" name="submit" value="Save">
</form>
<?php else: ?>

<p>You may only edit jokes that you posted.</p>

<?php endif; ?>