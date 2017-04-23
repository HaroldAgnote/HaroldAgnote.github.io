/**
 * Created by Harold on 12/6/2016.
 */

setInterval(time, 1000);

var date = new Date();

var displayDate = document.getElementById("todaysDate");

var display = "Today is " + date.toDateString();

function time()
{
    var time = new Date();
    displayDate.innerHTML = display + " - " + time.toLocaleTimeString();
}