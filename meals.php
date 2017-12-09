<?php include_once('./layout/header.php')?>
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-row w3-padding-64">
  <div class="w3-rest w3-container">
    <h1 class="w3-text-teal">Nutrition</h1>
    <h4 class="w3-text-teal">Enter your meal's nutritional information:</h4>

          <form class="w3-container w3-third" action="action_page.php" method="post">

          <label class="w3-text-black"><b>Description</b></label>
          <input class="w3-input w3-border w3-light-grey" name="description" type="text"
          pattern="[A-Za-z0-9\s]+" required>

          <label class="w3-text-black"><b>Calories</b></label>
          <input class="w3-input w3-border w3-light-grey" name="calories" type="text"
          pattern="[0-9]+" title="This field only accepts numbers." required>

          <label class="w3-text-black"><b>Total Fat (g)</b></label>
          <input class="w3-input w3-border w3-light-grey" name="total fat" type="text"
          pattern="[0-9]+" title="This field only accepts numbers." required>

          <label class="w3-text-black"><b>Cholesterol (mg)</b></label>
          <input class="w3-input w3-border w3-light-grey" name="cholesterol" type="text"
          pattern="[0-9]+" title="This field only accepts numbers." required>

          <label class="w3-text-black"><b>Sodium (mg)</b></label>
          <input class="w3-input w3-border w3-light-grey" name="sodium" type="text"
          pattern="[0-9]+" title="This field only accepts numbers." required>

          <label class="w3-text-black"><b>Total Carbohydrates (g)</b></label>
          <input class="w3-input w3-border w3-light-grey" name="total carbohydrates" type="text"
          pattern="[0-9]+" title="This field only accepts numbers." required>

          <label class="w3-text-black"><b>Protein (g)</b></label>
          <input class="w3-input w3-border w3-light-grey" name="protein" type="text"
          pattern="[0-9]+" title="This field only accepts numbers." required>

          <label class="w3-text-black"><b>Category:</b></label>
          

          <div class="w3-container">

              <div class="w3-quarter">
              <input class="w3-radio" type="radio" name="category" value="breakfast" required>
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



          <form class="w3-container w3-third" action="action_page.php" method="post">
          <h4 class="w3-text-black">Alternatively, you can select a recent meal's information:</h4>
          <?php 
          // There's going to be some code that'll query the database for recent
          // meals but these will be placeholders for the time being
          ?>

          <div class="w3-half">
          <input class="w3-check" name="Chicken Breast" type="checkbox">
          <label>Chicken Breast</label>
          </div>

          <div class="w3-half">
          <input class="w3-check" name="Diet Dr. Pepper (12 oz)" type="checkbox">
          <label>Diet Dr. Pepper (12 oz)</label>
          </div>

          <div class="w3-half">
          <input class="w3-check" name="Steamed Broccoli" type="checkbox">
          <label>Steamed Broccoli</label>
          </div>

          <div class="w3-half">
          <input class="w3-check" name="White Rice" type="checkbox">
          <label>White Rice</label>
          </div>

          <div class="w3-half">
          <input class="w3-check" name="Pepsi (12 oz)" type="checkbox">
          <label>Pepsi (12 oz)</label>
          </div>

          <div class="w3-half">
          <input class="w3-check" name="Steamed Vegetables" type="checkbox">
          <label>Steamed Vegetables</label>
          </div>

          <div class="w3-container">
          <button class="w3-btn w3-block w3-grey w3-margin-top">Submit</button>
          </div>
          </form>
  </div>

</div>

<?php include_once('./layout/footer.php');?>