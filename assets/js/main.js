(function () {
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

  // Zip Code checker
  function is_usZipCode(str) {
    regexp = /^[0-9]{5}(?:-[0-9]{4})?$/;

    if (regexp.test(str)) {
      return true;
    } else {
      return false;
    }
  }

  const zipInput = document.getElementById("zip-code");

  if (zipInput) {
    zipInput.addEventListener("blur", function () {
      if (is_usZipCode(zipInput.value)) {
        const data = new URLSearchParams();
        data.append("_ajax_nonce", "nonce");
        data.append("action", "check_zip_code");
        data.append("zip-code", document.getElementById("zip-code").value);
        fetch(green_throne_globals.ajaxurl, {
          method: "POST",
          credentials: "same-origin",
          headers: new Headers({
            "Content-Type": "application/x-www-form-urlencoded",
          }),
          body: data,
        })
          .then(function (response) {
            if (response.url.includes("contact")) {
              window.location = response.url;
            }
            return response.text();
          })
          .catch(function (error) {
            console.log(error);
          });
        return false;
      }
    });
  }
})();
