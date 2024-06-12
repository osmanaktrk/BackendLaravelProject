let createBtn = document.querySelector(".create-faq-btn");
let box = document.querySelector(".create-question");
let cancel = document.querySelector(".create-cancel-btn");
let checkboxes = document.querySelectorAll(".categories-check");
let editBtns = document.querySelectorAll('.edit-questions-btn');


createBtn.addEventListener("click", (e) => {
    box.style.display = "block";
});

cancel.addEventListener("click", () => {
    box.style.display = "none";
});

checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
        let boxes = document.querySelectorAll(".category-questions-box");

        boxes.forEach((box) => {
            if ((checkbox.value == box.getAttribute("category"))) {
                if (checkbox.checked) {
                    box.style.display = "block";
                } else {
                    box.style.display = "none";
                }
            }
        });
    });
});


editBtns.forEach((btn)=>{
    btn.addEventListener('click', (e)=>{
        let box = e.target.parentNode.nextElementSibling;
        let cancel = e.target.parentNode.nextElementSibling.lastElementChild.firstElementChild;

        box.style.display = 'block';

        cancel.addEventListener('click', ()=>{
            box.style.display = 'none';
        });
    });
});