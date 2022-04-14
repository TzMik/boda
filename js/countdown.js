let countDownDate = new Date("2022-08-19T20:00:00").getTime();

let daysDiv = document.getElementById('days');
let hoursDiv = document.getElementById('hours');
let minsDiv = document.getElementById('mins');
let secsDiv = document.getElementById('secs');

window.onload = () => {
    setInterval(function() {
        let now = new Date().getTime();
        let timeleft = countDownDate - now;

        let days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
        let hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

        daysDiv.innerText = days;
        hoursDiv.innerText = hours;
        minsDiv.innerText = minutes;
        secsDiv.innerText = seconds;
    }, 1000)
}