const learnmore = document.querySelectorAll(".learn-more-btn");

learnmore.forEach(card => {
  card.addEventListener("mouseover", () => {
    card.classList.add("active1");
  });

  card.addEventListener("mouseout", () => {
    card.classList.remove("active1");
  });
});


