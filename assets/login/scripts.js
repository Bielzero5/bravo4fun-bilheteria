const openModalBtn = document.querySelectorAll("#open-modal");
const closeModalBtn = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
};


const modalInfo = [closeModalBtn, fade];

modalInfo.forEach((el) => {  
    el.addEventListener("click", () => toggleModal());
});

openModalBtn.forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});

//console.log(openModalBtn);
