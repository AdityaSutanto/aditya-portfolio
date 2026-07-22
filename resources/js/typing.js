const texts = [
    "Information Systems Student",
    "Laravel Developer",
    "Web Developer",
    "UI/UX Enthusiast"
];

let index = 0;
const typingText = document.getElementById("typing-text");

function changeText() {
    if (!typingText) return;

    typingText.style.opacity = 0;

    setTimeout(() => {
        typingText.textContent = texts[index];

        typingText.style.opacity = 1;

        index++;

        if (index >= texts.length) {
            index = 0;
        }
    }, 300);
}

changeText();

setInterval(changeText, 2500);