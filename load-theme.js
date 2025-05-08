const theme = localStorage.getItem("theme");
console.log(theme)
if (theme === "light") {
    document.documentElement.classList.add("light");
} else {
    document.documentElement.classList.remove("light");
}
