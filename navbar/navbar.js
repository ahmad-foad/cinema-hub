// theme change setup
const darkIcon = document.getElementById("dark-icon");
const lightIcon = document.getElementById("light-icon");


const isThemeDark = document.documentElement.classList.contains("light");
darkIcon.style.display = isThemeDark ? "none" : "inline";
lightIcon.style.display = isThemeDark ? "inline" : "none";


const changeThemeButton = document.getElementById("change-color");

changeThemeButton.addEventListener("click", () => {
    document.documentElement.classList.toggle("light");
    const isNewThemeDark = document.documentElement.classList.contains("light");
    console.log(isNewThemeDark);

    darkIcon.style.display = isNewThemeDark ? "none" : "inline";
    lightIcon.style.display = isNewThemeDark ? "inline" : "none";
    localStorage.setItem("theme", isNewThemeDark ? "light" : "dark")
});
