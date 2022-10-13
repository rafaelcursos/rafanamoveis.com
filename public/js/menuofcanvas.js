  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("list-tampos").style.width = "0";
    document.getElementById("list-vidros").style.width = "0";
    document.getElementById("list-bases").style.width = "0";
  }

  var btn  = document.getElementById('opentampos');
  btn.addEventListener('click', function(){
    document.getElementById("list-tampos").style.width = "250px";
  })

  var btn  = document.getElementById('openvidros');
  btn.addEventListener('click', function(){
    document.getElementById("list-vidros").style.width = "250px";
  })

  var btn  = document.getElementById('openbases');
  btn.addEventListener('click', function(){
    document.getElementById("list-bases").style.width = "250px";
  })