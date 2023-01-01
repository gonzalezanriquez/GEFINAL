<?php require base_path('views/partials/_head.php');  ?>
 <?php require base_path('views/partials/_nav.php');  ?>
<?php require base_path('views/partials/_header.php');  ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <ul>

            <?php foreach ($notes as $note) : ?>


                <li>
                    <a href="/note?id= <?= $note['id'] ?>" class="text-blue-500 hover:underline" >
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
        <p class="mt-6">
        <form method="POST">
                <button type="submit" class="text-blue-500 hover:underline">Delete All Notes</button>
        </form>
        </p>

    </div>
  </main>
  <?php base_path('views/partials/_footer.php');  ?>