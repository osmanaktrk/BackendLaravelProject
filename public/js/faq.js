let editBtns = document.querySelectorAll(".edit-button");
let cancelBts = document.querySelectorAll("cancel-btn");

let createFaq = document.querySelector("#create-btn");
let cancelFaq = document.querySelector(".create-cancel-btn");
let createQuestion = document.querySelector(".create-question");


editBtns.forEach((btn)=>{
    btn.addEventListener('click', (e)=>{
        let edit = e.target.parentNode.nextSibling.nextSibling;
        edit.style.display = 'block'
        let cancel = e.target.parentNode.nextSibling.nextSibling.lastChild.previousSibling.firstChild.nextSibling;
        cancel.addEventListener('click', ()=>{
            edit.style.display = 'none'
        });
        
    });
});


createFaq.addEventListener('click', ()=>{
    createQuestion.style.display = 'block';
});

cancelFaq.addEventListener('click', ()=>{
    createQuestion.style.display = 'none';
});
