let editBtns = document.querySelectorAll(".edit-request-btn");

editBtns.forEach((btn)=>{
    btn.addEventListener('click', (e)=>{
        let box = e.target.parentNode.parentNode.nextElementSibling;
        let cancel = e.target.parentNode.parentNode.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild;

        box.style.display = "block";

        cancel.addEventListener('click', ()=>{
            box.style.display = 'none';
        });

    });
});