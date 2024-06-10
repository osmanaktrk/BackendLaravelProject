let editBtns = document.querySelectorAll('.category-edit-btn');

editBtns.forEach((btn)=>{
    btn.addEventListener('click', (e)=>{
        let editForm = e.target.nextSibling.nextSibling;

        editForm.style.display = 'inline-block'
        
        let cancel = e.target.nextSibling.nextSibling.lastChild.previousSibling;
        cancel.addEventListener('click', ()=>{
            editForm.style.display = 'none'
        });
        
    });
});