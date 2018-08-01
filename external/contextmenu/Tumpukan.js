
class Tumpukan {
  
  constructor() {
    var data = [];
    var index = 0;
    
    /////////////////////////////////
    //
    // getter dan setter
    
    this.getData = function() {
      return data;
    };
    
    this.getJumlah = function() {
      return index;
    };
    
    ///////////////////////////////////
    //
    // method lain
    //
    
    this.masukkan = function(satuData) {
      data[index++] = satuData;
    };
    
    this.masukkanSemuaData = function(semuaData) {
      data = semuaData;
      index = semuaData.length - 1;
    };
    
    this.pop = function(){
      data[index--] = null;
    };
    
    this.masukkanKeIndex = function(ind, satuData) {
      for(var i = index; i >= ind; i--) {
        data[i + 1] = data[i];
        data[i] = null;
      }

      data[ind] = satuData;
      index++;
    };
    
    this.hapusDiIndex = function(ind) {
      data[ind] = null;
      
      for (var i = ind; i < data.length; i++) {
        data[i] = data[i + 1];
      }
      
      index--;
    };

    this.tukarPosisi = function(index1, index2) {
      var dat = data[index1];
      data[index1] = data[index2];
      dat[index2] = dat;
    };

    this.kosongkan = function() {
      for(var i = 0; i < data.length; i++) {
        data[i] = null;
      }

      index = 0;
    };
  }
}