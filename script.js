let navbar = document.querySelector('.header .flex .navbar');
let profile = document.querySelector('.header .flex .profile');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   profile.classList.remove('active');
}

let mainImage = document.querySelector('.quick-view .box .row .image-container .main-image img');
let subImages = document.querySelectorAll('.quick-view .box .row .image-container .sub-image img');

subImages.forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      mainImage.src = src;
   }
});

//alerta de mensagem pro estoque//
 
function verificarQuantidadeMaxima() {
   var estoque = parseInt(document.getElementById("quantidade").max); // Obtém a quantidade máxima do estoque como um número inteiro
   var quantidade = parseInt(document.getElementById("quantidade").value); // Obtém a quantidade selecionada como um número inteiro
   if (quantidade > estoque) { // Verifica se a quantidade selecionada é maior do que o estoque disponível
       alert("Não há estoque disponível para esta quantidade."); // Exibe o alerta informando que não há estoque disponível
       return false; // Impede o envio do formulário
   }
   return true; // Permite o envio do formulário se a quantidade selecionada for menor ou igual ao estoque disponível
}