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
        <div  style="color:red; font-size:30px;" width:100px; class="top-bar-section">
           <ul class="left" margin:15px>
            <a href="">Home</a>
            <a href="edit.ctp">Contact</a>
            <a href="#about">About</a>
           </ul>
       </div>
       </nav>
      </body>
     </html>
