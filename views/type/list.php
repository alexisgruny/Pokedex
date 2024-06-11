<div class="typeList">
    <?php foreach ($typeList as $type) { ?>
        <a href="typeList?id=<?= $type['id']?>">
            <div class="typeCard">
                <p class="typeName"> <?= $type['name'] . "\n"; ?></p>
                <img class="typeImage" src="<?= $type['image'] ?> ">
            </div>
        <?php } ?>
</div>
</a>