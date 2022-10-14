  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("list-tampos").style.width = "0";
    document.getElementById("list-vidros").style.width = "0";
    document.getElementById("list-bases").style.width = "0";
    document.getElementById("menu").style.width = "0";
  }

  var tbtn  = document.getElementById('opentampos');
    tbtn.addEventListener('click', function(){
    document.getElementById("list-tampos").style.width = "250px";
  })

  var vbtn  = document.getElementById('openvidros');
    vbtn.addEventListener('click', function(){
    document.getElementById("list-vidros").style.width = "250px";
  })

  var bbtn  = document.getElementById('openbases');
    bbtn.addEventListener('click', function(){
    document.getElementById("list-bases").style.width = "250px";
  })

  function abrirmenu(){
    document.getElementById("menu").style.width = "250px";

  }
