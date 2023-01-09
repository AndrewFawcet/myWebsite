<!DOCTYPE html>
<html>

	<head>
		<meta charset= "utf-8"-/>
    <meta name = "viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="style.css">

		<title style="font-family: Arial">  Messin w/ Accordians </title>

  </head>
  <div class = "grid">
    <div class = "header">
      Header
      <br>

      <?php 
        $name = "Blippity"       
      ?>   
      <?php
        echo "Hello, $name!"        
       ?>

    </div>
    <div class = "title">
      <div class = "titletext">
        Accordians
      </div>
    </div>
    
    <div class = "sidebar">
      Sidebar

      <!-- using php to make a list -->
      <?php
      for ($i = 1; $i <= 10; $i++) {
        ?>
        <li>number <?php echo $i ?></li> 
        <?php
      }?>


    </div>
    <div class = "content">
      <button class="accordion">
        <span class = accordian_text> Venus will forever... </span>
      </button>
      
      <div class="panel">
        <p class = burntext>burn</p>
        <a href="https://en.wikipedia.org/wiki/Venus"> <img class= "venuspic" src= "venus.png" alt = "venus"> </a>
        
      </div>

      <button class="accordion">
        <span class = accordian_text>For diamonds will ever... </span>
      </button>

      <div class="panel">
        <p class = turntext>turn</p>
        <svg viewBox="0 0 800 300">
          <polygon class="turn-01 darkestTulip" points="400, 280, 310, 150, 400, 20, 490, 150"/>
          <polygon class="turn-02 darkTulip" points="400, 280, 310, 150, 400, 20, 490, 150"/>
          <polygon class="turn-03 tulip" points="400, 280, 310, 150, 400, 20, 490, 150"/>
          <polygon class="turn-04 paleTulip" points="400, 280, 310, 150, 400, 20, 490, 150"/>
          <polygon class="turn-05 palestTulip" points="400, 280, 310, 150, 400, 20, 490, 150"/>
        </svg>
      </div>

      <button class="accordion">
        <span class = accordian_text>Fevered brow doth press and ... </span>
      </button>

      <div class="panel">
        <p class = churntext>churn</p>
        <div class="container">
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>        
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
          <div class="ball"></div>
        </div>
      </div> 
  
  
    </div>
    <div class = "footer">Footer</div>
    


  </div>



  <!--      this loads the ionicons file  for use (not used at mo. ) -->
<!--  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  -->

  <!--      this loads the javascript file -->
  <script type="text/javascript" src="script.js"></script>

  
</html>