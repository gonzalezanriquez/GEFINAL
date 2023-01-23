<?php require base_path('views/partials/_head.php');  ?>
 <?php require base_path('views/partials/_nav.php');  ?>
<?php require base_path('views/partials/_header.php');  ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

      <p> <?= htmlspecialchars($note['body']) ?> </p>

        <p class="mt-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>

        <form class="mt-6" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>

    </div>
  </main>
  <?php base_path('views/partials/_footer.php');  ?>