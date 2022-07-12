const inputan= document.querySelectorAll('.kontrol input');

function handlePerubahan(){
    const a = this.dataset.ukuran || '';
    document.documentElement.style.setProperty(`--${this.name}`, this.value + a);
    
}

inputan.forEach(input => input.addEventListener('change' , handlePerubahan));
inputan.forEach(input => input.addEventListener('mousemove' , handlePerubahan));