function goTo2page() {
    window.location.href = '2page.php';
}

document.querySelector('.canvas').addEventListener('click', () => {
    document.querySelector('.canvas').classList.add('clicked');
    setTimeout(() => {
        document.querySelector('.canvas').classList.remove('clicked');
    }, 500); 
});

function toggleLight() {
    const leftLight = document.querySelector('.light-left');
    const rightLight = document.querySelector('.light-right');

}

setInterval(toggleLight, 1000); 