<?php
include("views/components/head.php");
?>

<body>
    <header class="menuheader-admin">

        <a href="menus-manager" class="button-menu">Retour</a>
        <div class="container-logo-menu">
            <a href="index-manager"><img class="logo-menu" src="public/img/logo.png" alt="Logo PUB"></a>
            <h1 class="menu-tire">MENU</h1>
        </div>


    </header>
    <main class="menu-add">
        <h1>Modifier</h1>
        <form action="update-dish" method="post" enctype="multipart/form-data" class="formedit">
            <input type="hidden" name="id" value="<?= $dish->id ?>">
            <label>
                Plat:
                <input class="edit" type="text" name="name" value="<?= $dish->name ?>">
            </label>
            <label>
                description:
                <input class="edit" type="text" name="description" value="<?= $dish->description ?>">
            </label>
            <label>
                price:
                <input class="edit" type="text" name="price" value="<?= $dish->price ?>">
            </label>
            <label class="gap">
                category:
                <select name="category_id" class="option">

                    <?php foreach ($categories as $category) : ?>
                        <option class="option" value="<?= $category->id ?>" <?php if ($dish->category_name == $category->name) : ?> selected <?php endif ?>><?= $category->name ?></option>
                    <?php endforeach; ?>
                </select>
            </label>

            <label>
                <h1>subcategory :</h1>
            </label>
            <div class="subs">
                <?php foreach ($subs as $sub) : ?>
                    <label class="subs">
                        <?= $sub->name ?>
                        <?= $sub->id ?>
                        <input type="checkbox" value="<?= $sub->id ?>" name="sub[]" <?php foreach ($subFromId as $subId) : ?> <?php if ($subId->subcategory_id == $sub->id) : ?> checked > <?php endif; ?><?php endforeach; ?>     
                    </label>

                <?php endforeach; ?>
            </div>


            <input type="submit" value="modifier" class="submit-admin">
        </form>

    </main>


    <?php
    include("views/components/foot.php")
    ?>