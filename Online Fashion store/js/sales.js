
const sales = document.querySelectorAll(".card");

sales.forEach(card => {
  card.addEventListener("mouseover", () => {
    card.classList.add("active1");
  });

  card.addEventListener("mouseout", () => {
    card.classList.remove("active1");
  });
});


