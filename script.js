document.addEventListener("DOMContentLoaded", ()=> {
    const images = document.querySelectorAll(".slider img");
    let current = 0;

    function ChangeImage() {
        images[current].classList.remove("active");
        current = (current + 1) %images.length;
        images[current].classList.add("active");
    }

    setInterval(ChangeImage, 3000);
});