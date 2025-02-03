// Btn
const allBtn = document.getElementById('allToggle');
const laptopBtn = document.getElementById('laptopToggle');
const pcBtn = document.getElementById('pcToggle');
const monitorBtn = document.getElementById('monitorToggle');

// Hiding text
document.getElementById('all').style.display = "block";
document.getElementById('laptop').style.display = "none";
document.getElementById('pc').style.display = "none";
document.getElementById('monitor').style.display = "none";


// all btn
allBtn.addEventListener("click", e => {
    document.getElementById('all').style.display = "block";
    document.getElementById('laptop').style.display = "none";
    document.getElementById('pc').style.display = "none";
    document.getElementById('monitor').style.display = "none";
})

// laptop btn
laptopBtn.addEventListener("click", e => {
    document.getElementById('all').style.display = "none";
    document.getElementById('laptop').style.display = "block";
    document.getElementById('pc').style.display = "none";
    document.getElementById('monitor').style.display = "none";
})

// pc btn
pcBtn.addEventListener("click", e => {
    document.getElementById('all').style.display = "none";
    document.getElementById('laptop').style.display = "none";
    document.getElementById('pc').style.display = "block";
    document.getElementById('monitor').style.display = "none";
})

// monitor btn
monitorBtn.addEventListener("click", e => {
    document.getElementById('all').style.display = "none";
    document.getElementById('laptop').style.display = "none";
    document.getElementById('pc').style.display = "none";
    document.getElementById('monitor').style.display = "block";
})