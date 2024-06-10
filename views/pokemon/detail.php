<div class="pokemonDetail">
    <h1 class="pokemonDetailName">#<?= $pokemonDetail['id'] . ' ' . $pokemonDetail['name'] . "\n"; ?></h1>
    <div class="headDetail">
        <img class="pokemonDetailImage" src="<?= $pokemonDetail['image'] ?> ">
        <img class="pokemonDetailSprite" src="<?= $pokemonDetail['sprite'] ?> ">
        <div class="pokemonDetailType">
            <?php foreach ($pokemonDetail['apiTypes'] as $pokemonType) : ?>
                <h2><?= $pokemonType['name'] ?> </h2>
                <img src=" <?= $pokemonType['image'] ?>" />
            <?php endforeach ?>
        </div>
    </div>
    <table>
        <caption> Statistique </caption>
        <tr>
            <th>PV</th>
            <th>Attaque</th>
            <th>Defense</th>
            <th>Attaque spécial</th>
            <th>Defense spécial</th>
            <th>Vitesse</th>
        </tr>
        <tr>
            <td><?= ($pokemonDetail['stats']['HP']) ?></td>
            <td><?= ($pokemonDetail['stats']['attack']) ?></td>
            <td><?= ($pokemonDetail['stats']['defense']) ?></td>
            <td><?= ($pokemonDetail['stats']['special_attack']) ?></td>
            <td><?= ($pokemonDetail['stats']['special_defense']) ?></td>
            <td><?= ($pokemonDetail['stats']['speed']) ?></td>
        </tr>
    </table>
    <table>
        <caption> Tableau de résistance et de faiblesse </caption>
        <tr>
            <?php foreach ($pokemonDetail['apiResistances'] as $pokemonWeakness) : ?>
                <th> <?= $pokemonWeakness['name'] ?> </th>
            <?php endforeach ?>
        </tr>
        <tr>
            <?php foreach ($pokemonDetail['apiResistances'] as $pokemonWeakness) : ?>
                <th> <?= $pokemonWeakness['damage_multiplier'] ?> </th>
            <?php endforeach ?>
        </tr>
    </table>
</div>