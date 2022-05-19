window.onload = function() {
    setInterval(setClock , 1000);
    setClock();
};

function setClock() {
    const today = new Date;
    const week = ['(일)','(월)','(화)','(수)','(목)','(금)','(토)'];
    console.log(week[today.getDay()]);

    theHours = today.getHours();

    if(theHours > 12) {
        dayNight = theHours - 12;
    } else {
        
    }

    const date = (today.getMonth() + 1) + "월" + today.getDate() + "일" + week[today.getDay()];
    let dayNight = "오전";
    const time = today.getHours() + ":" + today.getMinutes();

    document.getElementById("date").innerHTML = date;
    document.getElementById("dayNight").innerHTML = dayNight;
    document.getElementById("time").innerHTML = time;
}

function logout() {
    location.href = "logout.php";
}

function myInfoUpdate() {
    location.href = "my_info_update.php";
}

