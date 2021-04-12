<html>
<body>
<?= $this->Html->charset() ?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <?= $this->Html->css('base.css') ?>
   <?= $this->Html->css('style.css') ?>

   <?= $this->fetch('css') ?>
   <?= $this->fetch('script') ?>
   <nav class="top-bar expanded" data-topbar role="navigation">
       <ul class="title-area large-3 medium-4 columns">
           
       </ul>
       <div class="top-bar-section">
           <ul class="right">
               <li>this is footer section</li>
           </ul>
       </div>
   </nav>

</body>
</html>
