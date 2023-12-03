const floatingText = document.getElementById("floating_text");
const messages = [
  "Together, we create tomorrow.",
  "Elegance is an attitude, and style is the punctuation that defines it.",
];
let currentIndex = 0;

function changeMessage() {
  const newMessage = document.createElement("h2");
  newMessage.style.color = "white";

  newMessage.innerText = messages[currentIndex];

  while (floatingText.firstChild) {
    floatingText.removeChild(floatingText.firstChild);
  }

  floatingText.appendChild(newMessage);

  currentIndex = (currentIndex + 1) % messages.length;
}

addEventListener(onload, setInterval(changeMessage, 1000));
