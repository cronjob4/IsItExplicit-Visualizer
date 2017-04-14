
<!doctype html>
<html lang="en">

<?php

include 'getData.php';

//echo "graphing stuff";

?>

<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin: auto;
    width: 100%;
    padding: 10px;
}
</style>

<header>
    
    
    <h1>Song Name: <?php echo($songName); ?></h1>
    
<script src="Chart.js/Chart.js"></script>

</header>

<article>
    <canvas id="myChart" width="100%" height="50"></canvas>
<script>




var ctx = document.getElementById("myChart");


var myChart = new Chart(ctx, {
    data: {
    datasets: [{
        data: [
            11,
            16,
            7,
            3,
            14
        ],
        backgroundColor: [
            "#FF6384",
            "#4BC0C0",
            "#FFCE56",
            "#E7E9ED",
            "#36A2EB"
        ],
        label: 'My dataset' // for legend
    }],
    labels: [
        "Red",
        "Green",
        "Yellow",
        "Grey",
        "Blue"
    ]
},
    type: 'polarArea',
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