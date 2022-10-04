const openModalBtn = document.querySelectorAll("#open-modal");
const closeModalBtn = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");
const fadeAdm = document.querySelector("#fadeAdm");
const modalAdm = document.querySelector("#modalAdm");
const openModalAdm = document.querySelector("#openModalAdm");
const closeModalBtnAdm = document.querySelector("#closeModalBtnAdm");

const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
};

const toggleModalAdm = () => {
    modalAdm.classList.toggle("hide");
    fadeAdm.classList.toggle("hide");
}


const modalInfo = [closeModalBtn, fade];
const modalInfoAdm = [closeModalBtnAdm, fadeAdm, openModalAdm]

modalInfo.forEach((el) => {  
    el.addEventListener("click", () => toggleModal());
});

openModalBtn.forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});

modalInfoAdm.forEach((el) => {
    el.addEventListener("click", () => toggleModalAdm());
});

