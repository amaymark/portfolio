<!DOCTYPE html>
<nav class="navbar">

<div class="logo">Mark Amay</div>

<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="projects.php">Projects</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>

</nav>
<html>
<head>
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <link rel="stylesheet" href="style.css">

<h1 class="welcome-box">Welcome to My Portfolio</h1>
<p1>Hello, I'm Mark Amay</p1>
<br>

<p2 class="typing-text">
<span id="typing"></span>
</p2>
<br>

<h2 class="social-box">Connect With Me</h2>

<div class="social-icons">

<a href="https://github.com/amaymark" target="_blank" class="social">
<img src="https://cdn-icons-png.flaticon.com/512/25/25231.png">
<span>GitHub</span>
</a>

<a href="https://instagram.com/kenyan._.tycoon_" target="_blank" class="social">
<img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png">
<span>Instagram</span>
</a>

<a href="https://linkedin.com/in/markamay" target="_blank" class="social">
<img src="https://cdn-icons-png.flaticon.com/512/174/174857.png">
<span>LinkedIn</span>
</a>

</div>

<script>

const textArray = [
"I build Trading Bots",
"I develop MT5 Expert Advisors",
"I code in Python and PHP",
"I study BBIT"
];

let index = 0;
let charIndex = 0;
let currentText = "";
let isDeleting = false;

function typeEffect(){

currentText = textArray[index];

if(!isDeleting){
charIndex++;
}else{
charIndex--;
}

document.getElementById("typing").textContent = currentText.substring(0,charIndex);

if(!isDeleting && charIndex === currentText.length){
isDeleting = true;
setTimeout(typeEffect,1000);
return;
}

if(isDeleting && charIndex === 0){
isDeleting = false;
index++;

if(index === textArray.length){
index = 0;
}
}

setTimeout(typeEffect,100);
}

typeEffect();


const links = document.querySelectorAll(".nav-links a");

links.forEach(link => {
    link.addEventListener("click", function(){
        links.forEach(nav => nav.classList.remove("active"));
        this.classList.add("active");
    });
});
</script>

</body>
</html>