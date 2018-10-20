$(document).ready(function(){
  var shortDesc =document.getElementsByClassName('shortDesc');
  var longDesc =document.getElementsByClassName('longDesc');

  /* FOR DEBUg and testing purposes
  console.log(shortDesc);
  console.log('xD');
  */

  $('.shortDesc').html($('.shortDesc').html()+"   pokaż więcej");
  $('.longDesc').html($('.longDesc').html()+"   pokaż mniej");
  $('.longDesc').addClass("Hidden");

});
