document.getElementById('colorPicker').addEventListener('input', function(event) {
    const textColor = event.target.value;
    document.getElementById('changeColor').style.color = textColor;
    document.querySelector('.image-container p').style.color = textColor;
});
