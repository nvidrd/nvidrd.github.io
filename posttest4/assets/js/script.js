// DOM 
const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');
document.getElementById('gambar').src='../POSTEST3/images/orang.png';
const p = document.getElementById('p');
p.style.color='#63767A';


// Add Event Listener click untuk mengaktifkan dark mode
toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.backgroundColor = '#f0e3e1';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
    }
});