const wraper = document.querySelector('.wraper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnLogin = document.querySelector('.btnLogin');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wraper.classList.add('active');
});
loginLink.addEventListener('click', ()=> {
    wraper.classList.remove('active');
});
btnLogin.addEventListener('click', ()=> {
    wraper.classList.add('active-login');
});
iconClose.addEventListener('click', ()=> {
    wraper.classList.remove('active-login');
});