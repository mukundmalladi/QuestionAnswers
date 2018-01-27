function replaceT(obj){
var newO=document.createElement('input');
newO.setAttribute('type','password');
newO.setAttribute('size','20');
newO.setAttribute('name',obj.getAttribute('name'));
obj.parentNode.replaceChild(newO,obj);
newO.focus();
}