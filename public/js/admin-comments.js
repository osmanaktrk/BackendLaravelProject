let editCommentBtns = document.querySelectorAll(".edit-btn");
let searchByUser = document.querySelector("#search-username");
let searchByNews = document.querySelector("#search-news");
let writers = document.querySelector("#writers");

editCommentBtns.forEach((edit) => {
    edit.addEventListener("click", (e) => {
        let box = e.target.parentNode.parentNode.nextElementSibling;
        let cancel =
            e.target.parentNode.parentNode.nextElementSibling.firstElementChild
                .nextElementSibling.nextElementSibling;

        box.style.display = "flex";

        cancel.addEventListener("click", () => {
            box.style.display = "none";
        });
    });
});

writers.addEventListener("change", () => {
    let boxes = document.querySelectorAll(".comment-container-box");
    boxes.forEach((e) => {
        e.style.display = "none";

        if(writers.value == 0){
            if(searchByUser.value == 0){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }

            }else if(e.getAttribute('user').toString().toLocaleLowerCase().includes(searchByUser.value.toString().toLocaleLowerCase())){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }
            }

        }else if(e.getAttribute("writer") == writers.value){

            if(searchByUser.value == 0){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }

            }else if(e.getAttribute('user').toString().toLocaleLowerCase().includes(searchByUser.value.toString().toLocaleLowerCase())){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }
            }



        }
        
        
    });
});


searchByNews.addEventListener("change", () => {
    let boxes = document.querySelectorAll(".comment-container-box");
    boxes.forEach((e) => {
        e.style.display = "none";

        if(writers.value == 0){
            if(searchByUser.value == 0){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }

            }else if(e.getAttribute('user').toString().toLocaleLowerCase().includes(searchByUser.value.toString().toLocaleLowerCase())){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }
            }

        }else if(e.getAttribute("writer") == writers.value){

            if(searchByUser.value == 0){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }

            }else if(e.getAttribute('user').toString().toLocaleLowerCase().includes(searchByUser.value.toString().toLocaleLowerCase())){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }
            }



        }
        
        
    });
});

searchByUser.addEventListener("change", () => {
    let boxes = document.querySelectorAll(".comment-container-box");
    boxes.forEach((e) => {
        e.style.display = "none";

        if(writers.value == 0){
            if(searchByUser.value == 0){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }

            }else if(e.getAttribute('user').toString().toLocaleLowerCase().includes(searchByUser.value.toString().toLocaleLowerCase())){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }
            }

        }else if(e.getAttribute("writer") == writers.value){

            if(searchByUser.value == 0){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }

            }else if(e.getAttribute('user').toString().toLocaleLowerCase().includes(searchByUser.value.toString().toLocaleLowerCase())){

                if(searchByNews.value == 0){
                    e.style.display = "flex";
                }else if(e.getAttribute('news').toString().toLocaleLowerCase().includes(searchByNews.value.toString().toLocaleLowerCase())){
                    e.style.display = "flex";

                }
            }



        }
        
        
    });
});


// searchByUser.addEventListener("input", () => {
//     let comments = document.querySelectorAll(".comment-container-box");

//     if (searchByUser.value == "") {
//         comments.forEach((comment) => {
//             comment.style.display = "flex";
//         });
//     } else {
//         searchByUser.addEventListener("change", () => {
//             comments.forEach((comment) => {
//                 comment.style.display = "none";
//                 if (
//                     comment
//                         .getAttribute("user")
//                         .toLocaleLowerCase()
//                         .includes(searchByUser.value.toString().toLowerCase())
//                 ) {
//                     comment.style.display = "flex";
//                 } else if (searchByUser.value == "") {
//                     comment.style.display = "flex";
//                 }
//             });
//         });
//     }
// });

// searchByNews.addEventListener("input", () => {
//     let comments = document.querySelectorAll(".comment-container-box");

//     if (searchByNews.value == "") {
//         comments.forEach((comment) => {
//             comment.style.display = "flex";
//         });
//     } else {
//         searchByNews.addEventListener("change", () => {
//             comments.forEach((comment) => {
//                 comment.style.display = "none";

//                 if (
//                     comment
//                         .getAttribute("news")
//                         .toLocaleLowerCase()
//                         .includes(searchByNews.value.toString().toLowerCase())
//                 ) {
//                     comment.style.display = "flex";
//                 } else if (searchByNews.value == "") {
//                     comment.style.display = "flex";
//                 }
//             });
//         });
//     }
// });

// writers.addEventListener("change", () => {
//     let boxes = document.querySelectorAll(".comment-container-box");
//     boxes.forEach((e) => {
//         if (writers.value == 0) {
//             e.style.display = "flex";
//         } else {
//             e.style.display = "none";

//             document
//                 .querySelectorAll(`div[writer="${writers.value}"]`)
//                 .forEach((e) => {
//                     e.style.display = "flex";
//                 });
//         }
//     });
// });
