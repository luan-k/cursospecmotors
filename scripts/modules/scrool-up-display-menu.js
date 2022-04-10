import $ from 'jquery';
import throttle from './throttle.js'

window.onload = function WindowLoad ( event ) {

  let new_scroll_position = 0;
  let last_scroll_position;
  let headerClass = document.querySelectorAll( "header.header" );

  headerClass[0].setAttribute("id", "header");

  let header = document.getElementById( "header" );

  // if there is an adminbar add padding to the header


   let adminbar = document.getElementById( "wpadminbar" );
   let adminbarHeight = $( "#wpadminbar" ).height();

   if ( ! adminbar ){
     $( '#header' ).css( "padding-top", "0px" );
   } else {
     $( '#header' ).css( "padding-top", adminbarHeight + "px" );
   }

   const scroll = function scroll ( e ) {
    last_scroll_position = window.scrollY;

    if ( new_scroll_position < last_scroll_position && last_scroll_position > 140 ) {
      header.classList.remove( "slideDown" );
      header.classList.add( "slideUp" );
      $( "#header" ).css( "position", "fixed" );
      if ( new_scroll_position < last_scroll_position && last_scroll_position > 300 ) {
        header.classList.remove( "slideUp" );
        header.classList.add( "slideDown" );
      } 
    } else if ( last_scroll_position <= 200 ){
      header.classList.remove( "slideUp" );
      header.classList.remove( "slideDown" );
      $( "#header" ).css( "position", "absolute" );
    }/* else if ( new_scroll_position > last_scroll_position ) {
      header.classList.remove( "slideUp" );
      header.classList.add( "slideDown" );
      console.log("ha");
      if (last_scroll_position <= 100){
        header.classList.remove( "slideUp" );
        header.classList.remove( "slideDown" );
        $( "#header" ).css( "position", "absolute" );
      }
    }  */

    new_scroll_position = last_scroll_position;
  }

  window.addEventListener( 'scroll', throttle(scroll, 300) );

  let lastNavBarHeight = 100;

  checkSize(); // init
  $(window).resize(checkSize);

  // adding top padding on body equal to the header height
  function checkSize() {

      let navHeight = $( "#header" ).height();

      if ( navHeight !== lastNavBarHeight ) {
          $( "main" ).css( "padding-top", navHeight + "px" );
          lastNavBarHeight = navHeight;
      }

  }

}