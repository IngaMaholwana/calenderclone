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
    <div class="modal" id="eventModal">
        <div class="modal-content">


    <div id="eventSelectorWrapper">
        <label for="eventSelector">
            <!-- will help which event want to edit/ delete -->
            <strong>Select Event:</strong>
        </label>
        <select name="" id="eventSelector" onchange="">
            <option disable selected> Choose Event... </option>
        </select>
    </div>

    <!-- main form edit or insert events post get thing -->

    <form method ="POST" id="eventForm">
        <input type="hidden" name="action" id="formAction" value="add">
        <input type="hidden" name="event_Id" id="eventId" >

        <label for="courseName">Course Title:</label>
        <input type="text" name="courseName" id="course_name" required>

        <label for="instructorName">instructorName:</label>
        <input type="text" name="instructor_name" id="instructorName" required>

        <label for="startDate">Start Date:</label>
        <input type="date" name="start_date" id="startDate" required>

        <label for="endDate">End Date:</label>
        <input type="date" name="end_date" id="endDate" required>

        <button type="submit">Save Event</button>
    </form>

    <!-- Delete form for task/event -->
    <form method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="event_Id" id="deleteEventId">
        <button type="submit" class="submit-btn">Delete Event 🤾🏾‍♂️</button> 
    </form>

    <!-- cancel -->
    <button type="button" class="cancel-btn">Cancel</button>
        </div>
    </div>

    <script src="calendar.js"></script>


</body>


</html>