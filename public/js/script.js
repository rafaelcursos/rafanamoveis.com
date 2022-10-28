let btnReset = document.getElementById('btn-reset');
btnReset.addEventListener('click', () => {
    localStorage.clear();
    window.location.href = '/'
})
