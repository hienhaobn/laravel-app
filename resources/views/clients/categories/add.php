<h1>Add category</h1>
<form method="POST" action="<?php echo route('categories.add') ?>">
    <div>
        <input type="text" name="category_name" placeholder="Enter category" />
    </div>
    <?php echo csrf_field() ?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" /> -->
    <button type="submit">Add category</button>
</form>
