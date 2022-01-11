// 4 Windows home
const demo_box1 = document.getElementById("demo_box1")
const demo_box2 = document.getElementById("demo_box2")
const demo_box3 = document.getElementById("demo_box3")
const demo_box4 = document.getElementById("demo_box4")
// Open
block1.onclick = displayDemo_box1;
function displayDemo_box1() {
    demo_box1.style.display = "block";
};
block2.onclick = displayDemo_box2;
function displayDemo_box2() {
    demo_box2.style.display = "block";
};
block3.onclick = displayDemo_box3;
function displayDemo_box3() {
    demo_box3.style.display = "block";
};
block4.onclick = displayDemo_box4;
function displayDemo_box4() {
    demo_box4.style.display = "block";
};



//Close
const closeButtons = document.querySelectorAll(".close-block");

closeButtons.forEach(n => n.addEventListener("click", closeOverlay));

function closeOverlay() {
    demo_box1.style.display = "none";
    demo_box2.style.display = "none";
    demo_box3.style.display = "none";
    demo_box4.style.display = "none";
}