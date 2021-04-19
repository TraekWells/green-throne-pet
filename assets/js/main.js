(function () {
  const hamburger = document.querySelector(".hamburger");

  const handleHamburger = function () {
    hamburger.classList.toggle("is-active");
  };

  hamburger.addEventListener("click", handleHamburger);
})();
