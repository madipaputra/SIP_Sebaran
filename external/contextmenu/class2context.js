/* class2context.js
 creator: Arnau
 July 2016
 version: v0.1
 
 
 usage:
 class2context(
 'className',
 "title",
 [["option1", "functionoption1()"], ["option 2","functionoption2()"]]
 );
 */

/* MUTATION OBSERVER
 --detect changes in dom, and re-asign context menus*/
// select the target node //MUTATION DOM
var target = document.body;
var mutNum = 0;
var observer = new MutationObserver(function (mutations) {
  mutNum++;
//    ContextMenus();
});
// configuration of the observer:
var config = {attributes: true, childList: true, characterData: true};
// pass in the target node, as well as the observer options
observer.observe(target, config);
/* </MUTATION OBSERVER */


//creates the div where the context menus will place
document.body.innerHTML += "<div id='contextMenus'></div>";

function setContextMenuPosition(event, contextMenu) {
  var mousePosition = {};
  var menuPosition = {};
  var menuDimension = {};

  menuDimension.x = contextMenu.outerWidth();
  menuDimension.y = contextMenu.outerHeight();
  mousePosition.x = event.pageX;
  mousePosition.y = event.pageY;

  if (mousePosition.x + menuDimension.x > $(window).width() + $(window).scrollLeft()) {
    menuPosition.x = mousePosition.x - menuDimension.x;
  } else {
    menuPosition.x = mousePosition.x;
  }

  if (mousePosition.y + menuDimension.y > $(window).height() + $(window).scrollTop()) {
    menuPosition.y = mousePosition.y - menuDimension.y;
  } else {
    menuPosition.y = mousePosition.y;
  }

  return menuPosition;
}

function class2context(classgiv, title, options) {
  classgiv = JSON.parse(JSON.stringify(classgiv));
  
  if (document.getElementById("context" + classgiv)) {
    //toastr.success("alreadyExist");
  }
  else {
    var aux = "";
    aux += "<div id='context" + classgiv + "' class='contextMenu'>";
    aux += "  <ul class='c2c-dropdown c2c-border' " +
              "style='display:block;position:static;margin-bottom:5px;'>";
    aux += "<div class='contextTitle'>" + title + "</div>";
    
    for (var i = 0; i < options.length; i++) {
      aux += "<a onmousedown='" +
              options[i][1] + ";' href='javascript:void(0);'>" + options[i][0] +
              "</a>";
    }
    
    aux += "  </ul>";
    aux += "</div>";

    //adds the div context menu into the context menus div place
    document.getElementById('contextMenus').innerHTML += aux;
  }

  for (var i = 0; i < document.getElementsByClassName(classgiv).length; i++)
  {
    classgiv = JSON.parse(JSON.stringify(classgiv));
    document.getElementsByClassName(classgiv)[i].addEventListener("contextmenu", function (e) {
      // Avoid the real one
      e.preventDefault();
      e.stopPropagation();
      setTimeout(function () {
        var posisi = setContextMenuPosition(e, $("#context" + classgiv));
        document.getElementById('context' + classgiv).style.display = 'block';
        document.getElementById('context' + classgiv).style.left = (posisi.x) + "px";
        document.getElementById('context' + classgiv).style.top = (posisi.y) + "px";
      }, 100);
    });
  }

  document.body.addEventListener("mousedown", function (e) {
    // Avoid the real one
    //e.preventDefault();
    if (document.getElementById('context' + classgiv)) {
      setTimeout(function () {
        document.getElementById('context' + classgiv).style.display = 'none';
      }, 70);
    }
    
    return false;
  }, false);

}
