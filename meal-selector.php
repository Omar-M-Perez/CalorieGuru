<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalorieGuru</title>
    <link rel="shortcut icon" href="./assets/logo_circle.png" type="image/png">

    <link rel="stylesheet" href="./css/meal-selector.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/text.css">
</head>
<body>
    <?php include './nav.php';?>
    <main>
        <form action="meal.php" method="post">
            <!-- Meal Type -->
            <article class='select_tab inputfix active'>
                <h1>Meal Selector.</h1>
                <div class='content_box'><p>Select a Meal Type</p></div>

                <input type="radio" id="breakfast" name="mealType" value="Breakfast">
                <label for="breakfast">Breakfast</label>

                <input type="radio" id="dinner" name="mealType" value="Dinner">
                <label for="dinner">Dinner</label>

                <input type="radio" id="lunch" name="mealType" value="Lunch">
                <label for="lunch">Lunch</label>

                <input type="radio" id="snack" name="mealType" value="Snack">
                <label for="snack">Snack</label>

                <input type="radio" id="teatime" name="mealType" value="Teatime">
                <label for="teatime">Teatime</label>
            </article>
            
            <!-- Meal Type -->
            <article class='select_tab inputfix hidden'>
                <h1>Meal Selector.</h1>
                <div class='content_box'><p>Select Diet Types</p></div>

                <div class='overflow'>
                    <input type="checkbox" id="balanced" name="diet[]" value="balanced">
                    <label for="balanced">Balanced</label>

                    <input type="checkbox" id="high-fiber" name="diet[]" value="high-fiber">
                    <label for="high-fiber">High-Fiber</label>

                    <input type="checkbox" id="high-protein" name="diet[]" value="high-protein">
                    <label for="high-protein">High-Protein</label>

                    <input type="checkbox" id="low-carb" name="diet[]" value="low-carb">
                    <label for="low-carb">Low-Carb</label>

                    <input type="checkbox" id="low-fat" name="diet[]" value="low-fat">
                    <label for="low-fat">Low-Fat</label>

                    <input type="checkbox" id="low-sodium" name="diet[]" value="low-sodium">
                    <label for="low-sodium">Low-Sodium</label>
                </div>
            </article>

            <!-- Cuisine Type -->
            <article class='select_tab inputfix hidden'>
                <h1>Meal Selector.</h1>
                <div class='content_box'><p>Select Cuisine</p></div>
                <div class='overflow'>

                <input type="radio" id="american" name="cuisine" value="American">
                <label for="american">American</label>

                <input type="radio" id="asian" name="cuisine" value="Asian">
                <label for="asian">Asian</label>

                <input type="radio" id="british" name="cuisine" value="British">
                <label for="british">British</label>

                <input type="radio" id="caribbean" name="cuisine" value="Caribbean">
                <label for="caribbean">Caribbean</label>

                <input type="radio" id="central-europe" name="cuisine" value="Central Europe">
                <label for="central-europe">Central Europe</label>

                <input type="radio" id="chinese" name="cuisine" value="Chinese">
                <label for="chinese">Chinese</label>

                <input type="radio" id="eastern-europe" name="cuisine" value="Eastern Europe">
                <label for="eastern-europe">Eastern Europe</label>

                <input type="radio" id="french" name="cuisine" value="French">
                <label for="french">French</label>

                <input type="radio" id="indian" name="cuisine" value="Indian">
                <label for="indian">Indian</label>

                <input type="radio" id="italian" name="cuisine" value="Italian">
                <label for="italian">Italian</label>

                <input type="radio" id="japanese" name="cuisine" value="Japanese">
                <label for="japanese">Japanese</label>

                <input type="radio" id="kosher" name="cuisine" value="Kosher">
                <label for="kosher">Kosher</label>

                <input type="radio" id="mediterranean" name="cuisine" value="Mediterranean">
                <label for="mediterranean">Mediterranean</label>

                <input type="radio" id="mexican" name="cuisine" value="Mexican">
                <label for="mexican">Mexican</label>

                <input type="radio" id="middle-eastern" name="cuisine" value="Middle Eastern">
                <label for="middle-eastern">Middle Eastern</label>

                <input type="radio" id="nordic" name="cuisine" value="Nordic">
                <label for="nordic">Nordic</label>

                <input type="radio" id="south-american" name="cuisine" value="South American">
                <label for="south-american">South American</label>

                <input type="radio" id="south-east-asian" name="cuisine" value="South East Asian">
                <label for="south-east-asian">South East Asian</label>
                </div>
            </article>
            
            <!-- Health Type -->
            <article class='select_tab inputfix hidden'>
                <h1>Meal Selector.</h1>
                <div class='content_box'><p>Select Health Requirements</p></div>
                <div class='overflow'>
                    <input type="checkbox" id="health-alcohol-cocktail" name="health[]" value="alcohol-cocktail">
                    <label for="health-alcohol-cocktail">Alcohol-Cocktail</label>
                    
                    <input type="checkbox" id="health-alcohol-free" name="health[]" value="alcohol-free">
                    <label for="health-alcohol-free">Alcohol-Free</label>
                    
                    <input type="checkbox" id="health-celery-free" name="health[]" value="celery-free">
                    <label for="health-celery-free">Celery-Free</label>
                    
                    <input type="checkbox" id="health-crustacean-free" name="health[]" value="crustacean-free">
                    <label for="health-crustacean-free">Crustacean-Free</label>
                    
                    <input type="checkbox" id="health-dairy-free" name="health[]" value="dairy-free">
                    <label for="health-dairy-free">Dairy-Free</label>
                    
                    <input type="checkbox" id="health-DASH" name="health[]" value="DASH">
                    <label for="health-DASH">DASH</label>
                    
                    <input type="checkbox" id="health-egg-free" name="health[]" value="egg-free">
                    <label for="health-egg-free">Egg-Free</label>
                    
                    <input type="checkbox" id="health-fish-free" name="health[]" value="fish-free">
                    <label for="health-fish-free">Fish-Free</label>
                    
                    <input type="checkbox" id="health-fodmap-free" name="health[]" value="fodmap-free">
                    <label for="health-fodmap-free">FODMAP-Free</label>
                    
                    <input type="checkbox" id="health-gluten-free" name="health[]" value="gluten-free">
                    <label for="health-gluten-free">Gluten-Free</label>
                    
                    <input type="checkbox" id="health-immuno-supportive" name="health[]" value="immuno-supportive">
                    <label for="health-immuno-supportive">Immuno-Supportive</label>
                    
                    <input type="checkbox" id="health-keto-friendly" name="health[]" value="keto-friendly">
                    <label for="health-keto-friendly">Keto-Friendly</label>
                    
                    <input type="checkbox" id="health-kidney-friendly" name="health[]" value="kidney-friendly">
                    <label for="health-kidney-friendly">Kidney-Friendly</label>
                    
                    <input type="checkbox" id="health-kosher" name="health[]" value="kosher">
                    <label for="health-kosher">Kosher</label>
                    
                    <input type="checkbox" id="health-low-fat-abs" name="health[]" value="low-fat-abs">
                    <label for="health-low-fat-abs">Low Fat Abs</label>
                    
                    <input type="checkbox" id="health-low-potassium" name="health[]" value="low-potassium">
                    <label for="health-low-potassium">Low Potassium</label>
                    
                    <input type="checkbox" id="health-low-sugar" name="health[]" value="low-sugar">
                    <label for="health-low-sugar">Low Sugar</label>
                    
                    <input type="checkbox" id="health-lupine-free" name="health[]" value="lupine-free">
                    <label for="health-lupine-free">Lupine-Free</label>
                    
                    <input type="checkbox" id="health-Mediterranean" name="health[]" value="Mediterranean">
                    <label for="health-Mediterranean">Mediterranean</label>
                    
                    <input type="checkbox" id="health-mollusk-free" name="health[]" value="mollusk-free">
                    <label for="health-mollusk-free">Mollusk-Free</label>
                    
                    <input type="checkbox" id="health-mustard-free" name="health[]" value="mustard-free">
                    <label for="health-mustard-free">Mustard-Free</label>
                    
                    <input type="checkbox" id="health-no-oil-added" name="health[]" value="no-oil-added">
                    <label for="health-no-oil-added">No Oil Added</label>
                    
                    <input type="checkbox" id="health-paleo" name="health[]" value="paleo">
                    <label for="health-paleo">Paleo</label>
                    
                    <input type="checkbox" id="health-peanut-free" name="health[]" value="peanut-free">
                    <label for="health-peanut-free">Peanut-Free</label>
                    
                    <input type="checkbox" id="health-pescatarian" name="health[]" value="pescatarian">
                    <label for="health-pescatarian">Pescatarian</label>
                    
                    <input type="checkbox" id="health-pork-free" name="health[]" value="pork-free">
                    <label for="health-pork-free">Pork-Free</label>
                    
                    <input type="checkbox" id="health-red-meat-free" name="health[]" value="red-meat-free">
                    <label for="health-red-meat-free">Red Meat-Free</label>
                    
                    <input type="checkbox" id="health-sesame-free" name="health[]" value="sesame-free">
                    <label for="health-sesame-free">Sesame-Free</label>
                    
                    <input type="checkbox" id="health-shellfish-free" name="health[]" value="shellfish-free">
                    <label for="health-shellfish-free">Shellfish-Free</label>
                    
                    <input type="checkbox" id="health-soy-free" name="health[]" value="soy-free">
                    <label for="health-soy-free">Soy-Free</label>
                    
                    <input type="checkbox" id="health-sugar-conscious" name="health[]" value="sugar-conscious">
                    <label for="health-sugar-conscious">Sugar Conscious</label>
                    
                    <input type="checkbox" id="health-sulfite-free" name="health[]" value="sulfite-free">
                    <label for="health-sulfite-free">Sulfite-Free</label>
                    
                    <input type="checkbox" id="health-tree-nut-free" name="health[]" value="tree-nut-free">
                    <label for="health-tree-nut-free">Tree Nut-Free</label>
                    
                    <input type="checkbox" id="health-vegan" name="health[]" value="vegan">
                    <label for="health-vegan">Vegan</label>
                    
                    <input type="checkbox" id="health-vegetarian" name="health[]" value="vegetarian">
                    <label for="health-vegetarian">Vegetarian</label>
                    
                    <input type="checkbox" id="health-wheat-free" name="health[]" value="wheat-free">
                    <label for="health-wheat-free">Wheat-Free</label>
                </div>
            </article>


            <article class='buttons'>
                <div onclick="previousPage()" id='previous_button'>Previous</div>
                <input type="submit" value="Submit" id='submit_button'>
                <div onclick="nextPage()" id='next_button'>Next</div>
                <script src="./js/select-pages.js"></script>
            </article>
        </form>
    </main>
</body>
</html>