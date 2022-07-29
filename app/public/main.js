const date = new Date();

const readCalendar = () => {
    date.setDate(1);
    const monthDays = document.querySelector('.days');
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    const firstDayIndex = date.getDay();
    const lastDayIndex = date.getDay(date.getFullYear(), date.getMonth() + 1, 0);
    const nextDays = 7 - lastDayIndex - 1;
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    document.querySelector(".date h1").innerHTML = months[date.getMonth()] + "   " + date.getFullYear();
    document.querySelector(".date p").innerHTML = new Date().toDateString();
    let days = "";
    for (let i = firstDayIndex; i > 0; i--) {
        days += '<div class="prev-date">${prevLastDay-i+1}</div>';
    }
    for (let j = 1; j <= lastDay; j++) {
        if (j == new Date().getDate() && date.getMonth() === new Date().getMonth() && date.getFullYear() === new Date().getFullYear()) {
            days += '<div class="today">${j}</div>';
        } else {
            days += '<div class="days">${j}</div>';
        }
    }
    for (let k = 1; k <= nextDays; k++) {
        days += '<div class="next-date">${k}</div>';
        monthDays.innerHTML = days ;
    }
};

document.querySelector(".prev").addEventListener('click', () => {
    date.setMonth(date.getMonth() - 1);
    readCalendar();
});
document.querySelector(".next").addEventListener('click', () => {
    date.setMonth(date.getMonth() + 1);
    readCalendar();
});
readCalendar();

/*
document.querySelectorAll('.days').forEach(item => {
    item.addEventListener('click', event => {
        alert(event.target.innerText)
    })
});*/