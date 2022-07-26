function myFuntion(smallImg){
  var fullImg = document.querySelector("#producto-imagen");
  fullImg.src = smallImg.src;
}


let slider_index = 0;

function show_slide(index){
  let slides = document.querySelectorAll('.cimg-01-carrusel');
  let dots = document.querySelectorAll('.dots');

  if(index >= slides.length ) slider_index = 0;
  if(index < 0 ) slider_index = slides.length - 1;
  for(let i=0; i < slides.length; i++){
    slides[i].style.display = 'none';
    dots[i].classList.remove('active-dot');
  }
  if (slides.length > 0){
    slides[slider_index].style.display = 'block';
    dots[slider_index].classList.add('active-dot');
  }
}

show_slide(slider_index);
if(document.querySelector('.prev')){
  document.querySelector('.prev').addEventListener('click',()=>{
    show_slide(--slider_index);
    console.log("1");
  } );
}

if(document.querySelector('.next')){
  document.querySelector('.next').addEventListener('click',()=>{
    show_slide(++slider_index);
  } );
}

if(document.querySelectorAll('.dots')){
  document.querySelectorAll('.dots').forEach( (element) =>{
    element.addEventListener('click', function(){
      var dot = Array.prototype.slice.call(this.parentElement.children);
      dot_index = dot.indexOf(element);
      show_slide(slider_index = dot_index);
    });
  }
  );
}

setInterval( ()=> show_slide(++slider_index),10000);