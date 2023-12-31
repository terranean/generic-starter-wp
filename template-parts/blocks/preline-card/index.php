<!-- https://preline.co/docs/card.html -->
<?php 
// $a = blockstudio attributes
$i = $a['image'];
?>
<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
  <img class="w-full h-auto rounded-t-xl" src="<?php echo $i['url']; ?>" alt="<?php echo $i['alt']; ?>">
  <div class="p-4 md:p-5">
    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
        <?php echo $a['title']; ?>
    </h3>
    <p class="mt-1 text-gray-800 dark:text-gray-400">
        <?php echo $a['desc']; ?>
    </p>
    <a class="mt-3 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="<?php echo $a['link_url']; ?>">
      <?php echo $a['link_text']; ?>
    </a>
  </div>
</div>