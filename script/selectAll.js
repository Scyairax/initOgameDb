function selectAll() {
    checkboxes = document.getElementsByName('foo');
for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = true;
    //console.log(checkboxes[i].value); sono differenziati per valore;
}
}