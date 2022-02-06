// 4 Windows home
const demo_box5 = document.getElementById("demo_box5")
const demo_box6 = document.getElementById("demo_box6")
const demo_box7 = document.getElementById("demo_box7")
const demo_box8 = document.getElementById("demo_box8")
const demo_box9 = document.getElementById("demo_box9")

// Open
block5.onclick = displayDemo_box5;
function displayDemo_box5() {
    demo_box5.style.display = "block";
};
block6.onclick = displayDemo_box6;
function displayDemo_box6() {
    demo_box6.style.display = "block";
};
block7.onclick = displayDemo_box7;
function displayDemo_box7() {
    demo_box7.style.display = "block";
};
block8.onclick = displayDemo_box8;
function displayDemo_box8() {
    demo_box8.style.display = "block";
};
block9.onclick = displayDemo_box9;
function displayDemo_box9() {
    demo_box9.style.display = "block";
};



//Close
const closeButtons = document.querySelectorAll(".close-block");

closeButtons.forEach(n => n.addEventListener("click", closeOverlay));

function closeOverlay() {
    demo_box5.style.display = "none";
    demo_box6.style.display = "none";
    demo_box7.style.display = "none";
    demo_box8.style.display = "none";
    demo_box9.style.display = "none";
}