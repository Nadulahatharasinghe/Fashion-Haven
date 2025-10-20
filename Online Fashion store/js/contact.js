function sendalert(clickbutton)
{
    alert("Thanks for Your response"); 
}


const input = document.querySelectorAll(".half-width");

input.forEach(card => {
  card.addEventListener("mouseover", () => {
    card.classList.add("active1");
  });

  card.addEventListener("mouseout", () => {
    card.classList.remove("active1");
  });
});

const textcon = document.querySelectorAll(".half");

textcon.forEach(card => {
  card.addEventListener("mouseover", () => {
    card.classList.add("active1");
  });

  card.addEventListener("mouseout", () => {
    card.classList.remove("active1");
  });
});

