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


document.querySelector(".hirebtn").addEventListener("click", () => {
  window.location.href = "/#contactme"
});

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


function isEmail(email) {
 let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
 return regex.test(String(email).toLowerCase());
}

const form = document.querySelector("form");
const formBtn = document.querySelector("form button");

form && form.addEventListener("submit", (e) => {
  e.preventDefault();

  formBtn.innerHTML = '<p class="typewriter">Loading...</p>'

  formBtn.disabled = true;

  let email = document.querySelector("form #email").value
  let name = document.querySelector("form #name").value
  let subject = document.querySelector("form #subject").value
  let message = document.querySelector("form #message").value

  var templateParams = {
      from_name: name,
      message,
      to_name: 'Minte Temple',
      subject,
  };
 

  emailjs.send('service_tcif9g5', 'template_9ih306b', templateParams)
  .then(function(response) {

    formBtn.innerHTML = '';
    formBtn.innerText = 'Submit';
    form.reset()

    formBtn.disabled = false;
    console.log('SUCCESS!', response.status, response.text);

  }, function(error) {
      console.log('FAILED...', error);
  });

});

 (function(){
      emailjs.init("user_WtcxYEm1GN5eYuu5Q2Wzy");
   })();
