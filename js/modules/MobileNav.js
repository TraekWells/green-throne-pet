const hamburger = document.querySelector(".hamburger");
const overlay = document.querySelector(".overlay");
const nav = document.querySelector(".navigation");
const navCta = document.querySelector(".navigation__cta");
const navItems = document.querySelectorAll(".navigation__item");
const navList = document.querySelector(".navigation__list");

const tl = gsap.timeline({
  defaults: { duration: 0.6, ease: Back.easeOut.config(2) },
});

tl.paused(true);

const handleMenu = function () {
  if (!hamburger.classList.contains("is-active")) {
    hamburger.classList.add("is-active");
    nav.classList.add("open");
    tl.to(overlay, { display: "block" });
    tl.to(navList, { duration: 0.1, display: "flex" });
    tl.to(
      navItems,
      { duration: 0.5, opacity: 1, y: "40px", stagger: 0.2 },
      "-=.5"
    );
    tl.play();
  } else {
    hamburger.classList.remove("is-active");
    nav.classList.remove("open");
    tl.reverse(-1);
  }
};

hamburger.addEventListener("click", handleMenu);

export default MobileNav;
