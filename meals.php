<?php include_once('./layout/header.php')?>
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-rest w3-container">
      <h1 class="w3-text-teal">Nutrition</h1>
      <h4 class="w3-text-teal">Enter your meal's nutritional information:</h4>

            <form class="w3-container w3-third" action="action_page.php" method="post">
            <label class="w3-text-black"><b>Description</b></label>
            <input class="w3-input w3-border w3-light-grey" name="description" type="text">

            <label class="w3-text-black"><b>Calories</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <label class="w3-text-black"><b>Total Fat (g)</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <label class="w3-text-black"><b>Cholesterol (mg)</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <label class="w3-text-black"><b>Sodium (mg)</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <label class="w3-text-black"><b>Total Carbohydrates (g)</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <label class="w3-text-black"><b>Protein (g)</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text">

            <label class="w3-text-black"><b>Category:</b></label>
            

            <div class="w3-container">

                <div class="w3-quarter">
                <input class="w3-radio" type="radio" name="category" value="breakfast">
                <label>Breakfast</label>
                </div>

                <div class="w3-quarter">
                <input class="w3-radio" type="radio" name="category" value="lunch">
                <label>Lunch</label>
                </div>

                <div class="w3-quarter">
                <input class="w3-radio" type="radio" name="category" value="dinner">
                <label>Dinner</label>
                </div>

                <div class="w3-quarter">
                <input class="w3-radio" type="radio" name="category" value="snack">
                <label>Snack</label>
                </div>

            </div>

            <div class="w3-container w3-padding-32">
                <button class="w3-btn w3-block w3-grey">Submit</button>
                </div>
            </form>



            <form class="w3-container w3-third">
            <h4 class="w3-text-black">Alternatively, you can select a recent meal's information:</h4>
            <?php 
            // There's going to be some PHP code that'll query the database for recent
            // meals but these will be placeholders for the time being
            ?>

            <div class="w3-third">
            <input class="w3-check" type="checkbox">
            <label>Milk</label>
            </div>

            <div class="w3-third">
            <input class="w3-check" type="checkbox">
            <label>Sugar</label>
            </div>

            <div class="w3-third">
            <input class="w3-check" type="checkbox">
            <label>Lemon</label>
            </div>

            <div class="w3-third">
            <input class="w3-check" type="checkbox">
            <label>Milk</label>
            </div>

            <div class="w3-third">
            <input class="w3-check" type="checkbox">
            <label>Sugar</label>
            </div>

            <div class="w3-third">
            <input class="w3-check" type="checkbox">
            <label>Lemon</label>
            </div>

            <div class="w3-container w3-padding-64">
            <button class="w3-btn w3-block w3-grey">Submit</button>
            </div>
            </form>
    </div>

  </div>

  <?php include_once('./layout/footer.php');?>