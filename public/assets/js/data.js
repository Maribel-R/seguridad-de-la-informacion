// Function to get the name of the day of the week
function getDayName() {
    const days = [
        'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado',
    ];
    return days[new Date().getDay()];
}

// Function to get the name of the month
function getMonthName() {
    const monthNames = [
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];
    return monthNames[new Date().getMonth()];
}

// Function to get the current time in HH:MM format
function getCurrentTime() {
    let date = new Date();
    let hour = date.getHours();
    let minute = date.getMinutes();
    
    // Adding leading zeros if necessary
    if (hour < 10) {
        hour = "0" + hour;
    }
    if (minute < 10) {
        minute = "0" + minute;
    }
    
    return hour + ":" + minute;
}

// Function to update the clock every second
function updateClock() {
    let time = getCurrentTime();
    let clockElement = document.getElementById("clock");
    if (clockElement) {
        clockElement.innerHTML = time;
    }
}

// Set interval to update the clock every second
setInterval(updateClock, 1000);

// Function to update the date and time on page load
function updateDateTime() {
    let dateTimeElement = document.getElementById("dateTime");
    if (dateTimeElement) {
        let day = getDayName();
        let date = new Date().getDate();
        let month = getMonthName();
        let year = new Date().getFullYear();
        dateTimeElement.innerHTML = day + ', ' + date + ' de ' + month + ' ' + year;
    }
}

// Call the function to update the date and time on page load
updateDateTime();
