let darkmode=document.querySelector('#darkmode');

if (localStorage.getItem('darkmode') === 'enabled') {
    document.body.classList.add('coloroscuro');
    darkmode.classList.replace('ri-moon-clear-fill', 'ri-sun-fill');
} else {
    document.body.classList.remove('coloroscuro');
    darkmode.classList.replace('ri-sun-fill', 'ri-moon-clear-fill');
}

darkmode.onclick= ()=> {
if(darkmode.classList.contains('ri-moon-clear-fill')){
    darkmode.classList.replace('ri-moon-clear-fill', 'ri-sun-fill')
   document.body.classList.add('coloroscuro');
   localStorage.setItem('darkmode', 'enabled');
}

else{
    darkmode.classList.replace('ri-sun-fill','ri-moon-clear-fill' )
    document.body.classList.remove('coloroscuro');
    localStorage.setItem('darkmode', 'disabled');
}
}
