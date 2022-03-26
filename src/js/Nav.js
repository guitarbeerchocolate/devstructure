let getNav = function() {
  let navToggle = document.getElementsByClassName("nav__mobileToggle");
  let navItems = document.getElementsByClassName("nav__item");
  let navShow = true;

  navToggle[0].addEventListener("click", function() {
    navShow = toggle(navShow);
    navItems = navShowHideMobile(navShow, navItems);
  });

  window.addEventListener("resize", function() {
    if (this.innerWidth >= 640) {
      for (var i = 0; i < navItems.length; i++) {
        navItems[i].style.display = "inline";
      }
    } else {
      for (var i = 0; i < navItems.length; i++) {
        navItems[i].style.display = "none";
      }
    }
  });

  function toggle(ns) {
    return ns == true ? false : true;
  }

  function navShowHideMobile(ns, ni) {
    let show = ns == true ? "none" : "block";
    for (var i = 0; i < ni.length; i++) {
      ni[i].style.display = show;
    }
    return ni;
  }
};
exports.getNav = getNav;
