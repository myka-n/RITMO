function getFormattedTime() {
    const now = new Date();
    return now.toLocaleTimeString(); 
}

document.addEventListener('keydown', function(event) {
    console.log(`Key pressed at: ${getFormattedTime()}`);
});

document.addEventListener('click', function(event) {
    console.log(`Mouse clicked at: ${getFormattedTime()}`);
});

