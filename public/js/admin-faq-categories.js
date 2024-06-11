let editBtns = document.querySelectorAll('.category-edit-btn');

editBtns.forEach((edit)=>{
    edit.addEventListener('click', (e)=>{
        let box = e.target.nextElementSibling;
        let cancel = e.target.nextElementSibling.nextElementSibling;
        box.style.display = "inline-block"
        
        cancel.addEventListener('click', ()=>{
            box.style.display = 'none';
        });
    });
});







