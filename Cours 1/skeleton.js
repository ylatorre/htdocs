const EL = document.querySelector(".user-card");
setTimeout(()=> {
    EL.classList.remove("skeleton");
    EL.querySelectorAll(".hide-text").forEach((el) => { el.classList.remove("hide-text"); });
}, 3000);

