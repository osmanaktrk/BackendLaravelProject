let editBtns = document.querySelectorAll(".users-edit-btn");
let avatar = document.querySelector(".new-user-avatar");
let input = document.querySelector("#new-user-avatar");
let avatar_src = avatar.src;
let createUserBtn = document.querySelector(".create-new-user-btn");
let cancelUserBtn = document.querySelector(".new-user-cancel");
let newUserBox = document.querySelector(".new-user");
let userCheck = document.querySelector("#usertype-user");
let writerCheck = document.querySelector("#usertype-writer");
let adminCheck = document.querySelector("#usertype-admin");
let userSearch = document.querySelector("#search");
let emailSearch = document.querySelector("#email-search");
let blocked = document.querySelector("#blocked");

blocked.addEventListener("change", () => {
    let users = document.querySelectorAll(".users-container");

    users.forEach((user) => {
        if (blocked.checked) {
            if (user.getAttribute("ban") == 1) {
                user.style.display = "flex";
            }
        } else {
            if (user.getAttribute("ban") == 1) {
                user.style.display = "none";
            }
        }
    });
});

userCheck.addEventListener("change", () => {
    let users = document.querySelectorAll('div[usertype="user"]');

    if (userCheck.checked) {
        users.forEach((e) => {
            e.style.display = "flex";
        });
    } else {
        users.forEach((e) => {
            e.style.display = "none";
        });
    }
});

adminCheck.addEventListener("change", () => {
    let admins = document.querySelectorAll('div[usertype="admin"]');
    if (adminCheck.checked) {
        admins.forEach((e) => {
            e.style.display = "flex";
        });
    } else {
        admins.forEach((e) => {
            e.style.display = "none";
        });
    }
});

writerCheck.addEventListener("change", () => {
    let writers = document.querySelectorAll('div[usertype="writer"]');
    if (userCheck.checked) {
        writers.forEach((e) => {
            e.style.display = "flex";
        });
    } else {
        writers.forEach((e) => {
            e.style.display = "none";
        });
    }
});

input.addEventListener("change", () => {
    let file = input.files[0];

    if (file) {
        let fileReader = new FileReader();

        fileReader.onload = (e) => {
            avatar.src = e.target.result;
        };

        fileReader.readAsDataURL(file);
    } else {
        avatar.src = avatar_src;
    }
});

editBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        let profile = e.target.parentNode.parentNode.nextSibling.nextSibling;
        profile.style.display = "flex";
        let cancel =
            e.target.parentNode.parentNode.nextSibling.nextSibling.firstChild
                .nextSibling.lastChild.previousSibling;
        cancel.addEventListener("click", () => {
            profile.style.display = "none";
        });
        let img =
            e.target.parentNode.parentNode.nextSibling.nextSibling.firstChild
                .nextSibling.firstChild.nextSibling.firstChild
                .nextElementSibling.nextElementSibling.firstElementChild
                .firstElementChild;
        let input =
            e.target.parentNode.parentNode.nextSibling.nextSibling.firstChild
                .nextSibling.firstChild.nextSibling.firstChild
                .nextElementSibling.nextElementSibling.firstElementChild
                .nextElementSibling;
        let img_src = img.src;

        input.addEventListener("change", () => {
            let file = input.files[0];

            if (file) {
                const fileReader = new FileReader();

                fileReader.onload = (e) => {
                    img.src = e.target.result;
                };
                fileReader.readAsDataURL(file);
            } else {
                img.src = img_src;
            }
        });
    });
});

createUserBtn.addEventListener("click", () => {
    newUserBox.style.display = "flex";
});

cancelUserBtn.addEventListener("click", () => {
    newUserBox.style.display = "none";
});

userSearch.addEventListener("input", () => {
    let users = document.querySelectorAll(".users-container");



    
    if (userSearch.value == "") {
        users.forEach((user) => {
            user.style.display = "flex";
        });
    } else {
        userSearch.addEventListener("change", () => {
            users.forEach((user) => {
                user.style.display = "none";
                if (
                    user.getAttribute("username").toString().toLowerCase().includes(userSearch.value.toString().toLowerCase())             
                ) {
                    user.style.display = "flex";
                } else if (userSearch.value == "") {
                    user.style.display = "flex";
                }
            });
        });
    }
});

emailSearch.addEventListener("input", () => {
    let users = document.querySelectorAll(".users-container");
    if (emailSearch.value == "") {
        users.forEach((user) => {
            user.style.display = "flex";
        });
    } else {
        emailSearch.addEventListener("change", () => {
            users.forEach((user) => {
                user.style.display = "none";
                if (
                    user.getAttribute("username").toString().toLowerCase().includes(emailSearch.value.toString().toLowerCase())
                ) {
                    user.style.display = "flex";
                } else if (emailSearch.value == "") {
                    user.style.display = "flex";
                }
            });
        });
    }
});
