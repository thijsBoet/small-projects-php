if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
const submit = document.querySelector('.submit');

submit.addEventListener('click', function(event){
  console.log('click');
  event.preventDefault();
})