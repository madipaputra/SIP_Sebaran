
class ContextMenu extends Tumpukan {
  
  constructor() {
    super();
    
    /////////////////////////////////
    //
    // getter dan setter
    //
    
    this.getDaftarMenu = function() {
      return this.getData();
    };
    
    //////////////////////////////////
    //
    // method lain
    //
    
    this.tambahkanMenu = function(menu) {
      this.masukkan(menu);
      
      return this;
    };
    
    this.tambahkanSemuaMenu = function(daftarMenu) {
      this.masukkanSemuaData(daftarMenu);
      
      return this;
    };
    
    this.hapusMenuDiIndex = function(ind) {
      this.hapusDiIndex(ind);
      
      return this;
    };
    
    this.pasang = function(namaClass) {
      class2context(namaClass, "", this.getDaftarMenu());
      
      return this;
    };
  }
}