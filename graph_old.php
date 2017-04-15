
<!doctype html>
<html lang="en">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<?php

$searchTerm = $_GET["search"];

include 'getData.php';


$chartType = 'polarArea';

if ($_GET["type"] != null && $_GET["type"] != ''){
$chartType = $_GET["type"];
}

//echo "graphing stuff";

?>

<script src="Chart.js/Chart.js"></script>


<style>
div.container {
    width: 100%;
    margin: 0;
}

header, footer {
    clear: left;
    text-align: center;
    margin: 0;
        
}

h1{
    
font-family: 'Roboto', sans-serif;

}

body {
        margin: 0;
        
}


article {
    margin: auto;
    width: 90%;
}

.gradient {
        margin: 0;
        
    background: linear-gradient(291deg, #2cc9d6, #2c9cd6, #9d2cd6, #522cd6, #2cd67a);
background-size: 1000% 1000%;

-webkit-animation: Plum 30s ease infinite;
-moz-animation: Plum 30s ease infinite;
-o-animation: Plum 30s ease infinite;
animation: Plum 30s ease infinite;
}

@-webkit-keyframes Plum {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes Plum {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-o-keyframes Plum {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes Plum { 
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}


</style>
<header>
    
    
    <h1><?php echo($songName); ?> by <?php echo($artist); ?></h1>
    
<!-- <script src="Chart.js/Chart.js"></script>
 -->
</header>

<article>
    <canvas id="profanityChart" width="100%" height="50"></canvas>
<script>


var chartType = '<?php echo $chartType; ?>';
var chartData = [<?php echo $occurenceList; ?>];
var chartLabels = [<?php echo $profanityList; ?>];

//var chartLabels = ["a","b","c"];
//var chartData = [1,2,3];
var ctx = document.getElementById("profanityChart");


var profanityChart = new Chart(ctx, {
    data: {
    datasets: [{
        data: chartData,
        backgroundColor: [
            "#e53935",
            "#ff5722",
            "#ff9800",
            "#ffc107",
            "#ffeb3b",
            "#cddc39",
            "#8bc34a",
            "#4caf50",
            "#009688",
            "#00bcd4",
            "#03a9f4",
            "#2196f3",
            "#3f51b5",
            "#673ab7",
            "#9c27b0",
            "#e91e63"
            
        ],
        

        label: 'Times Said' // for legend
    }],
    labels: chartLabels
},
    type: chartType,
    options: {
        responsive:true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


</script>
    




</article>
