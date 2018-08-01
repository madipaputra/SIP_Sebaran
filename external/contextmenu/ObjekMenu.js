
class ObjekMenu {
  
  constructor(labelMenu, iconMenu, evtSaatDipilih) {
    var label = labelMenu;
    var icon = iconMenu;
    var eventSaatDipilih = evtSaatDipilih;
    
    /////////////////////////////////////////
    //
    // getter dan setter
    //
    
    this.getEventSaatDipilih = function() {
      return eventSaatDipilih;
    }
    
    this.getLabel = function() {
      return label;
    };
    
    this.getIcon = function() {
      return icon;
    };
    
    this.setLabel = function(lb) {
      label = lb;
    };
    
    this.setIcon = function(ic) {
      icon = ic;
    };
    
    this.setEventSaatDipilih = function(strFungsi) {
      eventSaatDipilih = strFungsi;
    };
    
    ///////////////////////////////////////////
    //
    // method lain
    //
    
    this.buatMenu = function() {
      var arr = ["<div class='icon-contextmenu'>\n\
                    <img src='"+icon+"' />\n\
                    <span>"+label+"</span>\n\
                  </div>", eventSaatDipilih];
      
      return arr;
    };
  }
}