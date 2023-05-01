var buttonLight = document.getElementById("button-light");
var buttonDark = document.getElementById("button-dark");

if (
  localStorage.getItem("color-mode") === "dark" ||
  (!("color-mode" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  buttonLight.classList.remove("toogle-theme");
  buttonDark.classList.add("toogle-theme");
} else {
  buttonLight.classList.add("toogle-theme");
  buttonDark.classList.remove("toogle-theme");
}

buttonLight.addEventListener("click", function () {
  if (!("color-mode" in localStorage)) {
    document.documentElement.classList.remove("dark");
    buttonDark.classList.remove("toogle-theme");
    this.classList.add("toogle-theme");

    localStorage.setItem("color-mode", "light");
  }

  if (localStorage.getItem("color-mode") === "dark") {
    document.documentElement.classList.remove("dark");
    buttonDark.classList.remove("toogle-theme");
    this.classList.add("toogle-theme");

    localStorage.setItem("color-mode", "light");
  }
});

buttonDark.addEventListener("click", function () {
  if (!("color-mode" in localStorage)) {
    document.documentElement.classList.add("dark");
    buttonLight.classList.remove("toogle-theme");
    this.classList.add("toogle-theme");

    localStorage.setItem("color-mode", "dark");
  }

  if (localStorage.getItem("color-mode") === "light") {
    document.documentElement.classList.add("dark");
    buttonLight.classList.remove("toogle-theme");
    this.classList.add("toogle-theme");

    localStorage.setItem("color-mode", "dark");
  }
});
