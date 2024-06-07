<?php

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: meal-selector.php');
        exit();
    }

    require_once 'api.php';
        
    $url = queryBuilder($_POST);
    $response = fetchRecipe($url);

    echo "<script>console.log('" . $url . "')</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalorieGuru</title>
    <link rel="shortcut icon" href="./assets/logo_circle.png" type="image/png">

    
    <link rel="stylesheet" href="./css/meal.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/text.css">
</head>
<body>
    <?php include './nav.php';?>
    <main>
        <h1>Selected Meal.</h1>
        <section class="meal_box">
            <?php echo '<h3>' . strtoupper($response['cuisineType'][0]) . ' ' . strtoupper($response['mealType'][0]) . ' ' . strtoupper($response['dishType'][0]) . '</h3>'; ?>
            <section class="meal_contents">
                <div><img src=<?php echo '"' . $response['image'] . '"' ?> alt=""></div>
                <div>
                    <?php echo '<h3><a href="' . $response['url'] . '">' . strtoupper($response['label']) . '</a></h3>'; ?>  
                    <p>Calories: <?php echo $response['calories']?></p>
                    <p>Time: <?php echo $response['totalTime']?> minutes</p>
                </div>
                <p>
                    <?php 
                        $meal_ingredients = "";
                        for ($i = 0; $i < count($response['ingredientLines']); $i++) {
                            $meal_ingredients = $meal_ingredients . $response['ingredientLines'][$i] . '<br>';
                        }
                        echo $meal_ingredients; 
                    ?>
                </p>
                <?php 
                    $meal_cautions = "";
                    for ($i = 0; $i < count($response['cautions']); $i++) {
                        $meal_cautions = $meal_cautions . $response['cautions'][$i] . '<br>';
                    }

                    if (count($response['cautions']) > 0) {
                        echo '<p> WARNING: <br>' . $meal_cautions . '</p>'; 
                    }
                ?>
            </section>
        </section>
    </main>
</body>
</html>