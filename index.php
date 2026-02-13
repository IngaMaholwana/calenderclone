<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender project</title>
    <meta name="description" content="A simple calendar project built with HTML, CSS, and JavaScript.">
    <meta name="keywords" content="calendar, project, HTML, CSS, JavaScript">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>🗓️Calendar Project</h1>
    </header>

    <!-- clock -->
    <div class="clock-container">
        <div id="clock"></div>
    </div>

    <!-- calender section/ -->
     <div class="calender">

        <div class="nav-btn-container">
            <!-- navigate between months -->
             <button class="nav-btn" onclick="" >⏪</button> 
             <h2 id="month-year" style="margin: 0;"></h2>
             <button class="nav-btn" onclick="">⏩</button>

        </div>

                 <!-- calendar grid will be generated here -->
        <div class="calender-grid" id="calender-grid"> </div>


    </div>
     <!-- modal for add/edit/delete appointment -->
    <div id="eventSelectorWrapper">
        <label></label>
    </div>

    
</body>


</html>