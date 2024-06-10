<div class="pokemonList">
    <?php foreach ($pokemonList as $pokemon) { ?>
        <a href="detail?id=<?= $pokemon['id']?>">
            <div class="pokemonCard">
                <p class="pokemonNumber"> # <?= $pokemon['id'] ?> </p>
                <p class="pokemonName"> <?= $pokemon['name'] . "\n"; ?></p>
                <img class="pokemonImage" src="<?= $pokemon['image'] ?> ">
            </div>
        <?php } ?>
</div>
</a>