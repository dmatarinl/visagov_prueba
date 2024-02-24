import * as bootstrap from 'bootstrap'

document.getElementById('message').addEventListener('input', function() {
    const currentLength = this.value.length;
    document.getElementById('characterCount').textContent = `${currentLength} / 1000`;
});