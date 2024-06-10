let editBtns = document.querySelectorAll(".edit-btn");


editBtns.forEach((editBtn)=>{
    editBtn.addEventListener('click', (e)=>{
        let commentEdit = e.target.parentNode.parentNode.lastChild.previousSibling;
        commentEdit.style.display = 'flex';
        let cancel = commentEdit.lastChild.previousSibling;
        cancel.addEventListener("click", ()=>{
            commentEdit.style.display = 'none';
        });
    });
});



