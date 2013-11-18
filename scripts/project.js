var holder = document.getElementById('holder'),
    state = document.getElementById('fr-status'),
    img_string = '';
if(typeof window.FileReader === 'undefined') {
    state.className += ' fail';
} else {
    state.className += ' success';
    state.innerHTML = '<p>Cool. File API &amp; FileReader are available so this should work. Drag and drop an image file from your computer to this box.</p>';
}

holder.ondragover = function(e) {
    return false;
};

holder.ondrop = function(e) {
    state.innerHTML = '<p>Nice one! Did that work?</p>';
    e.preventDefault();
    
    var file = e.dataTransfer.files[0];
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function(event) {
        holder.style.background = 'url(' + event.target.result + ') no-repeat center';
    };
    return false;
};