document.addEventListener('DOMContentLoaded', (event) => {
  
    const handburgerMenu = document.getElementById('nav-icon1')
    const sidebar = document.getElementById('sidebar')

    handburgerMenu.addEventListener('click', function () {
        let isClose = handburgerMenu.classList.contains('open')
        if(!isClose){
            handburgerMenu.classList.add('open')
            sidebar.style.display = 'block';  
            sidebar.style.animation = 'slideRight 1s';  
        }else {
            handburgerMenu.classList.remove('open')
            sidebar.style.animation = 'slideout 1s';
            setTimeout(() => {
              sidebar.style.display = 'none';  

            }, 800)
        }
    })
})

document.querySelector(".container-box").addEventListener("scroll", scrollFunction);

const scrollcont = document.querySelector('.scrollcont')

function scrollFunction() {
  const scroller = document.querySelector(".container-box")

  if (scroller.scrollTop > 30  || document.documentElement.scrollTop > 30) {
    scrollcont.style.display = "block";
  } else {
    scrollcont.style.display = "none";
  }
}


// function isEmail(email) {
//  let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
//  return regex.test(String(email).toLowerCase());
// }


// document.querySelector("input[type="submit"]").addEventListener("submit", () => {
//   console.log('hello')
//   let email = document.getElementById("#email").value
//   let name = document.getElementById("#name").value
//   let subject = document.getElementById("#subject").value
//   let message = document.getElementById("#message").value

//   let nameError = document.querySelectorAll("#error")[0]
//   let emailError = document.querySelectorAll("#error")[1]
//   let subjectError = document.querySelectorAll("#error")[2]
//   let messageError = document.querySelectorAll("#error")[3]

//   if(!email){
//     emailError.innerHtml = 'Email is a required field'
//   }

//   if(!name){
//     nameError.innerHtml = 'Name is a required field'
//   }

//   if(!subject){
//     subjectError.innerHtml = 'Subject is a required field'
//   }

//   if(!message){
//     messageError.innerHtml = 'Message is a required field'
//   }


// });

