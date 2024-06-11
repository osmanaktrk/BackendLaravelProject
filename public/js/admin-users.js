let editBtns = document.querySelectorAll(".users-edit-btn");
let avatar = document.querySelector('.new-user-avatar');
let input = document.querySelector('#new-user-avatar');
let avatar_src = avatar.src;
let createUserBtn = document.querySelector('.create-new-user-btn');
let cancelUserBtn = document.querySelector('.new-user-cancel');
let newUserBox = document.querySelector(".new-user");
let userCheck = document.querySelector('#usertype-user');
let writerCheck = document.querySelector('#usertype-writer');
let adminCheck = document.querySelector("#usertype-admin");


userCheck.addEventListener('change', ()=>{
    let users = document.querySelectorAll('div[usertype="user"]');
    if(userCheck.checked == true){
        users.forEach((e)=>{
            e.style.display = 'flex';
        });
    }else{
        users.forEach((e)=>{
            e.style.display = 'none';
        });
        
    }
});

adminCheck.addEventListener('change', ()=>{
    let admins = document.querySelectorAll('div[usertype="admin"]');
    if(adminCheck.checked == true){
        admins.forEach((e)=>{
            e.style.display = 'flex';
        });
    }else{
        admins.forEach((e)=>{
            e.style.display = 'none';
        });
        
    }
});

writerCheck.addEventListener('change', ()=>{
    let writers = document.querySelectorAll('div[usertype="writer"]');
    if(userCheck.checked == true){
        writers.forEach((e)=>{
            e.style.display = 'flex';
        });
    }else{
        writers.forEach((e)=>{
            e.style.display = 'none';
        });
        
    }
});



input.addEventListener('change', ()=>{
    let file = input.files[0];

    if(file){
        let fileReader = new FileReader();

        fileReader.onload = (e)=>{
            avatar.src = e.target.result;
        }

        fileReader.readAsDataURL(file);

    }else{
        avatar.src = avatar_src;
    }
});



editBtns.forEach((btn)=>{
    btn.addEventListener('click', (e)=>{
        let profile = e.target.parentNode.parentNode.nextSibling.nextSibling;
        profile.style.display = 'flex';
        let cancel = e.target.parentNode.parentNode.nextSibling.nextSibling.firstChild.nextSibling.lastChild.previousSibling;
        cancel.addEventListener('click', ()=>{
            profile.style.display = 'none';
        });
        let img = e.target.parentNode.parentNode.nextSibling.nextSibling.firstChild.nextSibling.firstChild.nextSibling.firstChild.nextElementSibling.nextElementSibling.firstElementChild.firstElementChild;
        let input = e.target.parentNode.parentNode.nextSibling.nextSibling.firstChild.nextSibling.firstChild.nextSibling.firstChild.nextElementSibling.nextElementSibling.firstElementChild.nextElementSibling;
        let img_src = img.src;

        input.addEventListener("change", ()=>{
            let file = input.files[0];

            if(file){
                const fileReader = new FileReader();

                
                fileReader.onload = (e)=>{
                    img.src = e.target.result;
                }
                fileReader.readAsDataURL(file);
            }else{
                img.src = img_src;
            }


        });



    })
});


createUserBtn.addEventListener('click', ()=>{
    newUserBox.style.display = 'flex';
});

cancelUserBtn.addEventListener('click', ()=>{
    newUserBox.style.display = 'none';
});