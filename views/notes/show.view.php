<?php require base_path('views/partials/_head.php');  ?>
 <?php require base_path('views/partials/_nav.php');  ?>
<?php require base_path('views/partials/_header.php');  ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


      <p> <?=  $note['body'] ?> </p>


        <p class="mt-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>
    </div>
  </main>
  <?php base_path('views/partials/_footer.php');  ?>