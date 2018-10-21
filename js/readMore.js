$(document).ready(function(){
  var shortDesc =document.getElementsByClassName('shortDesc');
  var longDesc =document.getElementsByClassName('longDesc');

  var showMore =document.getElementsByClassName('showMore');
  var showLess =document.getElementsByClassName('longDesc');

  for(let i=0; i<shortDesc.length; i++)
  {
    showMore[i].addEventListener('click', function(){
      shortDesc[i].classList.add('Hidden');
      longDesc[i].classList.remove('Hidden');
    });
    showLess[i].addEventListener('click', function(){
      longDesc[i].classList.add('Hidden');
      shortDesc[i].classList.remove('Hidden');
    });
    console.log(i);

  }
    $('.longDesc').addClass("Hidden");
});
