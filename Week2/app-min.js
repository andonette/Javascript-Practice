var h1=document.querySelector("h1"),h1ParentEl=h1.parentElement,h1ParentNode=h1.parentNode;console.log(h1ParentEl),console.log(h1ParentNode),console.log(h1.parentNode.parentNode);var content=document.querySelector(".content"),contentChildrenEls=content.children,contentChildrenNodes=content.childNodes,contentFirstChildNode=content.firstChild,contentLastChildNode=content.lastChild,contentLastChildEl=content.lastElementChild,contentFirstChildEl=content.firstElementChild,contact=document.getElementById("contact"),contactPrevNode=contact.previousSibling,contactNextNode=contact.nextSibling,contactPrevEl=contact.previousElementSibling,contactNextEl=contact.nextElementSibling;console.log(contactPrevNode,contactNextNode),console.log(contactPrevEl,contactNextEl);