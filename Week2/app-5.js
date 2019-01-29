/********************************
 * Getting DOM Node Values
 * 1.3.5
 *
 *******************************/

/********************************
 * innerHTML, innerText and
 * textContent
 * 1.3.5.1
 *
 *******************************/


// var content = document.querySelector( '.content' );
//
// //THis gives us all the HTML with tags
// console.log( content.innerHTML );
// //This will show us the tezt betweeen
// //the tags, unformatted
// console.log( content.innerText );
// //This will show us the text in the format
// // of how its written in the code editor
// //but without the tags
// console.log( content.textContent );



/********************************
 * Setting innerHTML and
 * textContent
 * 1.3.5.2
 *
 *******************************/

//Selects the element named 'content '
//assigns it to a new variable called 'content'
// //creates a second variable called newContent
// var content = document.querySelector( '.content' ),
//     newContent;
//
// //building out the content variable
// //This changes it completely
// // content.innerHTML = '<h2>Sub Title</h2>';
// // content.innerHTML += '<p>Lorem</p>';
//
// //This way is best practice
// newContent = '<h2>Sub Title</h2>';
// newContent += '<p>Lorem</p>';
//
// content.innerHTML = newContent;
//
// content.textContent = '<p>Lorem</p>';
// content.textContent += 'Text';
//
// content.innerText = '<p>Lorem</p>';
// content.innerText += 'Text';




/********************************
 * outerHTML and outerText
 * 1.3.5.3
 *
 *******************************/

//
// var content = document.querySelector( '.content' );
//
// console.log( content.outerHTML );
// console.log( content.outerText );
//
//

/********************************
 * Setting outerHTML and outerText
 * 1.3.5.4
 *
 *******************************/

//
// var content = document.querySelector( '.content' ),
//     newOuterHTML;

// content.outerHTML = '<div class="content active">';
// content.outerHTML += '<h1>New Title</h1>';
// content.outerHTML += '<p>Nuevo Lorem</p>';
// content.outerHTML += '</div>';

//
// newOuterHTML = '<article class="content active">';
// newOuterHTML += '<h1>New Title</h1>';
// newOuterHTML += '<p>Nuevo Lorem</p>';
// newOuterHTML += '</article>';
//
// content.outerHTML = newOuterHTML;
//
//
//
// content.outerText = 'All of the new text';
// console.log( content );

/********************************
 * data and nodeValue for
 * Text Nodes
 * 1.3.5.5
 *
 *******************************/


// var a = document.querySelector( 'a' ),
//     aText = a.firstChild,
//     aAtts = a.attributes;
//
//
// console.log( aText.data );
// console.log( aText.nodeValue );
//
// console.log( aAtts );
//
// console.log( aAtts[0].data );
// console.log( aAtts[0].nodeValue );


/********************************
 * Setting data and nodeValue
 * 1.3.5.6
 *
 *******************************/

//
//This is only going to work if the nav and header is disabled
//as they are links
var a = document.querySelector( 'a' ),
    aText = a.firstChild;

aText.data = 'Follow me on Twitter';
//aText.nodeValue = '@hijacked';

// if ( 3 === aText.nodeType ) {
//   aText.nodeValue = '@confirmed';
// }
